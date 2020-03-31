<?php

namespace App\Http\Controllers;
use Image;
use App\User;
use App\Student;
use App\Guardian;
use App\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $tutor=Tutor::where('status',1)->paginate(8);

        return view('pages.student.index')->with('tutors',$tutor);
    }
  public function registrationpage()

    {
        $guardian=Guardian::all();
        return view('pages.registrationGS')->with('guardian',$guardian);
    }

  public function tutordetails($id)
    {
        $id=session()->get('userid');
         $student=Student::where('id',$id)->first();  
         $tutor=Tutor::where('id',$id)->first();  
   return view('pages.student.tutorprofile')->with('tutor',$tutor)->with('student',$student);
       }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
     $validator = Validator::make($request->all(), [

'name'=>'required|max:150',
'username'=>'required|max:150',
'email'=>'required',
'gender'=>'required',
'medium'=>'required',
'edu_institution'=>'required',
'result'=>'required',
'guardian'=>'required',
'password'=>'required'


]);


        $user=new User;
        $student=new Student;
        $user->name=$request->name;
         $user->email=$request->email;
         $user->password= Hash::make($request->password);
         $user->save();

         $student->user_id=User::all()->last()->id;
        $student->username=$request->username;
        $img=$request->photo;
        $image=time().'.'.$img->getClientOriginalExtension();
        $location='images/students/'.$image;
        Image::make($img)->save($location);
        $student->photo=$image;
        $student->class=$request->class;
        $student->medium=$request->medium;
        $student->gender=$request->gender; 

        $student->educational_institution=$request->edu_institution;
        $student->academic_result=$request->result;
        $student->guardian_id=$request->guardian;
      


        $student->save();
        $request->session()->put('login','true');
        $request->session()->put('userid',$student->id);
        $request->session()->put('userrole','student');
        return redirect()->route('student.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use Image;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tutor.index');
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
       $request->validate([

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



        $student=new Student;


        $student->name=$request->name;
        $student->username=$request->username;
        $student->email=$request->email;
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
        $student->password= Hash::make($request->password);


        $student->save();



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

<?php

namespace App\Http\Controllers;
use App\Guardian;
use App\Tutor;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {

        $role=session()->get('userrole');
    if($role=='tutor'){

    $id=session()->get('userid'); 
    $tutor=Tutor::where('id',$id)->first();    
        
    return view('pages.tutor.profile')->with('tutor',$tutor);
    }

    elseif($role=='guardian'){
   $id=session()->get('userid'); 
    $guardian=Guardian::where('id',$id)->first();
     
        
    return view('pages.guardian.profile')->with('guardian',$guardian);
}

    elseif($role=='student'){
    $id= session()->get('userid'); 
    $student=Student::where('id',$id)->first();    
        
    return view('pages.student.profile')->with('student',$student);}
        
    }
  public function updateguardianprofile(Request $request , $id)
    {

  $guardian=Guardian::where('id',$id)->first();
  $user=User::where('id',$guardian->user_id)->first(); 
  $user->name=$request->name;
  $guardian->username=$request->username;
    $guardian->profession=$request->profession;
   $guardian->phone_number=$request->phone_number;
     $guardian->address=$request->address;
 $guardian->save();
   $user->save();

return redirect()->back();

    }

    public function updatetutorprofile(Request $request , $id)
    {

  $tutor=Tutor::where('id',$id)->first();
  $user=User::where('id',$tutor->user_id)->first(); 
  $user->name=$request->name;
  $tutor->username=$request->username;
  $tutor->profession=$request->profession;
  $tutor->educational_qualification=$request->educational_qualification;
  $tutor->phone_number=$request->phone_number;
  $tutor->expert_in=$request->expert_in;
  $tutor->areas=$request->areas;
  $tutor->experience_of_tuition=$request->experience_of_tuition;
  $tutor->current_tuition=$request->current_tuition;
  $tutor->available_start_time=$request->available_start_time;
  $tutor->available_end_time=$request->available_end_time;
  $tutor->save();
  $user->save();

return redirect()->back();

    }

     public function updatestudentprofile(Request $request , $id)
    {

  $student=Student::where('id',$id)->first();
 
 
 
  
        $student->class=$request->class;
        $student->medium=$request->medium;
    
        $student->educational_institution=$request->edu_institution;
        $student->academic_result=$request->result;
  $student->save();


return redirect()->back();

    }
   
}

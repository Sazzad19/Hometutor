<?php

namespace App\Http\Controllers;
use App\Guardian;
use App\Tutor;
use App\Student;
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

   
}

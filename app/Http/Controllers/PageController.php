<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Tutor;
use App\Guardian;
use App\Student;
class PageController extends Controller
{
   public function index(){

 return view('pages.index');

   }

   public function login(){

 return view('pages.login');

   }

    public function loginpost(Request $request){

 

 $user=User::where('email',$request->email)->first();
 if(Hash::check($request->password,$user->password)){
 if($tutor=Tutor::where('user_id',$user->id)->first()){

 $request->session()->put('login','true');
 $request->session()->put('userid',$tutor->id);
 $request->session()->put('userrole','tutor');
return redirect()->route('tutor.index');
}

 elseif($guardian=Guardian::where('user_id',$user->id)->first()){
 $request->session()->put('login','true');
 $request->session()->put('userid',$guardian->id);
 $request->session()->put('userrole','guardian');
return redirect()->route('guardian.index');

 }
  elseif($student=Student::where('user_id',$user->id)->first()){
 $request->session()->put('login','true');
 $request->session()->put('userid',$student->id);
 $request->session()->put('userrole','student');
return redirect()->route('student.index');

 }
 
}
else{
	return redirect()->route('login')->with('message','Wrong Password');
}
 	
  } 


   public function logout(){

session()->flush();
return redirect()->route('login');
   }
   



   public function contact(){

 return view('pages.contactpage');

   }
}

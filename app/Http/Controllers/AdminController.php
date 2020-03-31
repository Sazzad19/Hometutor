<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tutor;
use App\Tuition;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{

     public function loginform(){
        return view('admin.pages.adminlogin');
      }


      public function login(Request $request){
        $admin=DB::table('admin')->where('email',$request->email)->where('password',$request->password)->first();
        if($admin){
          $request->session()->put('userrole','admin');
          $request->session()->put('adminemail',$admin->email);
        return redirect()->route('admin.index');
         }
        else{
         return redirect()->route('admin.loginform')->with('message','Wrong Information');
      }
      }

  public function logout(){

       session()->flush();
      return redirect()->route('admin.loginform');
      }



      public function index(){
      	return view('admin.pages.index');
      }


     public function tutorlist(){
$tutors=Tutor::all();
return view('admin.pages.tutorlist')->with('tutors',$tutors);

     }

       public function tutor_approval($id){
$tutor=Tutor::find($id);
$tutor->status=1;
$tutor->save();
return redirect()->back();
} 

 public function tutor_destroy($id){
$tutor=Tutor::find($id);
$image_path=public_path()."/images/tutors/".$tutor->photo;
if(file_exists($image_path)) {
     @unlink($image_path);
}
$tutor->user->delete();
$tutor->delete();
return redirect()->back();
 }

  public function tuitionlist(){
$tuitions=Tuition::all();
return view('admin.pages.tuitionlist')->with('tuitions',$tuitions);

     }

            public function tuition_approval($id){
$tuition=Tuition::find($id);
$tuition->status=1;
$tuition->save();
return redirect()->back();
}

public function tution_destroy($id){
$tuition=Tuition::find($id);
$tuition->delete();
return redirect()->back();
 }
}

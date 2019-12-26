<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{

	      public function index(){
             return view('pages.email');

	      }

 

      public function send_to_tutor_email(Request $request){

 $data = array(
 	'to' => $request->to ,
 	'class' => $request->class ,
 	 'subject'=>$request->subject,
 	 'institute' => $request->institute ,
 	 'gender' => $request->gender ,
 	 'medium' => $request->medium ,
 	 'location' => $request->location ,
 	 'days' => $request->days ,
 	  'time' => $request->time ,
 	   'additional_info' => $request->additional_info 
 	    );

Mail::to($data['to'])->send(new SendMail($data));
 return back()->with('success','E-mail Sent Successfully');
    }

          public function send_to_guardian_email(Request $request){

 $data = array(
 	'to' => $request->to ,
 	'id' => $request->id ,
 	'name' => $request->name ,
 	'gender' => $request->gender ,
 	 'photo'=>$request->photo,
 	 'profession' => $request->profession ,
 	 'educational_qualification' => $request->educational_qualification ,
 	 'phone_number' => $request->phone_number ,
 	 'experience_of_tuition' => $request->experience_of_tuition ,
 	 'current_tuition' => $request->current_tuition ,
 	 
 	    ); 

Mail::to($data['to'])->send(new SendMail($data));
 return back()->with('success','E-mail Sent Successfully');
    }
}

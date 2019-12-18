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

 

      public function sendemail(Request $request){

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
}

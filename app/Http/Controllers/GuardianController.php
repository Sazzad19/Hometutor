<?php

namespace App\Http\Controllers;
use Image;
use App\Guardian;
use App\Tutor;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuardianController extends Controller
{
   
    public function index()
    {
      $tutor=Tutor::all();

        return view('pages.guardian.index')->with('tutors',$tutor);
    }

    
   
 


    public function store(Request $request)
    {
       $request->validate([ 

'name'=>'required|max:150',
'username'=>'required|max:150',
'email'=>'required',
'address'=>'required',
'phone_number'=>'required|numeric',

'password'=>'required'

]);



        $guardian=new Guardian;
        $user=new User;


         $user->name=$request->name;
         $user->email=$request->email;
         $user->password= Hash::make($request->password);
         $user->save();

        $guardian->user_id=User::all()->last()->id;
        $guardian->username=$request->username;
        $img=$request->photo;
        $image=time().'.'.$img->getClientOriginalExtension();
        $location='images/guardians/'.$image;
        Image::make($img)->save($location);
        $guardian->photo=$image;

        $guardian->address=$request->address;
        $guardian->phone_number=$request->phone_number;
        $guardian->children=$request->children;
       
      
        $guardian->save();
        $request->session()->put('login','true');
        $request->session()->put('userid',$guardian->id);
        $request->session()->put('userrole','guardian');
        return redirect()->route('guardian.index');
       
    }

  
    public function tutordetails($id)
    {
         $tutor=Tutor::where('id',$id)->first();  
   return view('pages.tutor.profile')->with('tutor',$tutor);
       }



    public function update(Request $request, Guardian $guardian)
    {
        
    }

    public function destroy(Guardian $guardian)
    {
        
    }
}

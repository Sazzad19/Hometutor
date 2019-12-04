<?php

namespace App\Http\Controllers;
use Image;
use App\Guardian;
use App\Tutor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tutor=Tutor::all();

        return view('pages.guardian.index')->with('tutors',$tutor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
 


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
'address'=>'required',
'phone_number'=>'required|numeric',

'password'=>'required'

]);



        $guardian=new Guardian;


        $guardian->name=$request->name;
        $guardian->username=$request->username;
        $guardian->email=$request->email;
        
        $img=$request->photo;
        $image=time().'.'.$img->getClientOriginalExtension();
        $location='images/guardians/'.$image;
        Image::make($img)->save($location);
        $guardian->photo=$image;

        $guardian->address=$request->address;
        $guardian->phone_number=$request->phone_number;
        $guardian->children=$request->children;
        $guardian->password= Hash::make($request->password);
      
        $guardian->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
    }
}

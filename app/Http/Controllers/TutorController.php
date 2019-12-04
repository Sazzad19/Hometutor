<?php

namespace App\Http\Controllers;
use Image;
use App\Tutor;
use App\Tuition;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuitions=Tuition::all();
        $subjects=Subject::all();
        return view('pages.tutor.tutioncircular')->with('tuitions',$tuitions)->with('subjects',$subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
    return view('pages.tutor.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      


        $tutor=new Tutor;


        $tutor->name=$request->name;
        $tutor->username=$request->username;
        $tutor->email=$request->email;
        $img=$request->photo;
        $image=time().'.'.$img->getClientOriginalExtension();
        $location='images/tutors/'.$image;
        Image::make($img)->save($location);
        $tutor->photo=$image;
        $tutor->gender=$request->gender;
        $tutor->areas=$request->area;
        $tutor->educational_qualification=$request->qualification;
        $tutor->experience_of_tuition=$request->experience;
        $tutor->current_tuition=$request->current_tuition;
        $tutor->expert_in=$request->expert_in;
        $tutor->phone_number=$request->phone_number;
        $tutor->password= Hash::make($request->password);

      
        $tutor->save();
        
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutor $tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        //
    }
}

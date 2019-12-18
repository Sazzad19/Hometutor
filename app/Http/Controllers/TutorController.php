<?php

namespace App\Http\Controllers;
use Image;
use App\Tutor;
use App\Tuition;
use App\Subject;
use App\User;
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
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      

        $user=new User;
        $tutor=new Tutor;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password= Hash::make($request->password);
         $user->save();

        
        $tutor->user_id=User::all()->last()->id;
        $tutor->username=$request->username;
        $img=$request->photo;
        $image=time().'.'.$img->getClientOriginalExtension();
        $location='images/tutors/'.$image;
        Image::make($img)->save($location);
        $tutor->photo=$image;
        $tutor->gender=$request->gender;
        $tutor->areas=$request->area;
        $tutor->educational_qualification=$request->qualification;
        $tutor->profession=$request->profession;
        $file=$request->file('id_card');
       
        $file->store('public/files/tutor');
        $tutor->id_card=$file;
        $tutor->experience_of_tuition=$request->experience;
        $tutor->current_tuition=$request->current_tuition;
        $tutor->available_start_time=$request->available_start_time;
        $tutor->available_end_time=$request->available_end_time;

        $tutor->expert_in=$request->expert_in;
        $tutor->phone_number=$request->phone_number;
        

      
        $tutor->save();
        $request->session()->put('login','true');
        $request->session()->put('userid',$tutor->id);
        $request->session()->put('userrole','tutor');
       return redirect()->route('tutor.index');

        
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

<?php

namespace App\Http\Controllers;

use App\Tuition;
use App\Subject;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function createtuition()
    {
          return view('pages.guardian.createtuition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetuition(Request $request)
    {
        
 $tuition=new Tuition;
 $tuition->title=$request->title;
 $tuition->s_fullName=$request->s_fullName;
 $tuition->s_gender=$request->s_gender;
 $tuition->s_college=$request->s_college;
 $tuition->s_medium=$request->s_medium;
 $tuition->s_class=$request->s_class;
 $tuition->g_phoneNumber=$request->g_phoneNumber;
 $tuition->g_email=$request->g_email;
 $tuition->s_districts=$request->s_districts;
 $tuition->s_area=$request->s_area;
 $tuition->s_address=$request->s_address;
 $tuition->t_gender=$request->t_gender;
 $tuition->t_days=$request->t_days;    
 $tuition->time=$request->time;
 $tuition->t_salary=$request->t_salary;
 $tuition->additional_info=$request->additional_info;
 
  $tuition->save();

$tuition=Tuition::all()->last()->id;
$count=count($request->t_subject);

 for ($i=0; $i < $count; $i++) { 
$subject[$i]=new Subject;
$subject[$i]->tuition_id=$tuition;
$subject[$i]->t_subject=$request->t_subject[$i];
$subject[$i]->save();
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function show(Tuition $tuition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function edit(Tuition $tuition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tuition $tuition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tuition $tuition)
    {
        //
    }
}

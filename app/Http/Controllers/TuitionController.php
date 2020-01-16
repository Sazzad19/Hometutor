<?php

namespace App\Http\Controllers;

use App\Tuition;
use App\Subject;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
  
   public function tuitionlist($id)
    {
        $tuition=Tuition::where('guardian_id',$id)->get();

          $subject=Subject::all();
   return view('pages.guardian.Mytuition')->with('tuitions',$tuition)->with('subjects',$subject);
    }



   public function createtuition()
    {
          return view('pages.guardian.createtuition');
    }

 
    public function storetuition(Request $request)
    {
        
 $tuition=new Tuition;
 $tuition->guardian_id=$request->guardian_id;
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
return redirect()->route('guardian.createtuition')->with('success','Tuition Posted Successsfully');
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
    public function edittuition($id)
    {
       $tuition=Tuition::find($id);
        return view('pages.guardian.edittuition')->with('tuition',$tuition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function updatetuition(Request $request,$id)
    {
         $tuition=Tuition::find($id);

 $tuition->title=$request->title;
 $tuition->s_fullName=$request->s_fullName;
 $tuition->s_gender=$request->s_gender;
 $tuition->s_college=$request->s_college;
 $tuition->s_medium=$request->s_medium;
 $tuition->s_class=$request->s_class;

 $tuition->s_districts=$request->s_districts;
 $tuition->s_area=$request->s_area;
 $tuition->s_address=$request->s_address;
 $tuition->t_gender=$request->t_gender;
 $tuition->t_days=$request->t_days;    
 $tuition->additional_info=$request->additional_info;
 $tuition->save();
 return redirect()->route('guardian.tuitionlist',$tuition->guardian_id)->with('success','Tuition Updated Successsfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function deletetuition($id)
    {
          $tuition=Tuition::find($id);
          $tuition->delete();
          return redirect()->route('guardian.tuitionlist',$tuition->guardian_id)->with('success','Tuition Deleted Successsfully');
    }
}

<?php

namespace App\Http\Controllers;
use Image;
use App\Tutor;
use App\Tuition;
use App\Subject;
use App\User;
use App\Guardian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
class TutorController extends Controller
{
   
    public function index()
    {
       $id=session()->get('userid');
        $tuitions=Tuition::paginate(2);
      
        $tutor=Tutor::where('id',$id)->first();

        return view('pages.tutor.tutioncircular')->with('tuitions',$tuitions)->with('tutor',$tutor);
    }
 
    
    public function store(Request $request)
    {

     $validator = Validator::make($request->all(), [

'name'=>'required|max:150',
'username'=>'required|max:150',
'email'=>'required|email|unique:users,email',

'phone_number'=>'required|numeric',
'password'=>'required',
'gender'=>'required',
'area'=>'required',
'qualification'=>'required',
'profession'=>'required',
'id_card_front_part'=>'required',
'id_card_back_part'=>'required',
'expert_in'=>'required'
]);
       if ($validator->fails()) {
            return redirect()->route('pages.registrationTU')
                        ->withErrors($validator)
                        ->withInput();
        }

      

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
        $id_card_front_part=$request->id_card_front_part;
        $front_part=rand().'.'.$id_card_front_part->getClientOriginalExtension();
        Image::make($id_card_front_part)->save('images/tutors/Id_card/'.$front_part);
        $tutor->id_card_front_part= $front_part;

         $id_card_back_part=$request->id_card_back_part;
        $back_part=rand().'.'.$id_card_back_part->getClientOriginalExtension();
        Image::make($id_card_back_part)->save('images/tutors/Id_card/'.$back_part);
        $tutor->id_card_back_part=$back_part;


      
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
  public function guardiandetails($id)
    {
         $guardian=Guardian::where('id',$id)->first();  
   return view('pages.guardian.profile')->with('guardian',$guardian);
       }

    

    public function search(Request $request)
    {
       $id=session()->get('userid');
       $tutor=Tutor::where('id',$id)->first(); 
     
      $subjresult=Subject::query();
      $result = Tuition::query();
         $class=$request->class;
         $subject=$request->subject;
         $medium=$request->medium;
         $gender=$request->gender;
         $district=$request->district;
         $salary=$request->salary;
         $time=$request->time;


if (!empty($subject)) {
   $subjresult = $subjresult->where('t_subject',$subject);
    $subjresult= $subjresult->get();
    foreach ($subjresult as $subject) {
        $result= $result->where('id', $subject->tuition_id);
    }

}

if (!empty($gender)) {
    $result = $result->where('t_gender', $gender);
}

if (!empty($medium)) {
    $result = $result->where('s_medium','like', '%'.$medium.'%');
}

if ($class!=NULL) {
    $result = $result->where('s_class', $class); 
}

if (!empty($area)) {
    $result = $result->where('s_districts','like', '%'.$district.'%');
}

if (!empty($salary)) {
    $result = $result->where('t_salary',$salary);
}

if (!empty($time)) {
   $result = $result->where('time',$time);
}

$result=$result->paginate(2);

return view('pages.tutor.tutioncircular')->with('tuitions',$result)->with('tutor',$tutor)->with('success','Searching Completed');

    }



    public function show(Tutor $tutor)
    {
        //
    }

    
    public function edit(Tutor $tutor)
    {
        //
    }

    
    public function update(Request $request, Tutor $tutor)
    {
        //
    }

    
    public function destroy(Tutor $tutor)
    {
        //
    }
}

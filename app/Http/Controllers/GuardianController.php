<?php

namespace App\Http\Controllers;
use Image;
use App\Guardian;
use App\Tutor;
use App\User;
use App\Guardianreviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Hash;
use PDF;

class GuardianController extends Controller
{
  




    public function index()
    {
      $tutor=Tutor::where('status',1)->paginate(8); 

        return view('pages.guardian.index')->with('tutors',$tutor);
    }

    
   
 


    public function store(Request $request)
    {
     

     $validator = Validator::make($request->all(), [

'name'=>'required|max:150',
'username'=>'required|max:150',
'email'=>'required|email|unique:users,email',
'address'=>'required',
'phone_number'=>'required|numeric',
'profession'=>'required'

]);
       if ($validator->fails()) {
            return redirect()->route('pages.registrationGS')
                        ->withErrors($validator)
                        ->withInput();
        }



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
         $guardian->profession=$request->profession;

        $guardian->address=$request->address;
        $guardian->phone_number=$request->phone_number;
        
       
      
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


 public function search(Request $request)
    {
      $result = Tutor::query();
         $subject=$request->subject;
          $gender=$request->gender;
          $area=$request->area;
           $profession=$request->profession;
            $experience=$request->experience;
             $qualification=$request->qualification;


if (!empty($gender)) {
    $result = $result->where('gender', $gender);
}

if (!empty($subject)) {
    $result = $result->where('expert_in', 'like', '%'.$subject.'%');
}

if (!empty($area)) {
    $result = $result->where('areas','like', '%'.$area.'%');
}

if (!empty($profession)) {
    $result = $result->where('profession', $profession);
}

if (!empty($experience)) {
    $result = $result->where('experience_of_tuition', 'like', '%'.$experience.'%');
}

if (!empty($qualification)) {
    $result = $result->where('educational_qualification', 'like', '%'.$qualification.'%');
}

$result = $result->paginate(8);

return view('pages.guardian.index')->with('tutors',$result);
    }



 public function printPDF($id)
    {
 set_time_limit(300);
       $tutor=Tutor::where('id',$id)->first();




      $data=[
       
    'name'=> $tutor->user->name,
     'email'=> $tutor->user->email,
      
       'photo'=> $tutor->photo,
        'gender'=> $tutor->gender,
         'areas'=> $tutor->areas,
          'educational_qualification'=> $tutor->educational_qualification,
           'profession'=> $tutor->profession,
            'experience_of_tuition'=> $tutor->experience_of_tuition,
             'current_tuition'=> $tutor->current_tuition,
              'available_start_time'=> $tutor->available_start_time,
               'available_end_time'=> $tutor->available_end_time,
                'expert_in'=> $tutor->expert_in,
                 'phone_number'=> $tutor->phone_number
];
       $pdf = PDF::loadView('pages.guardian.PDF', $data);    
        return $pdf->download('Tutor.pdf');
       }





    public function update(Request $request, Guardian $guardian)
    {
        
    }

    public function destroy(Guardian $guardian)
    {
        
    }
}

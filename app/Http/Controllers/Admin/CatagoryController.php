<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Image;
use File;
class CatagoryController extends Controller
{
   public function index(){

      $catagory=Catagory::orderBy('id','desc')->get();


       return view('admin.pages.catagory.index')->with('catagory',$catagory);

  }

   public function create(){

    $catagory=Catagory::orderBy('id','desc')->get();

return view('admin.pages.catagory.create')->with('catagory',$catagory);

   }


 public function store(Request $request){

$request->validate([

'name'=>'required|max:150',
'description'=>'required'


]); 




 $catagory = new Catagory;

 	  $catagory->name=$request->name;
   	$catagory->description=$request->description;
    $catagory->parent_id=$request->parent;
   
    
         $image= $request->image;
           
         $img=time().'.'.$image->getClientOriginalExtension();
         $location=public_path('images/category/'.$img);
         Image::make($image)->save($location);
         $catagory->image=$img;
         $catagory->save();


      

        session()->flash('success','Category has created successfully!!');
        return redirect()->route('admin.catagory');

   }

    public function edit($id){

        $catagory=Catagory::find($id);
  $catagories=Catagory::all();

        if(!is_null($catagory)){
      return view('admin.pages.catagory.edit')->with('catagory',$catagory)->with('catagories', $catagories);

        }

   

  }


public function update(Request $request,$id){
$request->validate([

'name'=>'required|max:150',
'description'=>'required'
]); 




 $catagory =Catagory::find($id);

    $catagory->name=$request->name;
    $catagory->description=$request->description;
    $catagory->parent_id=$request->parent;


         if(!is_null($image= $request->image)){     
         $img=time().'.'.$image->getClientOriginalExtension();
         $location=public_path('images/category/'.$img);
         Image::make($image)->save($location);
         $catagory->image=$img;}



   
     $catagory->save(); 

      session()->flash('success','Category has updated successfully!!');
      return redirect()->route('admin.catagory');

}





 public function delete($id){

        $catagory=Catagory::find($id);
 if(!is_null($catagory)){
  //if it is parent catagory then delete all it's sub-catagories.
        if($catagory->parent_id == NULL){
          //delete all sub-catagories
       $sub_catagories=Catagory::orderBy('id','desc')->where('parent_id',$catagory->id)->get();

           foreach($sub_catagories as $sub_catagory) {
         //delete category image
            if(File::exists('images/category/'.$sub_catagory->image)){
               File::delete('images/category/'.$sub_catagory->image);

            }

            $sub_catagory->delete();
           }

        }
        if(File::exists('images/category/'.$catagory->image)){
               File::delete('images/category/'.$catagory->image);

            }
        $catagory->delete();
      }
session()->flash('success','Category has deleted successfully!!');
 return redirect()->route('admin.catagory');
}


}

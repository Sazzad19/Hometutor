<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Image;
use File;
class brandController extends Controller
{
   public function index(){

      $brand=brand::orderBy('id','desc')->get();


       return view('admin.pages.brand.index')->with('brand',$brand);

  }

   public function create(){

 
return view('admin.pages.brand.create');

   }


 public function store(Request $request){

$request->validate([

'name'=>'required|max:150',
'description'=>'required'


]); 




 $brand = new Brand;

    $brand->name=$request->name;
    $brand->description=$request->description;
   
   
    
         $image= $request->image;
           
         $img=time().'.'.$image->getClientOriginalExtension();
         $location=public_path('images/brand/'.$img);
         Image::make($image)->save($location);
         $brand->image=$img;
         $brand->save();


      

        session()->flash('success','Brand has created successfully!!');
        return redirect()->route('admin.brand');

   }

    public function edit($id){

        $brand=Brand::find($id);
 

        if(!is_null($brand)){
      return view('admin.pages.brand.edit')->with('brand',$brand);

        }

   

  }


public function update(Request $request,$id){
$request->validate([

'name'=>'required|max:150',
'description'=>'required'
]); 




 $brand =Brand::find($id);

    $brand->name=$request->name;
    $brand->description=$request->description;
 


         if(!is_null($image= $request->image)){     
         $img=time().'.'.$image->getClientOriginalExtension();
         $location=public_path('images/brand/'.$img);
         Image::make($image)->save($location);
         $brand->image=$img;}



   
     $brand->save(); 

      session()->flash('success','Brand has updated successfully!!');
      return redirect()->route('admin.brand');

}





 public function delete($id){

        $brand=Brand::find($id);
 if(!is_null($brand)){

        if(File::exists('images/brand/'.$brand->image)){
               File::delete('images/brand/'.$brand->image);

            }
        $brand->delete();
      }
session()->flash('success','Brand has deleted successfully!!');
 return redirect()->route('admin.brand');
}


}

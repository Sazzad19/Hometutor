<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Product;
use Image;
use App\Models\ProductImage;
use App\Models\Catagory;
use App\Models\Brand;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    
    public function create(){
      $parent_catagory=Catagory::where('parent_id',NULL)->get();
      $brands=Brand::all();
return view('admin.pages.products.create')->with('parent_catagory',$parent_catagory)->with('brands',$brands);

   }
   public function store(Request $request){

$request->validate([

'name'=>'required|max:150',
'catagory'=>'required|numeric',
'brand'=>'required|numeric',
'description'=>'required',
'quantity'=>'required|numeric',
'price'=>'required|numeric',
'offer_price'=>'required|numeric'



]);




 $product = new Product;

 	  $product->name=$request->name;
   	$product->slug=str_slug($request->name);
  	$product->catagory_id=$request->catagory;
  	$product->brand_id=$request->brand;
   	$product->description=$request->description;
    $product->quantity=$request->quantity;
    $product->price=$request->price;
    $product->offer_price=$request->offer_price;
    $product->status=$request->status;
    $product->admin_id=$request->admin_id;

     $product->save();

     //product image insertion  

          if(count($request->product_image)>0){
         foreach ($request->product_image as $image) {
         $img=time().'.'.$image->getClientOriginalExtension();
         $location=public_path('images/products/'.$img);
         Image::make($image)->save($location);

         $product_image=new ProductImage;
         $product_image->product_id=$product->id;
         $product_image->image=$img;
         $product_image->save();


      }
}

        return redirect()->route('admin.products.create');

   }


  public function index(){

      $products=Product::orderBy('id','desc')->get();
      

       return view('admin.pages.products.index')->with('products',$products);

  }





   public function edit($id){

        $product=Product::find($id);

        $parent_catagory=Catagory::where('parent_id',NULL)->get();
        $brands=Brand::all();

        return view('admin.pages.products.edit')->with('product',$product)->with('parent_catagory',$parent_catagory)->with('brands',$brands);

  }




public function update(Request $request,$id){

         $request->validate([

          'name'=>'required|max:150',
          'description'=>'required',
          'catagory'=>'required|numeric',
          'brand'=>'required|numeric',
          'quantity'=>'required|numeric',
          'price'=>'required|numeric'
          
]);


 $product =Product::find($id);

            $product->name=$request->name;
            $product->slug=str_slug($request->name);
          
          
            $product->description=$request->description;
            $product->quantity=$request->quantity;
            $product->price=$request->price;
          
             $product->save();

             return redirect()->route('admin.products');
}



 public function delete($id){

        $product=Product::find($id);

        if(!is_null($product)){
           $product->delete();
        }
session()->flash('success','Product has deleted successfully!!');
 return redirect()->route('admin.products');
}

  }



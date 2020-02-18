<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ProductController extends Controller
{
    
    public function index(){ 
$products=Product::orderBy('id','desc')->get();

return view('pages.product.index')->with('products',$products);

   }


 public function show($slug){  

$product=Product::where('slug',$slug)->first();


if(!is_null($product)){
return view('pages.product.show')->with('product',$product);
}

else{
session()->flash('errors','Sorry!! No product is available by this URL!');
return redirect()->route('products');	
}


   }


}

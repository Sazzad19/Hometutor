<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Product;
class PageController extends Controller
{
   public function index(){
return view('pages.index');

   }
  public function contact(){
return view('pages.contact');

   }

 public function search(Request $request){ 
 	$search=$request->search;
$products=Product::orWhere('title','like','%'.$search.'%')
->orWhere('description','like','%'.$search.'%')
->orWhere('price','like','%'.$search.'%')
->orderBy('id','desc')
->get();

return view('pages.product.search')->with('products',$products);

   }


}

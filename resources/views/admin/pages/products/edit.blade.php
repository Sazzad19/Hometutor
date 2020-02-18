  @extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
            <div class="card-header">
              Edit Product
            </div>



              <div class="card-body">
                
          <form  action="{{route('admin.products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

               @include('admin.partials.messages')
               
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name"  name="name" value="{{$product->name}}">
  </div>
<div class="form-group"> 
    <label for="catagory">Catagory</label>
   <select id="catagory" class="form-control" name="catagory">
    <option value="{{$product->catagory_id}}">{{$product->catagory_id}}</option>
   
        @foreach($parent_catagory as $parent_catagory)
        <option value="{{$parent_catagory->id}}">{{$parent_catagory->name}}</option>

        @foreach(App\Models\Catagory::where('parent_id',$parent_catagory->id)->get() as $child_catagory)
          <option value="{{$child_catagory->id}}">------>{{$child_catagory->name}}</option>
        @endforeach

        @endforeach
      </select>
  </div>
  

 <div class="form-group">
    <label for="description">Description</label>
    <textarea  class="form-control" id="description" name="description" rows="8" cols="64">{{$product->description}}"  </textarea>
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"value="{{$product->price}}">
  </div>




  <div class="form-group">
    <label for="product_image">Product Image</label>
    <div class="row">
      <div class="col-md-4">
          <input type="file" class="form-control" id="product_image" name="product_image[]">
        </div>
        <div class="col-md-4">
          <input type="file" class="form-control" id="product_image" name="product_image[]">
        </div>
        <div class="col-md-4">
          <input type="file" class="form-control" id="product_image" name="product_image[]">
        </div>
        <div class="col-md-4">
          <input type="file" class="form-control" id="product_image" name="product_image[]">
        </div>
        <div class="col-md-4">
          <input type="file" class="form-control" id="product_image" name="product_image[]">
        </div>

  </div>
  </div>



  
  <button type="submit" class="btn btn-primary">Update Product</button>
</form>




              </div>



            </div>

     
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        
      <!-- main-panel ends -->
      @endsection
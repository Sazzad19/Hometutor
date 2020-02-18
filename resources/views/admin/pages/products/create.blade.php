  @extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
            <div class="card-header">
              Add Product
            </div>



              <div class="card-body">
                
                <form  action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

               @include('admin.partials.messages')
               
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name">
  </div>

  <div class="form-group"> 
    <label for="catagory">Catagory</label>
   <select id="catagory" class="form-control" name="catagory">
    <option >Select Catagory...</option>
   
        @foreach($parent_catagory as $parent_catagory)
        <option value="{{$parent_catagory->id}}">{{$parent_catagory->name}}</option>

        @foreach(App\Models\Catagory::where('parent_id',$parent_catagory->id)->get() as $child_catagory)
          <option value="{{$child_catagory->id}}">------>{{$child_catagory->name}}</option>
        @endforeach

        @endforeach
      </select>
  </div>

 <div class="form-group">
    <label for="brand">Brand</label>
    <select id="brand" class="form-control" name="brand">
        <option  value="0">Select Brand...</option>
         @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
      </select>
  </div>

 <div class="form-group">
    <label for="description">Description</label>
    <textarea  class="form-control" id="description" name="description" rows="8" cols="64"> </textarea>
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
  </div>

<div class="form-group">
    <label for="offer_price">Offer Price</label>
    <input type="text" class="form-control" id="offer_price" name="offer_price" placeholder="Enter offer price">
  </div>

<div class="form-group">
    <label for="status">Status</label>
     <select id="status" name="status" class="form-control">
        <option selected >Select Status...</option>
        <option value="1">Available</option>
         <option value="0">Not Available</option>
      </select>
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

  <div class="form-group">
    <label for="admin_id">Admin ID</label>
    <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="Enter your Admin ID">
  </div>

  
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>




              </div>



            </div>

     
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        
      <!-- main-panel ends -->
      @endsection
  @extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
            <div class="card-header">
              Add Brand
            </div>



              <div class="card-body">
                
                <form  action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

               @include('admin.partials.messages')
               
  <div class="form-group">
    <label for="name">Brand Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name">
  </div>

 

 <div class="form-group">
    <label for="description">Description</label>
    <textarea  class="form-control" id="description" name="description" rows="8" cols="64"> </textarea>
  </div>

 

  <div class="form-group">
    <label for="image">Brand Image</label>
   <input type="file" class="form-control" id="image" name="image">
  </div>


  
  <button type="submit" class="btn btn-primary">Add Brand</button>
</form>




              </div>



            </div>

     
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        
      <!-- main-panel ends -->
      @endsection
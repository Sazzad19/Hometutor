  @extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
            <div class="card-header">
              Edit Brand
            </div>



              <div class="card-body">
                
          <form  action="{{route('admin.brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

               @include('admin.partials.messages')
               
  <div class="form-group">
    <label for="title">Brand Name</label>
    <input type="text" class="form-control" id="name"  name="name" value="{{$brand->name}}">
  </div>

  

 <div class="form-group">
    <label for="description">Description</label>
    <textarea  class="form-control" id="description" name="description" rows="8" cols="64">{{$brand->description}}  </textarea>
  </div>

 <div class="form-group">
    <label for="image">Brand Old Image</label><br>
    <img src="{{asset('images/brand/'.$brand->image)}}" height="50px" width="100px"><br><br>

   <label for="image">Brand New Image</label>
   <input type="file" class="form-control" id="image" name="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Update Brand</button>
</form>




              </div>



            </div>

     
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        
      <!-- main-panel ends -->
      @endsection
  @extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
            <div class="card-header">
              Add Product
            </div>



              <div class="card-body">

                
               @include('admin.partials.messages')
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
     
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $i=1;

    @endphp
    @foreach($products as $product)

 

    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{$product->name}}</td>
    
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->quantity}}</td>
      <td>
        <a href="{{route('admin.products.edit',$product->id)}}"  type="button" class="btn btn-success">Edit</a>
         </td>
          <td>
        <a href="#deleteModal{{$product->id}}" data-toggle="modal" type="button" class="btn btn-danger">Delete</a>

<!-- Modal -->
<div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{!!route('admin.products.delete',$product->id)!!}" method="post">
        {{csrf_field()}}
      <button type="submit" class="btn btn-danger" >Parmanent Delete</button> 

      </form>

        </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

 </td>
    </tr>
     @php
    $i++;
    @endphp
    @endforeach
  </tbody>
</table>
                



              </div>



            </div>

     
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        
      <!-- main-panel ends -->




      @endsection
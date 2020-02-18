@extends('layouts.master')

@section('content')
{{--Slider & Content--}}
<div class="container margin-top-20">
<div class="row">
	<div class="col-md-4">
	 @include('partials.product-sidebar')

	</div>
	<div class="col-md-8">
		<div class="widget">
			<h3>Featured Products</h3> 
			<div class="row">
				<div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>
                 	<div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>
                 				<div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>

                    <div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>

			<div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>

                    <div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>

			<div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>

                    <div class="col-md-3 ">
					<div class="card">
					  <img class="card-img-top feature-img" src="{{asset('images/products/'.'xiaomi.jpg')}}" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">John Doe</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
                 </div>


               </div>
            </div>





		<div class="widget"></div>


	</div>
	


</div>


</div>

{{--End Slider & Content--}}

@endsection
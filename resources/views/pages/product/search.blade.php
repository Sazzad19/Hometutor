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
			<h3>Searched Products</h3>
			 @include('partials.all_products')
            </div>





		<div class="widget"></div>


	</div>
	


</div>


</div>

{{--End Slider & Content--}}

@endsection
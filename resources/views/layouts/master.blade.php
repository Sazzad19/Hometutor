

<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Laravel E-commerce')</title>
	@include('partials.style')
</head>
<body>

<div class="wrapper">

@include('partials.nav')

@yield('content')

@include('partials.footer')

</div>








@include('partials.scripts')
</body>
</html>
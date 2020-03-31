@extends('layout.master')

@section('content')
<div class="container">
  
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
           @if($message=Session::get('message'))
 <div class="alert alert-danger">
  <p>{{$message}}</p>
</div>
    @endif
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-signin" action="{{route('login.post')}}" method="post">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email"required autofocus>
                <label for="inputEmail">Email address</label> 
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
                <label for="inputPassword">Password</label>
              </div>


              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
             
            </form>
             <p class="text-center small">Don't have an account? <a href="">Register here!</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>



@include('include.nav')

@endsection
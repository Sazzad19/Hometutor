<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<form>
  <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Class:</h4>
    <div class="col-sm-10">
     <p>{{$data['class']}}</p>
    </div>
  </div>
  <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Subject:</h4>
    <div class="col-sm-10">
     <p>{{$data['subject']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Student's Intitute:</h4>
    <div class="col-sm-10">
     <p>{{$data['institute']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Student's Gender:</h4>
    <div class="col-sm-10">
     <p>{{$data['gender']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Medium:</h4>
    <div class="col-sm-10">
     <p>{{$data['medium']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Location Details:</h4>
    <div class="col-sm-10">
     <p>{{$data['location']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Dayes Per Week:</h4>
    <div class="col-sm-10">
     <p>{{$data['days']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Tuitioning Time:</h4>
    <div class="col-sm-10">
     <p>{{$data['time']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Additional Information:</h4>
    <div class="col-sm-10">
     <p>{{$data['additional_info']}}</p>
    </div>
  </div>
</form>
<button type="button" class="btn btn-success">Accept</button>
<button type="button" class="btn btn-danger">Deny</button>
<h3>Visit Us For More Tuition</h3>
<button type="button" class="btn btn-primary" href="{{route('tutor.index')}}" >Visit</button>

	</div>



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
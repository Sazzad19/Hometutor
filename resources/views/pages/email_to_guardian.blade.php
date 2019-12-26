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
    <h4  class="col-sm-2 col-form-label">Photo:</h4>
    <div class="col-sm-10">
    <img src="{{asset('images/tutors/'.$data[
    'photo'])}}" height="150px" width="150px">
    </div>
  </div>
  <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Name:</h4>
    <div class="col-sm-10">
     <p>{{$data['name']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Gender:</h4>
    <div class="col-sm-10">
     <p>{{$data['gender']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Profession:</h4>
    <div class="col-sm-10">
     <p>{{$data['profession']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Educatonal Qualification:</h4>
    <div class="col-sm-10">
     <p>{{$data['educational_qualification']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Phone Number:</h4>
    <div class="col-sm-10">
     <p>{{$data['phone_number']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Experience of Tuition:</h4>
    <div class="col-sm-10">
     <p>{{$data['experience_of_tuition']}}</p>
    </div>
  </div>
   <div class="form-group row">
    <h4  class="col-sm-2 col-form-label">Current Tuition:</h4>
    <div class="col-sm-10">
     <p>{{$data['current_tuition']}}</p>
    </div>
  </div>

</form>

<button type="button" class="btn btn-primary" href="{{route('guardian.tutor-details',$data['id'])}}" >My Profile</button>
<button type="button" class="btn btn-success">Accept</button>
<button type="button" class="btn btn-danger">Deny</button>


	</div>



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
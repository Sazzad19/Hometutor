<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>



<h2 style="text-align: center;">Tutor Informations</h2>

<table style="width:100%">
<tr>
    <th>Photo:</th>
    <td> <img src="http://localhost/Hometutor/public/images/tutors/{{$photo}}" style="height: 160px; width: 160px;"></td>
  </tr>

  <tr>
    <th>Name:</th>
    <td>{{$name}}</td>
  </tr>
 <tr>
    <th>Gender:</th>
    <td>{{$gender}}</td>
  </tr>
  <tr>
    <th>Educational Qualification:</th>
    <td>{{$educational_qualification}}</td>
  </tr>
   <tr>
    <th>Profession:</th>
    <td>{{$profession}}</td>
  </tr>
   <tr>
    <th>Expert In:</th>
    <td>{{$gender}}</td>
  </tr>
 <tr>
    <th>Experience of Tuition:</th>
    <td>{{$experience_of_tuition}}</td>
  </tr>
 <tr>
    <th>Current Tuition:</th>
    <td>{{$current_tuition}}</td>
  </tr>

  <tr>
    <th>Available Time:</th>
    <td>{{$available_start_time}} To {{$available_end_time}}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{$email}}</td>
  </tr>
 
<tr>
    <th>Phone Number:</th>
    <td>{{$phone_number}}</td>
  </tr>
 
</table>

</body>
</html>
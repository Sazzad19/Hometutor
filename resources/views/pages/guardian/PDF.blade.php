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



<h2>Tutor Informations</h2>

<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>{{$name}}</td>
  </tr>

  <tr>
    <th>Email:</th>
    <td>{{$email}}</td>
  </tr>
  <tr>
    <th>Gender:</th>
    <td>{{$gender}}</td>
  </tr>
  <tr>
    <th>Photo:</th>
    <td><img src="{{asset('images/tutors/'.$photo)}}"></td>
  </tr>
</table>

</body>
</html>
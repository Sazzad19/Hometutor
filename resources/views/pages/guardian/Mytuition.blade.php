<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hometutor</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}" >
      <link rel="stylesheet" href="{{asset('css/blog-post.css')}}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
	.container{

		max-width: 100%;
		
	}
	.table-wrapper {
		
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }

	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
    	max-width: 100px;
    	overflow: hidden;
        border-color: #e9e9e9;
        font-size: 12px;
    }
    table.table th i {
        font-size: 25px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 25px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>

</head>
<body>
@include('include.nav')
 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
               @if($message=Session::get('success'))
 <div class="alert alert-success">
  <p style="font-size: 20px;">{{$message}}</p>
</div>
    @endif
                <div class="row">
                    <div class="col-sm-8"><h2>My Posted <b>Tuitions</b></h2></div>
                    <div class="col-sm-4">
                      
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>

                    <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Student</th>
                                    <th>Stu.Gender</th>
                                    <th>Institute</th>
                                    <th>Class</th>
                                    <th>Medium</th>
                                    <th>Subject</th>
                                    <th>District</th>
                                    <th>Area</th>
                                    <th>Address</th>
                                    <th>Tutor Gender</th>
                                    <th>Days</th>
                                    <th>Time</th>
                                    <th>Salary</th>
                                    <th>Additional Info.</th>
                                   
                                   
                                    <th>Status</th>
                                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                		@foreach($tuitions as $tuition)
                    <tr>
                                            <td>{{$tuition->id  }}</td>
                                            <td>{{ $tuition->title }}</td>
                                            <td>{{$tuition->s_fullName }}</td>
                                            <td>{{$tuition->s_gender }}</td>
                                            <td>{{$tuition->s_college}}</td>
                                            <td>{{$tuition->s_class  }}</td>
                                            <td>{{$tuition->s_medium  }}</td>
                                             <td>@foreach($tuition->subjects as $subject){{$subject->t_subject }}@endforeach </td>
                                            <td>{{$tuition->s_districts }}</td>
                                            <td>{{$tuition->s_area }}</td>
                                            <td>{{$tuition->s_address }}</td>
                                            <td>{{$tuition->t_gender }}</td>
                                            <td>{{$tuition->t_days }}</td>
                                            <td>{{$tuition->time }}</td>
                                            <td>{{$tuition->t_salary }}</td>
                                            <td>{{$tuition->additional_info }}</td>
                                           
                                               

                                            <td>
                                           @if($tuition->status==1)
                                                    <span class="badge bg-blue">Approved</span>
                                        @else
                                                    <span class="badge bg-pink">Pending</span>
                                                    @endif
                                             
                                            </td>
                        <td>
							
                            <a class="edit" title="Edit" href="{{route('guardian.edittuition',$tuition->id )}}"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" href="{{route('guardian.deletetuition',$tuition->id )}}"data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
          
             @endforeach
                </tbody>
            </table>
        </div>
    </div>     
@include('include.footer')

</body>

</html>
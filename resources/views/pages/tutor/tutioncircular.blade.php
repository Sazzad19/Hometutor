@extends('layout.master')

@section('content')
<div class="container">
	<h5 class="text-title mt-4">Available tuition post</h5>
  
    @if($message=Session::get('success')) 
 <div class="alert alert-success">
  <p>{{$message}}</p>
</div>
    @endif
	<div class="row" style="margin-left:0px;margin-right: 0px; ">
		<div class="col-md-9" >
			@php
			$i=0;
			@endphp

			@foreach($tuitions as $tuition)
			@php
			$i++;
			@endphp

			<div class="card my-4 tuition-list"> 
				<div class="card-header pt-3 pb-0 my-0">
					<h6 class="font-weight-bold float-left">{{$tuition->title}}</h6>
					<p class="float-right">Posted By- <a href="{{route('tutor.guardian-details',$tuition->guardian->id)}}">{{$tuition->guardian->user->name}}</a></p>
				</div>
				<div class="card-body">
					<div class="row py-1">
						<div class="col-md-4">
							<b class="text-primary">Medium :</b>{{$tuition->s_medium}}
						</div>
						<div class="col-md-3">
							<b class="text-primary">Class :</b>{{$tuition->s_class}}
						</div>
						<div class="col-md-4">
							<b class="text-primary">Student Gender :</b>{{$tuition->s_gender}}
						</div>
					</div>
<div class="text-center">
					<b>{{$tuition->t_days}}</b><br>
					<b>Salary : </b>{{$tuition->t_salary}}/-<br>
					<b>Tutor gender preference :</b> {{$tuition->t_gender}}
					
					<br>
					<span><b>Subjects : </b>@foreach($tuition->subjects as $subject)
                  
                     {{$subject->t_subject}}
                 
               
					@endforeach</span>
					<p><b>Tutoring Time:</b>{{$tuition->time}}</p>
					<div class="row">
						<div class="col-md">
							<h6>
								<i class="fa fa-map-marker fa-lg"::before></i>{{$tuition->s_area}},{{$tuition->s_districts}}
							</h6>
						</div>
					</div>

					</div>
				 <div class="row"><div class="col-md-6"><small class="pull-left">Other Informations -{{$tuition->additional_info}}</small></div> <div class="col-md-6"><small class="pull-right">
                                        Posted on:{{$tuition->created_at}}
                                    </small></div></div>

                    


				</div> 
			 <div class="text-center"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#apply_{{$i}}">Apply</button>  </div>
			</div>

			<div class="modal fade" id="apply_{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('sendemailguardian')}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">

                             	      <div class="form-group">
                                <label style="font-weight: bold;">To</label>
                                 <input type="text" name="to" value="{{$tuition->guardian->user->email}}"  class="form-control " readonly="1">

                               </div>
                               <div class="form-group">
                              
                                <label style="font-weight: bold;">Message</label>
                                
                             
                               </div>

                               <div class="form-group">
                               
                                <img src="{{asset('images/tutors/'.$tutor->photo)}}" height="150px" width="150px">
                                <input type="text" name="id" value="{{$tutor->id}}"  class="form-control " hidden="1">


                                 
                                 <input type="file" name="photo" value="{{$tutor->photo}}"  class="form-control " hidden="1">
                             
                               </div>



                                <div class="form-group">
                                <label>Name</label>
                                 <input type="text" name="name" value="{{$tutor->user->name}}"  class="form-control " readonly="1">
                             
                               </div>
                          <div class="form-group">
                                <label>Gender</label>
                                 <input type="text" name="gender" value="{{$tutor->gender}}"  class="form-control " readonly="1">
                             
                               </div>

        
                           
                              
                               <div class="form-group">
                                <label>Profession</label>
                                   <input type="text" name="profession" value="{{$tutor->profession}}"  class="form-control " readonly="1">
                               

                                           
                             
                               </div>

                               <div class="form-group">
                                <label>Educatonal Qualification</label>
                                 <input type="text" name="educational_qualification" value="{{$tutor->educational_qualification}}"  class="form-control " readonly="1">
                             
                               </div>

                               <div class="form-group">
                                <label>Phone Number</label>
                                 <input type="text" name="phone_number" value="{{$tutor->phone_number}}"  class="form-control " readonly="1">
                             
                               </div>

                               

                              
                           

                                <div class="form-group">
                                <label>Experience of Tuition</label>
                                 <input type="text" name="experience_of_tuition" value="{{$tutor->experience_of_tuition}}"  class="form-control " readonly="1">
                             
                               </div>
                                <div class="form-group">
                                <label>Current Tuition</label>
                                 <input type="text" name="current_tuition" value="{{$tutor->current_tuition}}"  class="form-control " readonly="1">
                             
                               </div>
                              

                                   

                                </div>
                           
                            

                                                

    
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Send</button>
      </div>
      </form>
      
    </div>
  </div>
</div>
@endforeach




			<div class="pull-right mt-2 mb-5 d-none d-sm-block"><ul role="navigation" class="pagination"><li aria-disabled="true" aria-label="« Previous" class="page-item disabled"><span aria-hidden="true" class="page-link">‹</span></li> <li aria-current="page" class="page-item active"><span class="page-link">1</span></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=2" class="page-link">2</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=3" class="page-link">3</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=4" class="page-link">4</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=5" class="page-link">5</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=6" class="page-link">6</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=7" class="page-link">7</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=8" class="page-link">8</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=2" rel="next" aria-label="Next »" class="page-link">Next</a></li></ul></div>
		</div>
    <div class="col-md-3"   >
      <div style="background-color: #116466; color:white ; border-radius: 1em " >
<h3 class="text-center" style="padding-top: 15px;">Search Your Desired Tuition</h3>
<form class="form-inline md-form mr-auto mb-4" action="{{route('tutor.search')}}" method="post" style="margin-left: 32px;">
   {{ csrf_field() }}
  <select class="form-control mr-sm-2" style="width: 186px;" type="text" name="class">
    <option value="">Class</option>
  <option value="Class I">Class I</option>
  <option value="Class II" >Class II</option> <option value="Class III">Class III</option> <option value="Class IV" >Class IV</option> <option value="Class V" >Class V</option> <option value="Class VI" >Class VI</option> <option value="Class VII" >Class VII</option> <option value="Class VIII">Class VIII</option> <option value="Class IX" >Class IX</option> <option value="S.S.C" >S.S.C</option> <option value="HSC 1st year" >HSC 1st year</option> <option value="HSC 2nd year">HSC 2nd year</option> <option value="Honours 1st year" >Honours 1st year</option> <option value="Honours 2nd year" >Honours 2nd year</option> <option value="Honours 3rd year">Honours 3rd year</option> <option value="Honours 4th year">Honours 4th year</option> <option value="Masters">Masters</option> <option value="Nursery" >Nursery</option> <option value="Dakhil" >Dakhil</option> <option value="Alim" >Alim</option> <option value="Fazil" >Fazil</option> <option value="Kamil" >Kamil</option> <option value="O Lavel">O Lavel</option> <option value="A Lavel" >A Lavel</option> <option value="KG" >KG</option>
  </select>
  <input class="form-control mr-sm-2" type="text" placeholder="Subject" name="subject" >
  <input class="form-control mr-sm-2" type="text" placeholder="Medium" name="medium" >
  <input class="form-control mr-sm-2" type="text" placeholder="Tutor Gender" name="gender" >
  <input class="form-control mr-sm-2" type="text" placeholder="Area" name="area">
  <input class="form-control mr-sm-2" type="text" placeholder="Salary Range" name="salary">     
   <input class="form-control mr-sm-2" type="text" placeholder="Tuition time" name="time">  
   <div style="padding-top: 10px;">
 <button type="submit" class="btn btn-success" style="display: inline-block; margin-left: 56px; margin-bottom: 10px; ">Search</button></div>
</form>      
</div>
    </div>
	</div>



</div>




@endsection
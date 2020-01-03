@extends('layout.master')

@section('content')
<div class="container emp-profile">

    @if($message=Session::get('success'))
 <div class="alert alert-success">
  <p>{{$message}}</p>
</div>
    @endif
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                       
                            <img src="{{asset('images/students/'.$student->photo)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       {{$student->user->name}}
                                    </h5>
                                    <h6>Class: 
                                        {{$student->class}}
                                    </h6>
                             




                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                              
                               
                            </ul>
                        </div>
                    </div>
                    @if(session()->get('userrole')=='student')
                    <div class="col-md-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit Profile</button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-6">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                             <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->user_id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->username}}</p>
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->user->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->gender}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Educational Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->educational_institution}}</p>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Medium</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->medium}}</p>
                                            </div>
                                        </div>
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Academic Result</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->academic_result}}</p>
                                            </div>
                                        </div>
                                       
                                      
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Guardian</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->guardian->user->name}}</p>
                                            </div>
                                        </div>
                            </div>
       
          

                    </div>

                </div>
               </div>
           

            </form> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('student.updateprofile',$student->id)}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                              <div class="form-group">
                                <label>Class</label>
                                 <input type="text" name="class" value="{{$student->class}}"  class="form-control ">
                             
                               </div>
                         

        
                             
                               <div class="form-group">
                                <label>Educational Institution</label>
                                 <input type="text" name="edu_institution" value="{{$student->educational_institution}}"  class="form-control ">
                             
                               </div>

                                

                                 
                                    <div class="form-group">
                                <label>Medium</label>
                                 <input type="text" name="medium" value="{{$student->medium}}"  class="form-control ">
                             
                               </div>
                                <div class="form-group">
                                <label>Academic Result</label>
                                 <input type="text" name="result" value="{{$student->academic_result}}"  class="form-control ">
                             
                               </div>
                            

                                                

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

                     
          
        </div>
  

       
        @endsection

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
                       
                            <img src="{{asset('images/guardians/'.$guardian->photo)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       {{$guardian->user->name}}
                                    </h5>
                                    <h6>
                                        {{$guardian->profession}}
                                    </h6>
                              @if(count($guardian->guardianreviews)!=0)
                                    @php
                                    $j=0;
                                    $x=0;
                                     
                                    @endphp
                                     @foreach($guardian->guardianreviews as $guardianreview)
                                    @php
                                     $x=$x+$guardianreview->ratting;
                                     $j++;
                                     @endphp

                                     @endforeach
                                      @php
                                   $y=round($x/$j);

                                    @endphp
                                    @else
                                    @php
                                    $y=0;
                                    @endphp

                                    @endif

                               





                                    <p class="proile-rating">RATTING : <span>{{$y}}/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Children Information</a>
                                </li>
                                 @if(session()->get('userrole')=='tutor')

                                 <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @if(session()->get('userrole')=='guardian')
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
                                                <p>{{$guardian->user_id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$guardian->username}}</p>
                                            </div>
                                        </div>
                                  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$guardian->profession}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$guardian->address}}</p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$guardian->user->email}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>0{{$guardian->phone_number}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              @php
                              $i=0;
                              @endphp
                             @foreach ($guardian->students as $student)
                                @php
                              $i++;
                              @endphp
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Children No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$i}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$student->name}}</p>
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
                                                <p>{{$student->email}}</p>
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
                                                <label>Class</label>
                                            </div>
                                            <div class="col-md-6">
                                            
                                               
                                                <p>{{$student->class}} </p>
                                            
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Medium</label>
                                            </div>
                                            <div class="col-md-6">
                                            
                                               
                                                <p>{{$student->medium}} </p>
                                            
                                                
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Educational Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                            
                                               
                                                <p>{{$student->educational_institution}} </p>
                                            
                                                
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Academic Result</label>
                                            </div>
                                            <div class="col-md-6">
                                            
                                               
                                                <p>{{$student->academic_result}} </p>
                                            
                                                
                                            </div>
                                        </div>
                                        @endforeach


                                       
                          
                            </div>
                             @if(session()->get('userrole')=='tutor')
                             <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="row">
                                            <div class="col-md-6">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedback">Your Feedback</button>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Feedbacks</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Ratting<small>(Out of 10)</small></p>
                                            </div>
                                        </div>
                                          @php
                                        $j=0;
                                        @endphp
                                     @foreach ($guardian->guardianreviews as $guardianreview)
                                      @php
                                     $j++;
                                     @endphp
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>{{$j}}.   {{$guardianreview->feedback}}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$guardianreview->ratting}}</p>
                                            </div>
                                        </div>
                                        @endforeach





                        </div>
                        @endif

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
       <form  action="{{route('guardian.updateprofile',$guardian->id)}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                                <div class="form-group">
                                <label style="font-weight: bold;">Name</label>
                                 <input type="text" name="name" value="{{$guardian->user->name}}"  class="form-control ">
                             
                               </div>
                         

        
                                <div class="form-group">
                                <label>Username</label>
                                 <input type="text" name="username" value="{{$guardian->username}}"  class="form-control ">
                             
                               </div>
                               <div class="form-group">
                                <label>Profession</label>
                                 <input type="text" name="profession" value="{{$guardian->profession}}"  class="form-control ">
                             
                               </div>

                                

                                 
                                    <div class="form-group">
                                <label>Phone Number</label>
                                 <input type="text" name="phone_number" value="{{$guardian->phone_number}}"  class="form-control ">
                             
                               </div>
                                <div class="form-group">
                                <label>Address</label>
                                 <input type="text" name="address" value="{{$guardian->address}}"  class="form-control ">
                             
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

<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('tutor.feedback')}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                                 <input type="text" name="guardian_id" hidden="1" class="form-control " value="{{$guardian->id}}">

                                <div class="form-group">
                                <label style="font-weight: bold;">Feedback</label>
                              <textarea type="text" name="feedback"   class="form-control "></textarea>   
                               </div>
                         

        
                                <div class="form-group">
                                <label  style="font-weight: bold;">Ratting</label>
                                 <input type="text" name="ratting"  class="form-control ">/10
                             
                               </div>
                             

                                

                            
                           
                            

                                                

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
                     
          
        </div>
  

       
        @endsection

@extends('layout.master')

@section('content')
<div class="container emp-profile">

    @if($message=Session::get('success')) 
 <div class="alert alert-success">
  <p>{{$message}}</p>
</div>
    @endif
            <form>
              {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                       
                            <img src="{{asset('images/tutors/'.$tutor->photo)}}" alt="Profile Picture" style="height: 160px; width:245px;" />
                            @if(session()->get('userrole')=='tutor')
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                            @endif
                        </div>
                        

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       {{$tutor->user->name}}
                                    </h5>
                                    <h6>
                                        {{$tutor->profession}}
                                    </h6>
                                    @if(count($tutor->tutorreviews)!=0)
                                    @php
                                    $j=0;
                                    $x=0;
                                     
                                    @endphp
                                     @foreach($tutor->tutorreviews as $tutorreview)
                                    @php
                                     $x=$x+$tutorreview->ratting;
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
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tuition Information</a>
                                </li>
                                 @if(session()->get('userrole')=='guardian'||session()->get('userrole')=='student')

                                 <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                  
                  
                </div>
                <div class="row">
                    <div class="col-md-4">
                       @if(session()->get('userrole')=='guardian'||session()->get('userrole')=='student')
                       <div class="profile-img">
                            <h4>ID Card</h4>
                            <img data-toggle="modal" data-target="#IDfrontModal" src="{{asset('images/tutors/Id_card/'.$tutor->id_card_front_part)}}" alt=""/>
                             <img data-toggle="modal" data-target="#IDbackModal" src="{{asset('images/tutors/Id_card/'.$tutor->id_card_back_part)}}" alt=""/>
                           
                        </div>
                        @endif
                       
                    </div>
                    <div class="col-md-6">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                             <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->user_id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->username}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->gender}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->profession}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <label>Educational Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->educational_qualification}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->user->email}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->phone_number}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Expert In</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->expert_in}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Tuition Area</label>
                                                </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->areas}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Exparience</label>
                                                </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->experience_of_tuition}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Current Tuitions</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutor->current_tuition}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Available Time</label>
                                            </div>
                                            <div class="col-md-6">
                                            
                                               
                                                <p>{{$tutor->available_start_time}} To {{$tutor->available_end_time}} </p>
                                            
                                                
                                            </div>
                                       </div>
                   

                                       
                          
                            </div>





                                      @if(session()->get('userrole')=='guardian'||session()->get('userrole')=='student')
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
                                     @foreach ($tutor->tutorreviews as $tutorreview)
                                      @php
                                     $j++;
                                     @endphp
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>{{$j}}.   {{$tutorreview->feedback}}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$tutorreview->ratting}}</p>
                                            </div>
                                        </div>
                                        @endforeach





                        </div>
                        @endif
 
                        </div>

                    </div>
                     <div class="col-md-2">
                       
                    </div>

                </div>
               
           

            </form> 




            <div class="modal fade" id="IDfrontModal" tabindex="-1" role="dialog" aria-labelledby="IDfrontModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ID Card<small>(Front Part)</small></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('guardian.feedback')}}" method="post"  >
                                  {{ csrf_field() }}

                             
                               <div class="modal-body">
                                <div class="form-group">
                                <img  src="{{asset('images/tutors/Id_card/'.$tutor->id_card_front_part)}}" alt=""/>  
                               </div>
                         

        
                               
                      
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
      </form>
    </div>
  </div>
</div>
  



              <div class="modal fade" id="IDbackModal" tabindex="-1" role="dialog" aria-labelledby="IDbackModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ID Card<small>(Back Part)</small></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('guardian.feedback')}}" method="post"  >
                                  {{ csrf_field() }}

                             
                               <div class="modal-body">
                                <div class="form-group">
                                <img  src="{{asset('images/tutors/Id_card/'.$tutor->id_card_back_part)}}" height="100%" width="100%" alt=""/>  
                               </div>
                         

        
                               
                      
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
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
       <form  action="{{route('guardian.feedback')}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                                 <input type="text" name="tutor_id" hidden="1" class="form-control " value="{{$tutor->id}}">

                                <div class="form-group">
                                <label style="font-weight: bold;">Feedback</label>
                              <textarea type="text" name="feedback"   class="form-control "></textarea>   
                               </div>
                         

        
                                <div class="form-group">
                                <label  style="font-weight: bold;">Ratting<small>(Out of 10)</small></label>
                                 <input type="text" name="ratting"  class="form-control ">
                             
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



      <div class="modal fade" id="recommendModal" tabindex="-1" role="dialog" aria-labelledby="recommendModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recommendModal">Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="email_form"  method="post"  >
                                  {{ csrf_field() }}
<span id="recommend_message"></span>
                             <div class="modal-body">

                                    <div class="form-group">
                                <label style="font-weight: bold;">To</label>
                                 <input type="text" name="to" value="{{$student->guardian->user->email}}"  class="form-control " readonly="1">

                               </div>
                               <div class="form-group">
                              
                                <label style="font-weight: bold;">Why are you Recommending this Tutor?</label>
                                  <textarea type="text" name="message"   class="form-control "></textarea>  
                             
                               </div>

                               <div class="form-group">
                               
                                
                                <input type="text" name="id" value="{{$tutor->id}}"  class="form-control " hidden="1">


                                 
                                 <input type="file" name="photo" value="{{$tutor->photo}}"  class="form-control " hidden="1">
                             
                               </div>



                                <div class="form-group">
                         
                                 <input type="text" name="name" value="{{$tutor->user->name}}"  class="form-control " hidden="1" >
                             
                               </div>
                          <div class="form-group">
                               
                                 <input type="text" name="gender" value="{{$tutor->gender}}"  class="form-control " hidden="1">
                             
                               </div>

        
                           
                              
                               <div class="form-group">
                            
                                   <input type="text" name="profession" value="{{$tutor->profession}}"  class="form-control " hidden="1">
                               

                                           
                             
                               </div>

                               <div class="form-group">
                               
                                 <input type="text" name="educational_qualification" value="{{$tutor->educational_qualification}}"  class="form-control " hidden="1">
                             
                               </div>

                               <div class="form-group">
                              
                                 <input type="text" name="phone_number" value="{{$tutor->phone_number}}"  class="form-control " hidden="1">
                             
                               </div>

                               

                              
                           

                                <div class="form-group">
                                
                                 <input type="text" name="experience_of_tuition" value="{{$tutor->experience_of_tuition}}"  class="form-control " hidden="1">
                             
                               </div>
                                <div class="form-group">
                               
                                 <input type="text" name="current_tuition" value="{{$tutor->current_tuition}}"  class="form-control " hidden="1">
                             
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



                        
                  <div class="row">
                    <div class="col-md-4">
                    </div>

            <div class="col-md-6">



            <button type="button"  class="btn btn-primary" id="recommend" data-toggle="modal" data-target="#recommendModal">
            Recommend To Your Parent
            </button>
            </div>
            <div class="col-md-2">
                

                    </div>
                   
                            </div>
                        
                   
                   
        </div>

        @endsection

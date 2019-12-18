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
                       
                            <img src="{{asset('images/tutors/'.$tutor->photo)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
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
                                    <p class="proile-rating">RATTING : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tuition Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if(session()->get('userrole')=='tutor')
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8">
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
                            @if(session()->get('userrole')=='guardian')
                              <div class="row">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Recruit
</button>
    </div>
                                           
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
        <h5 class="modal-title" id="exampleModalLabel">Send Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('sendemail')}}" method="post"  >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                                <div class="form-group">
                                <label style="font-weight: bold;">To</label>
                                 <input type="text" name="to" value="{{$tutor->user->email}}"  class="form-control ">
                             
                               </div>
                                 <div class="form-group">
                                <label style="font-weight: bold;">Message</label>
                                
                             
                               </div>

        
                                <div class="form-group">
                                <label>Class</label>
                                 <input type="text" name="class" value=""  class="form-control ">
                             
                               </div>
                               <div class="form-group">
                                <label>Subject</label>
                                 <input type="text" name="subject" value=""  class="form-control ">
                             
                               </div>

                                <div class="form-group">
                                <label>Student Institute</label>
                                 <input type="text" name="institute" value=""  class="form-control ">
                             
                               </div>
                                

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Select Student Gender</label>
                                       <select name="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                       </select>
                                     </div>

                                      <div class="form-group col-md-6">
                                        <label>Select Student Medium</label>
                                         <select name="medium" class="form-control medium">
                                          <option value="">Select Medium</option>
                                          <option value="Bangla Medium">Bangla Medium</option>
                                          <option value="English Medium">English Medium</option>
                                          <option value="English Version">English Version</option>
                                          <option value="Arabic Medium">Arabic Medium</option>
                                         </select>
                                      </div>
                                    </div>

                                    

                                           <div class="form-group">
                                          <label>Location Details</label>
                                           <textarea name="location" rows="2" class="form-control"></textarea>
                                         </div>
                                        <div class="form-row">

                                          <div class="form-group col-md-6">
                                           <label>Days Per Week</label>
                                             <select name="days" class="form-control days">
                                              <option value="">Please select your Day</option> <option value="1 Day/Week">1 Day/Week</option> <option value="2 Days/Week">2 Days/Week</option> <option value="3 Days/Week">3 Days/Week</option> <option value="4 Days/Week">4 Days/Week</option> <option value="5 Days/Week">5 Days/Week</option> <option value="6 Days/Week">6 Days/Week</option> <option value="7 Days/Week">7 Days/Week</option></select>
                                          </div>

                                          <div class="form-group col-md-6">
                                             <label>Tutoring Time</label>
                                                 <input type="text" name="time" value=""  class="form-control ">
                                            </div>
                                          </div>

                                          

                                         

                                              <div class="form-group">
                                          <label for="locationDetails">Additional Information(If multiple students mention here)</label>
                                           <textarea name="additional_info" rows="2" class="form-control"></textarea>
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
                   
        </div>

        @endsection

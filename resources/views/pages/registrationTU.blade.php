@extends('layout.master')

@section('content')


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please Register and be our permanent member!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Tutor</h3>
                                <form class="row register-form"  action="{{route('tutor.store')}}"  method="post" enctype="multipart/form-data">
                                   {{ csrf_field() }}

                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Name*" name="name" />
                                        </div>
                                       <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Enter Username*" name="username" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter Email*" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control" name="photo" />
                                        </div>
                                         <div class="form-group">
                                            <label>Gender</label><br>
                                            <input type="radio" name="gender"value="male" checked /><span>Male</span>
                                             <input type="radio" name="gender"value="female"/><span>Female</span>
                                        </div>

                                         <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" class="form-control" placeholder="Enter Area" name="area" />
                                        </div>
                                        <div class="form-group">
                                            <label>Educational Qualification</label>
                                            <input type="text" class="form-control" placeholder="Enter your qualification" name="qualification" />
                                        </div>
                                        <div class="form-group">
                                            <label>Profession</label>
                                            <select type="text" class="form-control"  name="profession">
                                                 <option value="">Select Your Profession</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Student">Student</option>
                                                 <option value="Employee">Employee</option>

                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>National ID Card<small>(Clear Image is Recommanded)</small></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                     <label>Front Part</label>
                                                     <div><label></label></div>
                                                      <label>Back Part</label>

                                                    
                                                </div>
                                          <div class="col-md-8">
                                         <input type="file" class="form-control" name="id_card_front_part" />
                                         <input type="file" class="form-control" name="id_card_back_part" />
                                         </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        
                                       <div class="form-group">
                                            <label>Experience of Tuition</label>
                                            <input type="text" class="form-control" placeholder="Enter your experience" name="experience" />
                                        </div>

                                         <div class="form-group">
                                            <label>Current Tuition</label>
                                            <input type="text" class="form-control" placeholder="Enter current tuition" name="current_tuition" />
                                        </div>
                                         <div class="form-group">
                                            <label>Expert in</label>
                                            <input type="text" class="form-control" placeholder="Enter Expert field" name="expert_in" />
                                        </div>
                                          <div class="form-group">
                                            <label>Available Start Time</label>
                                            <input type="time" class="form-control"  name="available_start_time"  min="01:00" max="24:00"/>
                                        </div>
                                          <div class="form-group">
                                            <label>Available End Time</label>
                                            <input type="time" class="form-control"  name="available_end_time"  min="01:00" max="24:00"/>
                                        </div>



                                         <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter phone number" name="phone_number" />
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input type="text" class="form-control" placeholder="Enter password" name="password" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </form>
                            </div>
                     
                        </div>
                    </div>
                </div>

            </div>

            @endsection
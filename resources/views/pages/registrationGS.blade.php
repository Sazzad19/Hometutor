@extends('layout.master')

@section('content')


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please Register and be our permanent member!</p>
                        <p>Already Registered? Then Login</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="guardian-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="guardian" aria-selected="true">Guardian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">


                            <div class="tab-pane fade show active " id="guardian" role="tabpanel" aria-labelledby="guardian-tab">
                                <h3 class="register-heading">Apply as a Guardian</h3>
                            

                                <form class="row register-form" action="{{route('guardian.store')}}"  method="post" enctype="multipart/form-data" style="width: 700px;">

                              @foreach($errors->all() as $error)
                              <div class="alert-danger">
                               <p >{{$error}}</p>
                                </div>
                                @endforeach
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
                                      
                                
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Profession</label>
                                            <input type="text" class="form-control" placeholder="Enter Profession*" name="profession" />
                                        </div> 
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Address*" name="address" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="text" minlength="11" maxlength="11" name="phone_number" class="form-control" placeholder="Enter Phonenumber*" />
                                        </div>

                                     
                                        <div class="form-group"> 
                                             <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password*" name="password"  />
                                        </div>
                                        <button type="submit" class="btnRegister"  >Register</button>
                                    </div>
                                </form>
                            </div>
                    <div class="tab-pane fade show " id="student" role="tabpanel" aria-labelledby="student-tab">
                                <h3 class="register-heading">Apply as a Student</h3>
                                <form class="row register-form" action="{{route('student.store')}}"  method="post" enctype="multipart/form-data" style="width: 700px;">
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
                                            <label>Medium</label>
                                            <select class="form-control" name="medium">
                                                <option class="hidden"  selected disabled>Select</option>
                                                <option value="Bangla">Bangla</option>
                                                <option value="English">English</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Gender</label><br>
                                            <input type="radio" name="gender"value="male"  /><span>Male</span>
                                             <input type="radio" name="gender"value="female"/><span>Female</span>
                                        </div>

                                
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <label>Class</label>
                                            <input type="text" class="form-control" placeholder="Enter Class" name="class" />
                                        </div>
                                       
                                         <div class="form-group">
                                            <label>Educational Institution</label>
                                            <input type="text" class="form-control" placeholder="Enter Educational Institution" name="edu_institution" />
                                        </div>

                                         <div class="form-group">
                                            <label>Academic Result</label>
                                            <input type="text" class="form-control" placeholder="Enter your result" name="result" />
                                        </div>
                                        <div class="form-group">
                                            <label>Guardian</label>
                                            <select class="form-control" name="guardian">
                                                <option class="hidden" selected="1"  disabled>Select</option>
                                                @foreach($guardian as $guardian)
                                                <option value="{{$guardian->id}}">{{$guardian->user->name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>

                                         <div class="form-group">
                                             <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password*" name="password"  />
                                        </div>


                                        <button type="submit" class="btnRegister"  >Register</button>
                                    </div>
                                </form>
                            </div>

                       
                        </div>
                    </div>
                </div>

            </div>

            @endsection
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
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Guardian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Guardian</h3>
                                <div class="row register-form">

                                    <form>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username*" value=""/>
                                        </div>
                                        <div class="form-group">
                                              <input type="email" class="form-control" placeholder="Email*" value="" />
                                        </div>
                                        <div class="form-group">

                                            <input type="file" class="form-control"  placeholder="Photo" value=""/>
                                        </div>
                                
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Address*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="Phonenumber" class="form-control" placeholder="Your Phonenumber*" value="" />
                                        </div>

                                         <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Your Student</option>
                                                <option>Masum</option>
                                                <option>Akib</option>
                                                <option>Taifur</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password*" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Student</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                         <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endsection
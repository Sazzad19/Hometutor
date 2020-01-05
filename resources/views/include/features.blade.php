<div id="features">
     <div class="text-center features-caption features">
                <h3>Welcome To Our Hometutor.com</h3>
                 
                  <h5>
                    We’re providing a common platform for guardians to search tutors according to their requirements and for tutors to search a perfect tuition for him. 
                  </h5>
     </div>
          <div class="container">
            <div class="row">
              <div class="col-sm bottom-space">
                    <div class="feature-box" style="overflow: hidden;">
                        
                        <i class="fa fa-address-book fa-5x fa-image"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                          Quality Tutor
                        </h3>
                        <p class="feature-box__text">
                         If you are a guardian, hire the best tutor for your child from our website.Because we want to help you to take best decision for your children. 
                        </p>
                    </div>
              </div>
              <div class="col-sm bottom-space">
                    <div class="feature-box">
                        <i class="fa fa-lightbulb-o fa-5x fa-icon-image" ></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Perfect Tuition</h3>
                        <p class="feature-box__text">
                         Become a tutor and start your first earning! Boost your confidence with private tuition.You will be able to apply to the available tuition posts in this website.
                        </p>
                    </div>
              </div>
              <div class="col-sm bottom-space">
                    <div class="feature-box">
                        <i class="fa fa-5x fa-code fa-icon-image"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Blog</h3>
                        <p class="feature-box__text">
                          You can post article about any topic of education and read article written by others. You may get informative articles here which can save your time.
                        </p>
                    </div>
              </div>
            </div>
     </div>
      <div class="features-section-2">
        <div class="container-fluid">

          <div class="row">
         <div class="col-sm main-col">
              <div class="features-section-2-col-2__content">
                <h2>Recent Tuitions</h2>

@foreach($tuitions as $tuition)

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
          <b>{{$tuition->t_days}}</b><br>
          <b>Salary : {{$tuition->t_salary}}/-</b><br>
         <span> <b>Tutor gender preference :</b> {{$tuition->t_gender}}</span>
          
          <br>
          <span><b>Subjects : </b>@foreach($tuition->subjects as $subject)
                  
                     {{$subject->t_subject}}
                 
               
          @endforeach</span><br>
          <p><b>Tutoring Time:</b>{{$tuition->time}}</p><br>
          
               <span> <i class="fa fa-map-marker fa-lg"::before></i>{{$tuition->s_area}},{{$tuition->s_districts}}</span>
             
         
          <div class="row"><div class="col-md-6"><small class="pull-left">Other Informations -{{$tuition->additional_info}}</small></div> <div class="col-md-6"><small class="pull-right">
                                        Posted on:{{$tuition->created_at}}
                                    </small></div></div>

                    


        </div>
      
      </div>

      @endforeach

                   

                  
                  
              </div>
            </div>
           
          </div>
        </div>
      </div>
<div class="hire"><p>Search A Suitable Tuition For You</p>
<button onclick="window.location.href ='{{route('pages.registrationTU')}}';" >Search Tuitions(It's Free)</button></div>
       <div class="features-section-2">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-sm main-col">
              <div class="features-section-2-col-2__content">
                <h2>Latest Tutors</h2>
                  <div class="row main-content">

                    @foreach($tutors as $tutor)

                    <div class="col-3" >
                     <div class="card">
                      <div style="height:300px ;overflow:auto;">
                        <img src="{{asset('images/tutors/'.$tutor->photo)}}"  width="100%" height="150px">
                        <h4>{{$tutor->user->name}}</h4>
                        <p class="title"><strong>Expert In:</strong> {{$tutor->expert_in}}</p>
                        <p class="title"><strong>Areas:</strong> {{$tutor->areas}}</p>
                       
                        <p><strong>Qualification:</strong>{{$tutor->educational_qualification}}</p>
                      </div>
                        
                         <button class="contact-card"  >Details</button>
                     </div>

                    </div>

                     @endforeach

                                    
                                    

                                      
                  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>   


<div class="hire"><p>Hire The Best Tutor for Your Children</p>
<button onclick="window.location.href ='{{route('pages.registrationGS')}}';" >Find Tutors(It's Free)</button></div>
  </div>

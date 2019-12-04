@extends('layout.master')

@section('content')

       <div class="features-section-2">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-sm main-col">
              <div class="features-section-2-col-2__content-tutorlist ">
                <h2>Latest Tutors</h2>
                  <div class="row main-content">
                    @foreach($tutors as $tutor)

                    <div class="col-3">
                     <div class="card">
                        <img src="{{asset('images/tutors/'.$tutor->photo)}}" alt="John" width="100%" height="150px">
                        <h4>{{$tutor->name}}</h4>
                        <p class="title"><strong>Expert In:</strong> {{$tutor->expert_in}}</p>
                        <p class="title"><strong>Areas:</strong> {{$tutor->areas}}</p>
                       
                        <p><strong>Qualification:</strong>{{$tutor->educational_qualification}}</p>
                        <div style="margin: 24px 0;">
                          <a href="#"><i class="fa fa-dribbble"></i></a> 
                          <a href="#"><i class="fa fa-twitter"></i></a>  
                          <a href="#"><i class="fa fa-linkedin"></i></a>  
                          <a href="#"><i class="fa fa-facebook"></i></a> 
                        </div>
                         <p class="contact-card">Contact</p>
                     </div>

                    </div>

                     @endforeach
                                   


                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>   





@endsection


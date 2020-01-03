@extends('layout.master')

@section('content')

       <div class="features-section-2">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-md-10">
              <div class="features-section-2-col-2__content-tutorlist ">
                <h2>All Tutors</h2>
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
                        
                         <button class="contact-card" onclick="window.location.href ='{{route('guardian.tutor-details',$tutor->id)}}';" >Details</button>
                     </div>

                    </div>

                     @endforeach
                                   


                  </div>
              </div>
            </div>
<div class="col-md-2" >
   <h3>Search Your Desired Tutors</h3>
  <form class="form-inline md-form mr-auto mb-4" action="{{route('guardian.search')}}" method="post">
   {{ csrf_field() }}
  <input class="form-control mr-sm-2" type="text"  placeholder="Subject" name="subject">
  <input class="form-control mr-sm-2" type="text" placeholder="Gender" name="gender" >
  <input class="form-control mr-sm-2" type="text" placeholder="Area" name="area" >
  <input class="form-control mr-sm-2" type="text" placeholder="Profession" name="profession" >
  <input class="form-control mr-sm-2" type="text" placeholder="Experience" name="experience">
  <input class="form-control mr-sm-2" type="text" placeholder="Qualification" name="qualification">     
  
  <button type="submit" class="btn btn-primary btn-rounded">Search</button>
</form>
</div>

          </div>
        </div>
      </div>   





@endsection


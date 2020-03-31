@extends('layout.master')

@section('content')

       <div class="features-section-2">
        <div class="container-fluid" style="margin-top: 45px;">
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
                       
                         <button class="contact-card" onclick="window.location.href ='{{route('student.tutor-details',$tutor->id)}}';" >Details</button>
                       
                     </div> 

                    </div>

                     @endforeach
                                   


                  </div>
              </div>

      

            </div>
<div class="col-md-2" style="background-color: #116466; color:white ; border-radius: 1em " >
   <h3 class="text-center">Search Your Desired Tutors</h3>
  <form class="form-inline md-form mr-auto mb-4" action="{{route('guardian.search')}}" method="get" >
   {{ csrf_field() }}
  <input class="form-control mr-sm-2" type="text"  placeholder="Subject" name="subject">
  <input class="form-control mr-sm-2" type="text" placeholder="Gender" name="gender" >
  <input class="form-control mr-sm-2" type="text" placeholder="Area" name="area" >
  <input class="form-control mr-sm-2" type="text" placeholder="Profession" name="profession" >
  <input class="form-control mr-sm-2" type="text" placeholder="Experience" name="experience">
  <input class="form-control mr-sm-2" type="text" placeholder="Qualification" name="qualification">     
 
  <button type="submit" class="btn btn-success" style="display: inline-block; margin-left: 35px; margin-top:10px;" >Search Tutor</button>

</form>



</div>
</div>

 <div class="text-center mt-2 mb-5 d-none d-sm-block"><ul role="navigation" class="pagination">
      <li>
       <span aria-hidden="true" class="page-link">{{$tutors->links()}}</span>
     
     </li></ul></div>

          </div>
        </div>
      </div>   





@endsection


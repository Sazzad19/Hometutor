@extends('layout.master')

@section('content')
<div class="container">
	<h5 class="text-title mt-4">Available tuition post</h5>
	<div class="row">
		<div class="col-md-9">

			@foreach($tuitions as $tuition)
			<div class="card my-4 tuition-list">
				<div class="card-header pt-3 pb-0 my-0">
					<h6 class="font-weight-bold float-left">{{$tuition->title}}</h6>
					<p class="float-right">ID:#{{$tuition->id}}</p>
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
					<b>Salary : </b>{{$tuition->t_salary}}/-
					<b>Tutor gender preference :</b> {{$tuition->t_gender}}
					
					<br>
					<span><b>Subjects : </b>@foreach($subjects as $subject)
                     @if($subject->tuition_id==$tuition->id)
                     {{$subject->t_subject}}
                 
                      @endif
					@endforeach</span>
					<p><b>Tutoring Time:</b>{{$tuition->time}}</p>
					<div class="row">
						<div class="col-md">
							<h6>
								<i class="fa fa-map-marker fa-lg"::before></i>{{$tuition->s_medium}},{{$tuition->time}}
							</h6>
						</div>
						<div class="col-md"><a href="#" class="btn btn-sm btn-custom text-light pull-right"><i class="fa fa-link"></i> Details tuition
                                    </a></div>

					</div>
					<div class="row mt-2"><small class="col-md-9">Other Information -{{$tuition->additional_info}}</small> <div class="col-md-3"><small class="pull-right">
                                        Posted on:{{$tuition->created_at}}
                                    </small></div></div>

				</div>
			</div>
@endforeach




			<div class="pull-right mt-2 mb-5 d-none d-sm-block"><ul role="navigation" class="pagination"><li aria-disabled="true" aria-label="« Previous" class="page-item disabled"><span aria-hidden="true" class="page-link">‹</span></li> <li aria-current="page" class="page-item active"><span class="page-link">1</span></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=2" class="page-link">2</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=3" class="page-link">3</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=4" class="page-link">4</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=5" class="page-link">5</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=6" class="page-link">6</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=7" class="page-link">7</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=8" class="page-link">8</a></li> <li class="page-item"><a href="https://deshtutor.com/tuition_list?page=2" rel="next" aria-label="Next »" class="page-link">Next</a></li></ul></div>
		</div>
	</div>

</div>




@endsection
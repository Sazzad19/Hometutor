@extends('admin.layout.master')

@section('content')
<section class="content">
 <div class="container-fluid">
       
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                      Tutor List
                            <span class="badge bg-blue"></span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Photo</th>
                                    <th>Gender</th>
                                    <th>Expert In</th>
                                    <th>Area</th>
                                    <th>Educational Qualification</th>
                                    <th>Profession</th>
                                    <th>Id Card</th>
                                    <th>Experience</th>
                                    <th>Current Tuition</th>
                                    <th>Available Time</th>
                                    <th>Phone Number</th>
                                          <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Photo</th>
                                    <th>Gender</th>
                                    <th>Expert In</th>
                                    <th>Area</th>
                                    <th>Educational Qualification</th>
                                    <th>Profession</th>
                                    <th>Id Card</th>
                                    <th>Experience</th>
                                    <th>Current Tuition</th>
                                    <th>Available Time</th>
                                    <th>Phone Number</th>
                                     <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                   @foreach($tutors as $tutor)
                                        <tr>
                                            <td>{{$tutor->id  }}</td>
                                            <td>{{ $tutor->user->name }}</td>
                                            <td>{{$tutor->username }}</td>
                                            <td><img src="{{asset('images/tutors/'.$tutor->photo)}}" alt="Profile Picture" style="height: 50px; width:50px;" /></td>
                                            
                                            
                                            <td>{{$tutor->gender  }}</td>
                                            <td>{{$tutor->expert_in }}</td>
                                            <td>{{$tutor->areas }}</td>
                                            <td>{{$tutor->educational_qualification }}</td>
                                            <td>{{$tutor->profession }}</td>
                                            <td> <img data-toggle="modal" data-target="#IDfrontModal" src="{{asset('images/tutors/Id_card/'.$tutor->id_card_front_part)}}" alt=""style="height: 75px; width:75px;"/> <img data-toggle="modal" data-target="#IDbackModal" src="{{asset('images/tutors/Id_card/'.$tutor->id_card_back_part)}}" alt=""style="height: 75px; width:75px;"/></td>
                                            <td>{{$tutor->experience_of_tuition }}</td>
                                            <td>{{$tutor->current_tuition }}</td>
                                             <td>{{$tutor->available_start_time }} To {{$tutor->available_end_time }}</td>
                                              <td>{{$tutor->phone_number }}</td>
                                            <td>
                                           @if($tutor->status==1)
                                                    <span class="badge bg-blue">Approved</span>
                                        @else
                                                    <span class="badge bg-pink">Pending</span>
                                                    @endif
                                             
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-info waves-effect">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                        <a href="{{route('admin.tutor.approve',$tutor->id)}}">
                                                <img  class="btn btn-info waves-effect" src="{{asset('images/icon/iconfinder_icon-91_667359.png')}}">
                                        </a>
                                               
                                            <button class="btn btn-danger waves-effect" type="button" onclick="deletePost({{ $tutor->id }})">
                                            <i class="material-icons">delete</i>
                                            </button>
                                        <form id="delete-form-{{ $tutor->id }}" action="{{route('admin.tutor.destroy',$tutor->id )}}" method="get" style="display: none;">
                                                     {{ csrf_field() }}
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #END# Exportable Table -->
    </div>
</section>
    <script type="text/javascript">
        function deletePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
  </script>
@endsection
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
                      Tuition List
                            <span class="badge bg-blue"></span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Student</th>
                                    <th>Stu.Gender</th>
                                    <th>Institute</th>
                                    <th>Class</th>
                                    <th>Medium</th>
                                    <th>District</th>
                                    <th>Area</th>
                                    <th>Address</th>
                                    <th>Tutor Gender</th>
                                    <th>Days</th>
                                    <th>Time</th>
                                    <th>Salary</th>
                                    <th>Additional Info.</th>
                                    <th>Guardian</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Student</th>
                                    <th>Stu.Gender</th>
                                    <th>Institute</th>
                                    <th>Class</th>
                                    <th>Medium</th>
                                    <th>District</th>
                                    <th>Area</th>
                                    <th>Address</th>
                                    <th>Tutor Gender</th>
                                    <th>Days</th>
                                    <th>Time</th>
                                    <th>Salary</th>
                                    <th>Additional Info.</th>
                                    <th>Guardian</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                   @foreach($tuitions as $tuition)
                                        <tr>
                                            <td>{{$tuition->id  }}</td>
                                            <td>{{ $tuition->s_fullName }}</td>
                                            <td>{{$tuition->s_gender }}</td>
                                            <td>{{$tuition->s_college }}</td>
                                            <td>{{$tuition->s_class}}</td>
                                            <td>{{$tuition->s_class  }}</td>
                                            <td>{{$tuition->s_medium  }}</td>
                                            <td>{{$tuition->s_districts }}</td>
                                            <td>{{$tuition->s_area }}</td>
                                            <td>{{$tuition->s_address }}</td>
                                            <td>{{$tuition->t_gender }}</td>
                                            <td>{{$tuition->t_days }}</td>
                                            <td>{{$tuition->time }}</td>
                                            <td>{{$tuition->t_salary }}</td>
                                            <td>{{$tuition->additional_info }}</td>
                                            <td>{{$tuition->guardian->user->name }}</td>
                                               <td>{{$tuition->g_phoneNumber }}</td>
                                                  <td>{{$tuition->g_email }}</td>
                                                     

                                            <td>
                                           @if($tuition->status==1)
                                                    <span class="badge bg-blue">Approved</span>
                                        @else
                                                    <span class="badge bg-pink">Pending</span>
                                                    @endif
                                             
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-info waves-effect">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                        <a href="{{route('admin.tuition.approve',$tuition->id)}}">
                                                <img  class="btn btn-info waves-effect" src="{{asset('images/icon/iconfinder_icon-91_667359.png')}}">
                                        </a>
                                               
                                            <button class="btn btn-danger waves-effect" type="button" onclick="deletePost({{ $tuition->id }})">
                                            <i class="material-icons">delete</i>
                                            </button>
                                        <form id="delete-form-{{ $tuition->id }}" action="{{route('admin.tuition.destroy',$tuition->id )}}" method="get" style="display: none;">
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
@extends('admin.layout.master')

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

           
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2></h2>
                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="body">
                            <div  class="dashboard-flot-chart"><h3 style="text-align: center;">Welcome To Admin Dashboard</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->


           
        </div>
    </section>


@endsection
@extends('layout.master')

@section('content')

      <div class="features-section-1">
        <div class="container-fluid">

          <div class="row">
         <div class="col-sm main-col">
              
                <h2 class="head">Recent Tuitions</h2>


                  <div class="row main-row">
                  <div class="col-sm first-col"><img src="{{asset('img/1.jpg')}}"></div>
                  <div class="col-sm second-col">
                  <ul>
                    <li><h3>Tutor wanted</h3></li>
                    <li><span class="list">Posted:</span></li>
                    <li><span class="list">Medium:</span></li>
                    <li><span class="list">Subject:</span></li>
                    <li><span class="list">Salary:</span></li>
                    <a class="btn btn-blog pull-left " href="{{route('blog.postview')}}">Details</a> 


                  </ul>
                </div>
                  <div class="col-sm third-col" ><i class="far fa-heart fa-3x"></i></div>
                   
                  </div>

                   <div class="row main-row">
                  <div class="col-sm first-col"><img src="{{asset('img/1.jpg')}}"></div>
                  <div class="col-sm second-col">
                  <ul>
                    <li><h3>Tutor wanted</h3></li>
                    <li><span class="list">Posted:</span></li>
                    <li><span class="list">Medium:</span></li>
                    <li><span class="list">Subject:</span></li>
                    <li><span class="list">Salary:</span></li>
                     <a class="btn btn-blog pull-left " href="{{route('blog.postview')}}">Details</a> 


                  </ul>
                </div>
                  <div class="col-sm third-col"><i class="far fa-heart fa-3x"></i></div>
                   
                  </div>

                   <div class="row main-row">
                  <div class="col-sm first-col"><img src="{{asset('img/1.jpg')}}"></div>
                  <div class="col-sm second-col">
                  <ul>
                    <li><h3>Tutor wanted</h3></li>
                    <li><span class="list">Posted:</span></li>
                    <li><span class="list">Medium:</span></li>
                    <li><span class="list">Subject:</span></li>
                    <li><span class="list">Salary:</span></li>
                     <a class="btn btn-blog pull-left " href="{{route('blog.postview')}}">Details</a> 


                  </ul>
                </div>
                  <div class="col-sm third-col"><i class="far fa-heart fa-3x"></i></div>
                   
                  </div>
                  
             
            </div>
           
          </div>
        </div>
      </div>

 














@endsection


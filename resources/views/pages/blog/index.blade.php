@extends('layout.master')

@section('content')

  <!-- Page Content -->
 
<div class="container">

   <div id="blog" class="row"> 

<div class="col-md-8 blogShort">

                     <h1>Title 1</h1>
                     <img src="{{asset('img/6.jpg')}}" height="100px" weight="200px">
                     
                        
                <article><p>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                 ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                 five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                 of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                 Lorem Ipsum.    
                 </p></article>
                  <a class="btn btn-blog pull-right marginBottom10" href="{{route('blog.postview')}}">READ MORE</a> 
           

  
                     <h1>Title 2</h1>
                     <img src="{{asset('img/5.jpg')}}" height="100px" weight="200px">
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="{{route('blog.postview')}}">READ MORE</a> 
                 

                   <h1>Title 3</h1>
                     <img src="{{asset('img/5.jpg')}}" height="100px" weight="200px">
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p></article>
                    <a class="btn btn-blog pull-right marginBottom10" href="{{route('blog.postview')}}">READ MORE</a> 

      </div>


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Latest Posts</h5>
          <div class="card-body">
              <ul class="list-unstyled mb-0">
                   <li>
                    <a href="#">Title of my post</a>
                   </li>

                    <li>
                    <a href="#">Title of my post</a>
                   </li>
                   <li>
                    <a href="#">Title of my post</a>
                   </li>
                 </ul>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @endsection
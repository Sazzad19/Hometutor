@extends('layout.master')

@section('content')

  <!-- Page Content -->
 
<div class="container">

   <div id="blog" class="row"> 

<div class="col-md-8 blogShort">
 @foreach($posts as $post)
                     <h1>{{$post->title}}</h1>
                     <img src="{{asset('images/blogpost_image/'.$post->image)}}" height="100px" weight="200px">
                     
                        
                <article><p>{{\Illuminate\Support\Str::limit($post->body,500, $end='...')}}
                 </p></article>
                  <a class="btn btn-blog pull-right marginBottom10" href="{{route('blog.postview',$post->id)}}">READ MORE</a> 
           

  @endforeach
                    
                 

                   

      </div>


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card my-4">
           @if(session()->get('userrole'))
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpost">Add Post</button>
@endif
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
                  @foreach($post_categories as $post_category)
                  <li>
                    <a href="{{route('blog.category',$post_category->id)}}">{{$post_category->name}}</a>
                  </li>
                 @endforeach
                  
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
                 @foreach($latest_posts as $latest_post)
                   <li>
                    <a href="{{route('blog.postview',$latest_post->id)}}">{{$latest_post->title}}</a>
                   </li>
      @endforeach
                 
                   
                 </ul>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="addpost" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form  action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" >
                                  {{ csrf_field() }}

                             <div class="modal-body">
                                
                          
                               
                            <input type="text" name="user_id"  class="form-control" hidden="1" value="" />
                            <div class="form-group">
                                <label style="font-weight: bold;">Your Name</label>
                            <input type="text" name="name"  class="form-control "/>
                               </div>
                         
                          
                                <div class="form-group">
                                <label style="font-weight: bold;">Title</label>
                            <input type="text" name="title"  class="form-control "/>
                               </div>
                         

        
                                <div class="form-group">
                                <label  style="font-weight: bold;">Ctagory</label>
                                 <select name="catagory" class="form-control days">
                                  <option value="">Select Category</option>
                                  @foreach($post_categories as $post_category)
                          <option value="{{$post_category->id}}">{{$post_category->name}}</option>
                                              @endforeach
                                            </select>
                             
                               </div>
                               <div class="form-group">
                                <label style="font-weight: bold;">Image</label>
                           <input type="file" class="form-control" name="image" />
                               </div>

                      <div class="form-group">
                                <label style="font-weight: bold;">Text</label>
                            <textarea type="text" name="body"  class="form-control ">
                               </textarea>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
  @endsection
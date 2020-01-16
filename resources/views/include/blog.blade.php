 <div id="blog" class="blog">
    <div class="blog-header"><p>Recent Posts</p></div>
      <div class="container">
          <div class="row">
             @foreach($blogposts as $blogpost)
            <div class="col-sm" >
                <div class="blog-item-box" >
                <figure class="blog-item">
                    <div class="image">
                      <img src="{{asset('images/blogpost_image/'.$blogpost->image)}}" alt="sample74" height="200px" width="400px" />

                      <i class="fa fa-clock-o" aria-hidden="true"></i>

                      <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                    </div>
                    <figcaption>
                      <div style="height: 150px; overflow: hidden;">
                      <h3>{{$blogpost->title}}</h3>
                      <p >{{\Illuminate\Support\Str::limit($blogpost->body,75, $end='...')}}</p>
                      <a href="{{route('blog.postview',$blogpost->id)}}" class="read-more">Read More</a>
                    </div>
                    </figcaption>
                  </figure>
                </div>
            </div>
@endforeach

          </div>
        </div>
  </div>

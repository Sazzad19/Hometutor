  <nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light">
    <a class="navbar-brand" href="#">Hometutor.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link" href="{{route('index')}}">Home</a>
        </li>
         @if(session()->get('userrole')=='guardian')
         <li>
          <a class="nav-link" href="{{route('guardian.createtuition')}}">Post Your Tuition</a>
        </li>
        @endif
         @if(session()->get('userrole')=='guardian')
        
         <li>
          <a class="nav-link" href="{{route('guardian.tuitionlist',session()->get('userid'))}}">My Posted Tuitions</a>
        </li>
        @endif
          @if(session()->get('userrole')=='guardian')
        <li>
          <a class="nav-link" href="{{route('guardian.index')}}">Hire a tutor</a>
        </li>
        @endif
       @if(session()->get('userrole')=='student')
        <li>
          <a class="nav-link" href="{{route('guardian.index')}}">Recommand a tutor</a>
        </li>
        @endif

          @if(session()->get('userrole')=='tutor')
        <li>
          <a class="nav-link" href="{{route('tutor.index')}}">Tuition Jobs</a> 
        </li>
       @endif
        <li>
          <a class="nav-link" href="{{route('blog.index')}}">Blog</a> 
        </li>
        <li>
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
         @if(!(session()->get('login')))
        <li>
          <a class="nav-link" >Registration</a>
          <ul>
            <li><a class="nav-link" href="{{route('pages.registrationGS')}}">As Guardian/Student</a></li>

             
           
            <li><a class="nav-link" href="{{route('pages.registrationTU')}}">As Tutor</a></li>
          </ul>
        </li>
        @endif
            @if((session()->get('login')))
           <li>
          <a class="nav-link" href="{{route('profile')}}">My Profile</a>
        </li>
        @endif
       @if(!(session()->get('login')))
        <li>
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
      @endif
       @if((session()->get('login')))
        <li>
          <a class="nav-link" href="{{route('logout')}}">LogOut</a>
        </li>
      @endif
      </ul>
    </div>
  </nav>
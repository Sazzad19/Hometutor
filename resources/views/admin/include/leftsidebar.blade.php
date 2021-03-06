 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('backend/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <div class="email">{{session()->get('adminemail')}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            
                          
                            
                          
                            <li><a href="{{route('admin.logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGATION</li>
                    <li class="active">
                        <a href="{{route('admin.index')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.tutorlist')}}">
                            <i class="material-icons">text_fields</i>
                            <span>Tutor List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.tutionlist')}}">
                            <i class="material-icons">layers</i>
                            <span>Tuition List</span>
                        </a>
                    </li>
                
               
                
                   
                    
      
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <a href="">Hometutor.com</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>
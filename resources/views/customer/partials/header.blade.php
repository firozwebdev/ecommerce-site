<!-- Begin page -->
       <div id="wrapper">

           <!-- Topbar Start -->
           <div class="navbar-custom">
               <ul class="list-unstyled topnav-menu float-right mb-0">

                   <li class="d-none d-sm-block">
                       <form class="app-search">
                           <div class="app-search-box">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search...">
                                   <div class="input-group-append">
                                       <button class="btn" type="submit">
                                           <i class="fe-search"></i>
                                       </button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </li>

                   <li class="dropdown notification-list">
                       <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           <i class="fe-bell noti-icon"></i>
                           <span class="badge badge-danger rounded-circle noti-icon-badge">0</span>
                       </a>

                   </li>

                   <li class="dropdown notification-list">
                       <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                         @if(Auth::user()->image ==null)
                           <img  src="{{asset('frontEnd/assets/img/avatar_blog.png')}}"  alt="user-image" class="rounded-circle">
                         @else
                         <img  src="{{asset('uploads/userimages/'.Auth::user()->image)}}"  alt="user-image" class="rounded-circle" >
                         @endif
                           <span class="pro-user-name ml-1">
                      {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                           </span>
                       </a>
                       <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                           <!-- item-->
                           <div class="dropdown-item noti-title">
                               <h5 class="m-0 text-white">
                                   Welcome !
                               </h5>
                           </div>

                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                               <i class="fe-user"></i>
                               <span>My Account</span>
                           </a>

                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                               <i class="fe-settings"></i>
                               <span>Settings</span>
                           </a>

                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                               <i class="fe-lock"></i>
                               <span>Lock Screen</span>
                           </a>

                           <div class="dropdown-divider"></div>

                           <!-- item-->
                           <a href="{{url('/signout')}}" class="dropdown-item notify-item">
                               <i class="fe-log-out"></i>
                               <span>Logout</span>
                           </a>

                       </div>
                   </li>

                   <li class="dropdown notification-list">
                       <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                           <i class="fe-settings noti-icon"></i>
                       </a>
                   </li>


               </ul>

               <!-- LOGO -->
               <div class="logo-box">
                   <a href="{{'./dashboard'}}" class="logo text-center">
                       <span class="logo-lg">
                           <img src="{{asset('admin/assets/images/logo_125x.png')}}" alt="" height="30">
                           <!-- <span class="logo-lg-text-light">Xeria</span> -->
                       </span>
                       <span class="logo-sm">
                           <!-- <span class="logo-sm-text-dark">X</span> -->
                           <img src="{{asset('admin/assets/images/logo_125x.png')}}" alt="" height="18">
                       </span>
                   </a>
               </div>

               <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                   <li>
                       <button class="button-menu-mobile waves-effect">
                           <span></span>
                           <span></span>
                           <span></span>
                       </button>
                   </li>


               </ul>
           </div>

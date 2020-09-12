<header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
        <a href="{{route('post.index.home')}}"><img src="{{asset('UserView/images/logoctu.png')}}" class="img-shadow" style="width:50%; height:50%; margin:5%" alt="Girl in a jacket"></a>

            <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0" style="font-size:150%">
            @yield('active')
                
                
                <!-- <li class="d-lg-none"><a href="login.html" >Đăng nhập</a></li> -->
            </ul>
            </nav>

            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            <@if(isset($user))
            <a href="{{route('logout.Home')}}" style="font-size:150%" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Đăng xuất</a>
            @else
            <a href="{{route('login')}}" style="font-size:150%" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Đăng nhập</a>
            @endif
                <!-- <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
                <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a> -->
            </div>
            <!-- <a href="#"  class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a> -->
          </div>

        </div>
      </div>
    </header>
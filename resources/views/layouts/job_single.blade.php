<!doctype html>
<html lang="en">
@include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
    

<div class="site-wrap">

@include('layouts/blade_index_user/mobile')
    


    @yield('header')
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Product Designer</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Product Designer</strong></span>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
            @yield('head')
              <!-- <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="images/job_logo_5.jpg" alt="Image">
              </div>
              <div>
                <h2>Product Designer</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>Puma</span>
                  <span class="m-2"><span class="icon-room mr-2"></span>New York City</span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Full Time</span></span>
                </div> -->
              <!-- </div> -->
            </div>
          </div>
          @yield('button_like')
          <!-- <div class="col-lg-4">
            <div class="row"> -->
           
              <!-- <div class="col-6">
              
                  <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Thích</a>
                </div>
                <div class="col-6">
                  <a href="#" class="btn btn-block btn-primary btn-md">Ứng tuyển</a>
              </div> -->
            <!-- </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Ngôn ngữ</h3>
              <ul class="list-unstyled m-0 p-0">
              @yield('List_Language')
                <!-- <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li> -->
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Nội dung</h3>
              <ul class="list-unstyled m-0 p-0">
              @yield('content')
                <!-- <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li> -->
                
              </ul>
            </div>
          @yield('button_Apply')
            <!-- <div class="row mb-5">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Thích</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Ứng tuyển</a>
              </div>
            </div> -->

          </div>
          <div class="col-lg-4">
          @yield('sumary')
            <!-- <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
              </ul>
            </div> -->

            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Chia sẻ</h3>
              <div class="px-3">
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    @include('layouts/blade_index_user/post')

    @include('layouts/blade_index_user/talk')

    @include('layouts/blade_index_user/bottom')
   
  
  </div>

    <!-- SCRIPTS -->
    @include('layouts/blade_index_user/js')

     
  </body>
</html>
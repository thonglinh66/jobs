<!doctype html>
<html lang="en">
 @include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
    

<div class="site-wrap">

  @include('layouts/blade_index_user/mobile')
    
  @yield('command')
    <!-- NAVBAR -->
    @include('layouts/business/navbar_business')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Đăng bài</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
    @yield('form')
      


    
    
    @include('layouts/blade_index_user/bottom')
  
  </div>

    <!-- SCRIPTS -->
      @include('layouts/blade_index_user/js')
     
  </body>
</html>
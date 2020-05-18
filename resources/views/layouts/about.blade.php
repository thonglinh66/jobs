
<!doctype html>
<html lang="en">
  @include('layouts/blade_index_user/head')
  <body id="top">
  @include('layouts/blade_index_user/load')
<div class="site-wrap">
  @include('layouts/blade_index_user/mobile')
   <!-- .site-mobile-menu -->
    <!-- NAVBAR -->
    @include('layouts/blade_index_user/navbar')
    <!-- HOME -->
    @include('layouts/blade_index_user/navbar_about_us')
    <!-- <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="{{asset('UserView/images/UserTu.jpg')}}" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Sinh viên lựa chọn nơi thực tập</h2>
            <p class="lead">abcxyz</p>
            <p>zyxcba</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
             <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span> -->
              <!-- <img src="{{asset('UserView/images/Co_Tuyen.png')}}" alt="Image" class="img-fluid img-shadow">  
            </a> 
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Chủ Nhiệm đề tài</h2>
            <p class="lead">Cô: Trương Thị Thanh Tuyền</p>
            <p>zyxcba</p>
          </div>
        </div>
      </div>
    </section>  -->

    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Team TMT</h2>
          </div>
        </div>
        <section class="site-section pt-0" style="padding-top:10px;padding-bottom:10px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
          
              <img src="{{asset('UserView/images/UserThong.jpg')}}" alt="Image" class="img-fluid img-shadow" style="width: 450px;">
            
          </div>
          <div class="col-lg-5 ml-auto">
          <h3>Tăng Minh Thông</h3>
            <p class="text-muted">Lyon.Thon</p>
            <p>Nhóm Trưởng TMT chuyên front-end and back-end </p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0"style="padding-top:10px;padding-bottom:10px;" >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="{{asset('UserView/images/UserHuy.jpg')}}" alt="Image" class="img-fluid img-shadow" style="width: 450px;">
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
          <h3>Huỳnh Nhựt Huy</h3>
            <p class="text-muted">Kai-Sould</p>
            <p>Nhóm Phó TMT chuyên front-end.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="site-section pt-0" style="padding-top:10px;padding-bottom:10px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="{{asset('UserView/images/UserTu.jpg')}}" alt="Image" class="img-fluid img-shadow" style="width: 450px;">
          </div>
          <div class="col-lg-5 ml-auto">
          <h3>Trần Thanh Tú</h3>
            <p class="text-muted">Tú-Tú</p>
            <p>Nhóm Phó TMT chuyên back-end.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0" style="padding-top:10px;padding-bottom:10px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="{{asset('UserView/images/UserQuan.jpg')}}  " alt="Image" class="img-fluid img-shadow" style="width: 450px;">
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
          <h3>Đinh Hoàng Quân</h3>
            <p class="text-muted">Đen</p>
            <p>Manager của Team TMT chuyên kiểm thử.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
        
      </div>
    </section>

    @include('layouts/blade_index_user/bottom')
  
  </div>

    <!-- SCRIPTS -->
    @include('layouts/blade_index_user/js')
   
  </body>
</html>
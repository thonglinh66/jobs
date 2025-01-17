<!doctype html>
<html lang="en">
  @include('layouts/blade_index_user/head')
  <body id="top">
  @include('layouts/blade_index_user/load')
<div class="site-wrap">
  @include('layouts/blade_index_user/mobile')
   <!-- .site-mobile-menu -->
    
@yield('command')
    <!-- NAVBAR -->
    @include('layouts/blade_index_user/navbar')
    <!-- HOME -->
    @yield('navbar_about_us')

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('home.contact.post')}}" method="post" >
            @csrf
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="lname">Họ và Tên</label>
                  <input type="text" id="lname" name="fullname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="mail" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Học và làm việc tại</label> 
                  <input type="subject" id="subject" name="jobsAt" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Thông điệp</label> 
                  <textarea id="editor-2" class="form-control editor"  rows="10" cols="50" name="decript"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Gửi" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Địa chỉ</p>
              <p class="mb-4">Khu II, Đường 3-2, Ninh Kiều, Cần Thơ</p>

              <p class="mb-0 font-weight-bold">Số điện thoại</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Địa chỉ Email</p>
              <p class="mb-0"><a href="#">dhct@ctu.edu.vn</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>
<!--
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Happy Candidates Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>&ldquo;Ipsum harum assumenda in eum vel eveniet numquam cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit&rdquo;</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Elisabeth Smith</h3>
                  <span class="position">Creative Director</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>&ldquo;Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit&rdquo;</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Chris Peter</h3>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>-->
    
    @include('layouts/blade_index_user/bottom')
  
  </div>

    <!-- SCRIPTS -->
    @include('layouts/blade_index_user/js')   
  </body>
</html>
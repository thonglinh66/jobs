
<!doctype html>
<html lang="en">
  @include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
<div class="site-wrap">

  @include('layouts/blade_index_user/mobile')
  @include('layouts/blade_index_user/navbar')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Cách tốt nhất để tiếp cận đến công việc của bạn</h1>
             <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>-->
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Tên công việc, công ty...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Chọn địa điểm">
                    <option>Thành phố 1</option>
                    <option>Thành phố 2</option>
                    <option>Thành phố 3</option>
                    <option>Thành phố 4</option>
                    <option>Thành phố 5</option>
                    <option>Thành phố 6</option>
                    <option>Thành phố 7</option>
                    <option>Thành phố 8</option>
                    <option>Thành phố 9</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Full-Part time  ">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Tìm kiếm</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Từ khóa phổ biến:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <li><a href="#" class="">UI Designer</a></li>
                    <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    @include('layouts/blade_index_user/post')
    @include('layouts/blade_index_user/introduce')
    @include('layouts/blade_index_user/helpedCP')
    @include('layouts/blade_index_user/talk')
    @include('layouts/blade_index_user/bottom')
  </div>

    <!-- SCRIPTS -->
      @include('layouts/blade_index_user/js')

     
  </body>
</html>
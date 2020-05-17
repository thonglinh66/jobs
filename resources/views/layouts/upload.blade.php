	
<!doctype html>
<html lang="en">
@include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
    

<div class="site-wrap">

@include('layouts/blade_index_user/mobile')
    

    <!-- NAVBAR -->
    
    @include('layouts/business/navbar_business')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Cập nhật thông tin</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Cập nhập thông tin</h2>
              </div>
            </div>
          </div>  
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            @yield('form')
          </div>

         
        </div>
        
      </div>
    </section>

    
    
    @include('layouts/blade_index_user/bottom')
  
  </div>

    <!-- SCRIPTS -->
      @include('layouts/blade_index_user/js')
     
  </body>
</html>
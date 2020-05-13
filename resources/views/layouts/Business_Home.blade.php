
<!doctype html>
<html lang="en">
 @include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
    

<div class="site-wrap">

  @include('layouts/blade_index_user/mobile')
    

    <!-- NAVBAR -->
    @include('layouts/blade_index_user/navbar')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Product Designer</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Product Designer</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    
    @include('layouts/business/view')

    @include('layouts/blade_index_user/post')
    
    @include('layouts/blade_index_user/bottom') 
  </div>

    @include('layouts/blade_index_user/js')

     
  </body>
</html>

<!doctype html>
<html lang="en">
  @include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
<div class="site-wrap">

  @include('layouts/blade_index_user/mobile')
  @include('layouts/blade_index_user/navbar')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>

    
    @yield('comment')
    @include('layouts/business/view')

    @include('layouts/blade_index_user/post')
    
    @include('layouts/blade_index_user/bottom') 
  </div>

    @include('layouts/blade_index_user/js')

     
  </body>
</html>
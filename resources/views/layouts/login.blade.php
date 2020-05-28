
<!doctype html>
<html lang="en">
@include('layouts/blade_index_user/head')
  <body id="top">

  @include('layouts/blade_index_user/load')
    

<div class="site-wrap">

@include('layouts/blade_index_user/mobile')
    

    <!-- NAVBAR -->
    
    <!-- NAVBAR -->
<header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <a href="login"><img src="{{asset('UserView/images/logoctu.png')}}" class="img-shadow" style="width:50%; height:50%; margin:5%" alt="Girl in a jacket"></a>
        </div>
      </div>
    </header>


    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('UserView/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
         
            <h2 class="mb-4">Đăng nhập</h2>
            @if(isset($fails))
              <div class="alert alert-success" role="alert" id="showMessage">
                  <p>{{$fails}}</p>
                  <p class="mb-0"></p>
              </div>
           @endif
            <form action="{{ route('login') }}" class="p-4 border rounded" method="post">
            @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Tên đăng nhập</label>
                  <input type="text" id="fname" name="username" class="form-control" placeholder="UserName">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Mật khẩu</label>
                  <input type="password" id="fname" name="password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
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
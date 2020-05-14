	
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="{{asset('UserView/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('UserView/css/quill.snow.css')}}">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('UserView/css/style.css')}}">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="has-children">
                <a href="job-listings.html" class="active">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.html">Job Single</a></li>
                  <li><a href="post-job.html" class="active">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="services.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

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
            <form action="{{route('addinfor')}}" class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="text-black my-5 border-bottom pb-2">Thông tin</h3>
              <div class="form-group">
                <label for="company-name">Tên Công Ty</label>
                <input type="text" name="name" class="form-control" id="company-name" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="company-tagline">Địa chỉ</label>
                <input type="text" name="adress" class="form-control" id="company-tagline" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="job-description">Mô tả công ty</label>
                <textarea id="editor-2" class="form-control editor"  rows="20" cols="50" name="description"></textarea>

              </div>
              
              <div class="form-group">
                <label for="company-website">Website công ty</label>
                <input type="text" name="website" class="form-control" id="company-website" placeholder="https://">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Facebook công ty</label>
                <input type="text" name="face" class="form-control" id="company-website-fb" placeholder="@Facebook">
              </div>

              <div class="form-group">
                <label for="company-website-mail">Mail Công ty</label>
                <input type="text" name="mail" class="form-control" id="company-website-tw" placeholder="@Mail">
              </div>
              <div class="form-group">
                <label for="company-website-tw">Twitter Công ty</label>
                <input type="text" name="twtter" class="form-control" id="company-website-tw" placeholder="@Twitter">
              </div>
              <div class="form-group">
                <label for="company-website-tw">Điên thoại Công ty</label>
                <input type="text" name="phone" class="form-control" id="company-website-tw" placeholder="070...">
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Cập nhật ảnh</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Lấy Từ<input name="Img" type="file" hidden>
                </label>
              </div>
              <div class="row align-items-center mb-5">
          
          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Xem lại</a>
              </div>
              <div class="col-6">
                <input type="submit" class="btn btn-block btn-primary btn-md" name="submit" value="Lưu thông tin">
              </div>
            </div>
          </div>
        </div>
            </form>
          </div>

         
        </div>
        
      </div>
    </section>

    
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="{{asset('UserView/js/jquery.min.js')}}"></script>
    <script src="{{asset('UserView/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('UserView/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('UserView/js/stickyfill.min.js')}}"></script>
    <script src="{{asset('UserView/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('UserView/js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{asset('UserView/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('UserView/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('UserView/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('UserView/js/quill.min.js')}}"></script>
    
    
    <script src="{{asset('UserView/js/bootstrap-select.min.js')}}"></script>
    
    <script src="{{asset('UserView/js/custom.js')}}"></script>
   
   
     
  </body>
</html>
	
<!doctype html>
<html lang="en">
  @include('layouts/blade_index_user/head')
  <body id="top">
  @include('layouts/blade_index_user/load')
    

    <div class="site-wrap">
    
      @include('layouts/blade_index_user/mobile')
        
    
        @include('layouts/blade_index_user/navbar')

    <!-- HOME -->
    @include('layouts/business/head_upload_infor')
    @include('layouts/business/body_upload_infor')
    @include('layouts/blade_index_user/bottom')
  
  </div>

    <!-- SCRIPTS -->
    @include('layouts/blade_index_user/js') 
  </body>
</html>
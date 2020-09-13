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
            <form action="{{route('addinfor'),$data->code}}" class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
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
                <div class="editor" id="editor-2">
                  <p name="description">Mô tả</p>
                </div>
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
                  Chọn ảnh đại diện <input name="Img" type="file" hidden>
                </label>
              </div>

            </form>
          </div>

         
        </div>
        <div class="row align-items-center mb-5">
          
          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Xem lại</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md" name="submit">Lưu thông tin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="{{asset('UserView/images/'.$data->image)}}" alt="Image">
              </div>
              <div>
                <h2>{{$data->name}} </h2>
                <div>
                  <span class="m-2"><span class="icon-room mr-2"></span>{{$data->address}}</span>
                </div>
              </div>
            </div>
          </div>
          @yield('button_like')
          
           
              <!-- <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"> Theo dõi</span></a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Nhận xét</a>
              </div> -->
        </div>
      </div>
      <div class="view">
          <div class="col-left">
            <div class="full">
            <!-- Navigation -->
            <ul class="navigation">
            <li class="active_view navigation__item" id="Checke_1" onclick="Tranfer('Checke_1')">	
            <a data-controller="utm-tracking" href="#">Overview</a>
            <div class="corner-bottom-right-overlay d-none" ></div>
            </li>
            <li class="navigation__item review-tab" id="Checke_2" onclick="Tranfer('Checke_2')">
            <a data-controller="utm-tracking" href="#">{{$comment_count}} Review</a>
            <div class="corner-bottom-right-overlay"></div>
            <div class="corner-bottom-right-curve"></div>
            <div class="corner-bottom-left-overlay"></div>
            <div class="corner-bottom-left-curve"></div>
            </li>
            </ul>
            </div>
            
            <!-- Description - Tech stack -->
            <!-- Last updated: "2020-05-13 02:07:48 +0700"-->
            <div class="panel panel-default " id="over">
            <div class="panel-heading ">
            <h3 class="panel-title headline" style="margin-left: 40%;">
            Tổng quan về công ty :
            </h3>
            </div>

            <div class="panel-body" style=" display: flex; width: 100%; " >
            <div class="paragraph" style="width: 50%; border-right: 1px solid; padding: 30px;" >
            <span style="font-weight: bold;"> Tên công ty :</span><span> {{$data->name}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Địa chỉ :</span><span> {{$data->address}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Mail :</span><span> {{$data->mail}}&nbsp;</span>
            <span style="font-weight: bold;">/ Điện thoại :</span><span> {{$data->phone}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Website :</span><span> {{$data->website}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Liên lạc  : </span><p></p>
            <div class="footer-social" >
            <a href="{{$data->facebook}}"><span class="icon-facebook"></span>&nbsp;</a>
            <a style="margin-left:10px" href="{{$data->twitter}}"><span class="icon-twitter"></span>&nbsp;</a><p></p>
            </div>
            <span style="font-weight: bold;"> Mô tả:</span><span> {{$data->decription}}&nbsp;</span><p></p>
            </div>
           
            <div class="paragraph" style="padding: 30px;" >
            <span style="font-weight: bold;"> Ngày gia nhập :</span><span> {{$data->created_at}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Tổng số lượng bài đăng :</span><span> {{count($datacount)}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Số lượng ứng tuyển :</span><span> {{$databs->countt}}&nbsp;</span><p></p>
            <span style="font-weight: bold;"> Số lượng trúng tuyển :</span><span> {{$datacs->countts}}&nbsp;</span>
            </div>
            </div>


            <div class="panel-body">
            <div class="paragraph" >
            <h3 class="panel-title">Chuyên:</h3>
            <ul class="employer-skills">
              @foreach($language as $lg)
                <li class="employer-skills__item"><a target="_blank" data-controller="utm-tracking" href="/it-jobs/c++">{{$lg->name_l}}</a></li>
                @endforeach
            </ul>
           </div>
            </div>
            
            </div>
            <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
            <div class="panel panel-default d-none" id="re">
            @foreach($comment as $c)
            <div class="card" style="margin:0 10px 10px 10px">
            <div class="card-body">
                <h5 class="card-title text-dark">{{$c->name}}</h5>
                <p class="card-text"  style="
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;" > {{$c->content}}</p>
            </div>
            </div>
            @endforeach
            </div>
            </div>
        </div>
      </div>
    </section>
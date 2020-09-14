@extends('layouts.admin')
@section('active')
<li class="nav-item has-treeview menu-open">
<a href="#" class="nav-link ">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Thông tin căn bản
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="./account" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Danh sách tài khoản</p>
</a>
</li>
<li class="nav-item">
<a href="./listpost" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Danh sách bài đăng</p>
</a>
</li>
<li class="nav-item">
<a href="./listcontact" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Danh sách phản hồi</p>
</a>
</li>
<li class="nav-item ">
            <a href="./analyst" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Danh sách thống kê
               
              </p>
            </a>
          </li>
</ul>
</li>
         
         
          
          <li class="nav-item has-treeview ">
            <a href="./charts" class="nav-link ">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Biểu đồ thống kê ứng tuyển
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link  active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Biểu đồ thống kê ngôn ngữ
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="./line" class="nav-link  ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Biểu đồ thống kê bài đăng
               
              </p>
            </a>
          </li>
@endsection



@section('content')
<style>
    body{
        font-size: 12px!important;
    }
</style>
<div id="page-wrapper">
   
                            
                           
<h1>Biểu đồ thống kê số lượng ứng tuyển và trúng tuyển của các công ty</h1>

<div style="width: 80%">
    {!! $usersChart->container() !!}
</div>
                        
@endsection
    
@section('script') 
{{-- ChartScript --}}
    @if($usersChart)
    {!! $usersChart->script() !!}
    @endif   
    <script>
        // Sắp xếp
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        // an thong bao
        $(document).ready(function(){
            setTimeout(function(){
                $('#showMessage').hide()            
            },1000)
        });
        // Họp thoại cảnh báo xóa
        $(document).ready(function () {
            $('.delete_form').on('submit',function(){
                if(confirm('Bạn có muốn xóa tài khoản này không?'))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection

@section('script')
<script>
$(function () 
    $('[data-toggle="tooltip"]').tooltip();
);
</script>
@endsection
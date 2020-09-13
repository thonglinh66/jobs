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
<a href="./account" class="nav-link active">
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
</ul>
</li>
         
         
          <li class="nav-item has-treeview active">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Danh sách thống kê
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="./charts" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Danh sách thống kê
               
              </p>
            </a>
          </li>

@endsection

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Tài khoản</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('account.index')}}">account</a></li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
<style>
    body{
        font-size: 12px!important;
    }
</style>
<div id="page-wrapper">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert" id="showMessage">
            <p>{{$message}}</p>
            <p class="mb-0"></p>
        </div>
    @endif
        <div class="container-fluid">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <br>
                            {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                <a style="width:80px" href="{{route('account.add')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm</a>
                            {{-- @endif --}}
                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table style="font-size:12px" id="myTable" class="table table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>ID Công ty</th>
                                            <th>Tên Công Ty</th>
                                            <th>Số lượng sinh viên ứng tuyển</th>
                                            <th>Số lượng nhân viên trúng tuyển</th>
                                            <th>Phần trăm trúng tuyển</th>
                                        </tr>
                                    </thead>
                                    <tbody  style="font-size: 12px">
                                        @foreach ($databs as $item)
                                            <tr>
                                                <td>{{$item->code}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->countt}}</td>
                                                @foreach ($datacs as $items)
                                                @if($items->code == $item->code)
                                                 <td>{{$items->countts}}</td> 
                                                 <td>{{($items->countts / $item->countt)*100}} %</td>
                                                 @endif
                                                 @endforeach
                                                  
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{-- end div col-sm-6 --}}
                </div> 
            {{-- end div row --}}
            </div>
        {{-- end div white-box --}}
        </div>
    {{-- end div container-fluid --}}
</div>
    {{-- end div page-wrapper --}}
@endsection
    
@section('script')    
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
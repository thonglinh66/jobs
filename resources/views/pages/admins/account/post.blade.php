@extends('layouts.admin')
@section('active')
<li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Thông tin căn bản
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./account" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tài khoản</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listpost" class="nav-link active">
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
            <a href="./charts" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
              Biểu đồ thống kê ứng tuyển
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="./language" class="nav-link  active">
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
@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Bài đăng</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('account.index')}}">post</a></li>
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
                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table style="font-size:12px" id="myTable" class="table table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mã CP</th>
                                            <th>Loại Tuyển dụng</th>
                                            <th>Tiêu đề</th>
                                            <th>Số lượng</th>
                                            <th>Mức lương</th>
                                            <th>Hạn chót</th>
                                            <th>Ngày đăng</th>
                                            {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                                <th>Chức năng</th>
                                            {{-- @else --}}
                                                {{-- <th></th> --}}
                                            {{-- @endif --}}
                                        </tr>
                                    </thead>
                                    <tbody  style="font-size: 12px">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->code}}</td>
                                                @if($item->type == 0) 
                                                <td>Thực tập</td>
                                                @elseif ($item->type == 1) 
                                                <td>Tuyển dụng</td>
                                                @else 
                                                <td>Null</td>
                                                @endif
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->member}}</td>
                                                <td>{{$item->min_salary}}-{{$item->max_salary}}</td>
                                                <td>{{$item->deadline}}</td>
                                                <td>{{$item->created_at}}</td>
                                                {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                                    <td>
                                                        <form action="{{ route('post.delete', $item->id) }}" method="post" class="delete_form">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="fal fa-trash-alt fa-lg"></i></button>
                                                        </form>
                                                    </td>
                                                {{-- @else --}}
                                                    {{-- <td></td> --}}
                                                {{-- @endif --}}
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
                if(confirm('Bạn có muốn xóa bài đăng này không?'))
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
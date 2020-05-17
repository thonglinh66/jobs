@extends('layouts.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Sửa tai khoản</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">admin</a></li>
      <li class="breadcrumb-item"><a href="{{route('account.index')}}">account</a></li>
        <li class="breadcrumb-item active">edit</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('account.update', $account->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id" class="control-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="" value="{{$account->id}}" disabled>
                </div>
                <div class="form-group">
                        <label for="code" class="control-label">Mã</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="" value="{{$account->code}}">
                </div>
                <div class="form-group">
                    <label for="type" class="control-label">Loại tk</label>
                    <select name="type"  class="form-control pull-right">
                        <option value="0" @if($account->type == 0) selected @endif>Sinh viên</option>
                        <option value="1" @if($account->type == 1) selected @endif>Doanh nghiệp</option>
                    </select>                     
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="{{route('account.index')}}" class="btn btn-default">Trờ lại</a>
                    </div>  
            </form>
        </div>
    </div>    
@endsection
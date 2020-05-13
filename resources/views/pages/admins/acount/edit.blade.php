@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('acount.update', $acount->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id" class="control-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="" value="{{$acount->id}}" disabled>
                </div>
                <div class="form-group">
                        <label for="code" class="control-label">Mã</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="" value="{{$acount->code}}">
                </div>
                <div class="form-group">
                    <label for="type" class="control-label">Loại tk</label>
                    <select name="type"  class="form-control pull-right">
                        <option value="0" @if($acount->type == 0) selected @endif>Sinh viên</option>
                        <option value="1" @if($acount->type == 1) selected @endif>Doanh nghiệp</option>
                    </select>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="{{route('acount.index')}}" class="btn btn-default">Trờ lại</a>
                    </div>
            </form>
        </div>
    </div>    
@endsection
@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('acount.add_submit')}}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="code" class="control-label">Mã</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="1245">
                </div>
                <div class="form-group">
                    <label for="type" class="control-label">Loại Tk</label>
                    <select id="type" name="type">
                        <option value="0">DN</option>
                        <option value="1" selected>SV</option>
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
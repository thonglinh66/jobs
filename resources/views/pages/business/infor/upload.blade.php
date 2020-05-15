@extends('layouts.upload')
@section('Login')
 <a href="{{route('business.upload')}}" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
<a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
@endsection
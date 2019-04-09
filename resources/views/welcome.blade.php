@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Sản Phẩm
    </div>
    <div class="links">
        <a href="{{route('room')}}"> Danh sách sản phẩm</a>
        <a href="{{route('add')}}"> Thêm mới sản phẩm</a>

    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>
    <div class="row">
        @if(!isset($products) || count($products) === 0)
            <p class="text-danger"> Không có sản phẩn nào.</p>
        @else
            @foreach($products as $key => $product)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <p class=""><img src="{{asset("storage/$product->image")}}" height="200px" width="200px" /></p>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-dark">Địa chỉ: {{ $product->address }}</p>
                            <p class="card-text text-dark"> Mô tả:{{$product->description}}</p>
                            <p class="card-text text-dark"> Giá từ: ${{$product->money}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection


@extends('layouts.master')
@section('title ', 'Thêm mới sản phẩm ')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Đăng Phòng Cho Thuê </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Tên Phòng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name"  placeholder="Nhập tên phòng " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Loại Phòng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="category" placeholder="Nhập loại phòng" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Số Lượng Phòng Ngủ</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="bedrooms" placeholder="Enter BedRooms Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Số Lượng Phòng Tắm </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="bathroom" placeholder="Enter BathRoom Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Mô Tả</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" placeholder="Enter Description" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Giá Tiền</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="money" placeholder="Enter Money" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" placeholder="Enter image" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm </button>
                    <a href="{{ route('welcome') }}" class="btn btn-primary"> Home </a>
                </form>
            </div>
        </div>
    </div>
@endsection


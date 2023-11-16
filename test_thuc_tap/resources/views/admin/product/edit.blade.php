@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2>Thêm mới sản phẩm</h2>
        <form action="{{route('product.update', $pro->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên..." value="{{$pro->name}}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Chọn ảnh..." value="{{$pro->image}}">
                <img src="/uploads.product/{{ $pro->image }}" alt="anh" width="100px">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá..." value="{{$pro->price}}">
            </div>
            <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Nhập giá giảm..." value="{{$pro->sale_price}}">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="status" value="0"
                    {{$pro->status == 0 ? 'checked' : ''}}>Tạm Ẩn
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="status" value="1"
                    {{$pro->status == 1 ? 'checked' : ''}}>Hiển Thị
                </label>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option>---Chọn danh mục---</option>
                    @foreach ($sanpham as $item)
                        <option value="{{ $item->id }}" {{$item->id == $pro->category_id ? 'selected' : ''}}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection

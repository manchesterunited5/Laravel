@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2>Thêm mới sản phẩm</h2>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên...">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Chọn ảnh...">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá...">
            </div>
            <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Nhập giá giảm...">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="" value="0">Tạm Ẩn
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="" value="1" checked>Hiển
                    Thị
                </label>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option>---Chọn danh mục---</option>
                    @foreach ($sanpham as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">THêm mới +</button>
        </form>
    </div>
@endsection

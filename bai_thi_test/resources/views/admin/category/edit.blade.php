@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2>Sửa danh mục</h2>
        <form action="{{route('category.update', $cate->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên..." value="{{$cate->name}}">
            </div>
            <button class="btn btn-primary" type="submit">Cập nhật</button>
        </form>
    </div>
@endsection

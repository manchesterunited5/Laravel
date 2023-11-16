@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2>Thêm mới danh mục</h2>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên...">
            </div>
            <button class="btn btn-primary" type="submit">Thêm mới</button>
        </form>
    </div>
@endsection

@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2>Thêm mới sản phẩm</h2>
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên...">
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới +</button>
        </form>
    </div>
@endsection

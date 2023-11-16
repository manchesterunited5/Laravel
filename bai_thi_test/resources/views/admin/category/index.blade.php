@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2 class="text-center">Thêm mới sản phẩm</h2>
        <a class="btn btn-primary" href="{{route('category.create')}}">Thêm mới +</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pros as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <form action="{{route('category.destroy', $item->id)}}" method="POST">
                                <a class="btn btn-success" href="{{route('category.edit', $item->id)}}">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không???')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

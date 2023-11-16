@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2 class="text-center my-5">Trang Category</h2>
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
                @foreach ($cates as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <form action="{{route('category.destroy', $item->id)}}" method="POST">
                                <a href="{{route('category.edit', $item->id)}}" class="btn btn-success">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark" onclick="return confirm('Are you sure???')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

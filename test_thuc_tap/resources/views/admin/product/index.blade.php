@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2 class="text-center my-5">Trang Product</h2>
        <a class="btn btn-primary" href="{{route('product.create')}}">Thêm mới +</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pros as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="uploads.product/{{ $item->image }}" alt="anh" width="60px"></td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->sale_price }}</td>
                        <td>{{ $item->status == '0' ? 'Tạm Ẩn' : 'Hiển thị'}}</td>
                        <td>{{ $item->categoris->name }}</td>
                        <td>
                            <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                <a href="{{route('product.edit', $item->id)}}" class="btn btn-success ">Sửa</a>
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

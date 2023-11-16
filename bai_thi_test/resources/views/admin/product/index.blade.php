@extends('layouts.admin')

@section('main')
    <div class="container">
        <h2 class="text-center">Thêm mới sản phẩm</h2>
        <a class="btn btn-primary" href="{{route('product.create')}}">Thêm mới +</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Sale_price</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pros as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><img src="uploads/product/{{$item->image}}" alt="anh" width="60px"></td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->sale_price}}</td>
                        <td>{{$item->categories->name}}</td>
                        <td>{{$item->status == '0' ? 'Tạm ẩn' : 'Hiển thị'}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                <a class="btn btn-success" href="{{route('product.edit', $item->id)}}">Sửa</a>
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

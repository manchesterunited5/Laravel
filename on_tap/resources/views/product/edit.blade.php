<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Sửa sản phẩm</h2>
        <form action="{{route('product.update', $pro->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên..." value="{{$pro->name}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá..." value="{{$pro->price}}">
            </div>
            <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Nhập giá giảm..." value="{{$pro->sale_price}}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Chọn ảnh..." value="{{$pro->image}}">
                <img src="/uploads/{{$pro->image}}" alt="anh" width="100px">
            </div>
            <div class="form-group">
              <label for="">Category</label>
              <select class="form-control" name="category_id" id="category_id">
                <option>---Chọn---</option>
                @foreach ($sanpham as $item)
                <option value="{{ $item->id }}" {{ $item->id == $pro->category_id ? 'selected' : '' }}>
                {{ $item->id }} -
                {{ $item->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="status" value="0" checked
                {{$pro->status == 0 ? 'checked' : ''}}>Tạm ẩn
              </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="status" value="1"
                {{$pro->status == 1 ? 'checked' : ''}}>Hiện
              </label>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"> {{$pro->description}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Cập nhật</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

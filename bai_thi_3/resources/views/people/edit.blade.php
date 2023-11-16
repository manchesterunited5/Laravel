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
        <h2>Sửa thông tin người dân</h2>
        <form action="{{route('people.update', $peo->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên..." value="{{$peo->name}}">
            </div>
            <div class="form-group">
                <label for="avartar">Ảnh</label>
                <input type="file" name="avartar" id="avartar" class="form-control" placeholder="Chọn ảnh" value="{{$peo->avartar}}">
                <img src="/uploads/{{$peo->avartar}}" alt="anh" width="100px">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Nhập ngày sinh" value="{{$peo->birthday}}">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="0"
                        checked {{$peo->gender == 0 ? 'checked' : ''}}>Nam
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="1"
                    {{$peo->gender == 1 ? 'checked' : ''}}>Nữ
                </label>
            </div>
            <div class="form-group">
                <label for="">Province</label>
                <select class="form-control" name="province_id" id="">
                    <option>---Chọn---</option>
                    @foreach ($tinh as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $peo->province_id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
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

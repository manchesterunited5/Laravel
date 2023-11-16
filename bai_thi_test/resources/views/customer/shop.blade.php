@extends('layouts.customer')

@section('main')
    <div class="container">
        <h2 class="text-center">All Product</h2>
        <form action="" method="get">
            <div>
                <input type="text" name="search" id="" class="form-control" placeholder="">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <form method="get">
            <div class="form-group">
                <label for="">Lọc sản phẩm</label>
                <select class="form-control" name="sort" id="">
                    <option value="name-ASC">Name: a-z</option>
                    <option value="name-DESC">Name: z-a</option>
                    <option value="price-ASC">Price: a-z</option>
                    <option value="price-DESC">Price: z-a</option>
                </select>
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
        <div class="row">
            @foreach ($allProducts as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="uploads/product/{{ $item->image }}" alt="anh">
                        <div class="card-body">
                            <a href="">
                                <h4 class="card-title">{{ $item->name }}</h4>
                            </a>
                            <p class="card-text"><b>Price: </b>{{ $item->price }}vnd</p>
                            @if ($item->sale_price > 0)
                                <p class="card-text"><b>Sale Price: </b>{{ $item->sale_price }}vnd</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container my-4">
                {{ $allProducts->links() }}
            </div>
        </div>
    </div>
@endsection

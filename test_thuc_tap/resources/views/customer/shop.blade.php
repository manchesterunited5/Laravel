@extends('layouts.customer')

@section('main')
    <div class="container">
        <h2>All product</h2>
        <form action="" method="get">
            <input type="text" name="search" class="form-control">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <form action="" method="get">
            <div class="form-group">
                <label for=""></label>
                <select class="form-control" name="filter" id="filter">
                    <option value="name-ASC">Name: a-z</option>
                    <option value="name-DESC">Name: z-a</option>
                    <option value="price-ASC">Price: a-z</option>
                    <option value="price-DESC">Price: z-a</option>
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <div class="row">
            @foreach ($pros as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="uploads.product/{{ $item->image }}" alt="anh">
                        <div class="card-body">
                            <a href="{{route('detail', $item->id)}}"><h4 class="card-title">Name: {{ $item->name }}</h4></a>
                            <p class="card-text">Price: {{ $item->price }}</p>
                            @if ($item->sale_price > 0)
                                <p class="card-text">Sale Price: {{ $item->sale_price }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container my-5">
                {{ $pros->links() }}

            </div>
        </div>
    </div>
@endsection

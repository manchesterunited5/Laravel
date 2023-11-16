@extends('layouts.customer')

@section('main')
    <div class="container">
        <h2 class="text-center my-3">New Product</h2>
        <div class="row">
            @foreach ($pros as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="uploads/product/{{ $item->image }}" alt="anh">
                        <div class="card-body">
                            <a href="{{route('detail', $item->id)}}"><h4 class="card-title">{{ $item->name }}</h4></a>
                            <p class="card-text"><b>Price: </b>{{ $item->price }}vnd</p>
                            @if ($item->sale_price > 0)
                                <p class="card-text"><b>Sale Price: </b>{{ $item->sale_price }}vnd</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 class="text-center my-3">Sale Product</h2>
        <div class="row">
            @foreach ($sale_price as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="uploads/product/{{ $item->image }}" alt="anh">
                        <div class="card-body">
                            <a href="{{route('detail', $item->id)}}"><h4 class="card-title">{{ $item->name }}</h4></a>
                            <p class="card-text"><b>Price: </b>{{ $item->price }}vnd</p>
                            @if ($item->sale_price > 0)
                                <p class="card-text"><b>Sale Price: </b>{{ $item->sale_price }}vnd</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

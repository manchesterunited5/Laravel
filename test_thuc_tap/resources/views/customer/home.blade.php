@extends('layouts.customer')

@section('main')
    <div class="container">
        <h2>New Product</h2>
        <div class="row">
            @foreach ($pro as $item)
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
        </div>
        <h2>Sale Price</h2>
        <div class="row">
            @foreach ($sale_price as $item)
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
        </div>
    </div>
@endsection

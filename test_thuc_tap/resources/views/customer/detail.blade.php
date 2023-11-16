@extends('layouts.customer')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="/uploads.product/{{ $pro->image }}" alt="anh" width="100%">
            </div>
            <div class="col-md-7">
                <p>Id: {{ $pro->id }}</p>
                <h3>Name: {{ $pro->name }}</h3>
                <h5>Price: {{ $pro->price }}</h5>
                @if ('sale_price' > 0)
                    <h5>Sale Price: {{ $pro->sale_price }}</h5>
                @endif
            </div>
        </div>
    </div>
@endsection

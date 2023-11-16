@extends('layouts.customer')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{url('')}}/uploads/product/{{$detail->image}}" alt="anh" width="100%">
            </div>
            <div class="col-md-7">
                <p>Id: {{$detail->id}}</p>
                <h4>Name: {{$detail->name}}</h4>
                <h5>Price:{{$detail->price}}</h5>
                @if ($detail->sale_price > 0)
                    <h5>Sale Price: {{$detail->sale_price}}</h5>
                @endif
                <h5>Category: {{$detail->categories->name}}</h5>
                <h6>Description:{{$detail->description}}</h6>
                <form action="" method="post">
                    <div class="d-flex">
                        <div class="w-25 mr-3">
                            <input class="form-control" type="text" name="quantity" value="1" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add to cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

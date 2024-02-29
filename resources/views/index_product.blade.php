<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>
                    @if(Auth::check()&&Auth::user()->is_admin)
                    <div class="card-group m-2" >
                        <a class="btn btn-secondary" href="{{route('create_product')}}" >Add Product</a>
                    </div>
                    @endif
                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                        <div class="card m-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('storage/' .$product->image) }}"
                                alt="Card image cap"> 
                            <div class="card-body">
                                <p class="card-text">{{ $product->name }}</p>
                                <form action="{{ route('show_product', $product)}}" method="get">
                                    <button type="submit" class="btn btn-primary">Show detail</button>
                                </form>
                                @if(Auth::check()&&Auth::user()->is_admin)
                                <form action="{{route('delete_product',$product)}}"method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mt-2">Delete product</button>
                                </form>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html> 
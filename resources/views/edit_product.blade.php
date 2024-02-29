<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$product->name}}</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Product') }}</div> 
                    <div class="card-body">
                        <form action="{{route('update_product', $product)}}" method="POST" enctype="multipart/form-data">
                            @method('patch')
                            @csrf 
                            <label for="">Name</label>
                            <br>
                            <input type="text" name="name" value="{{ $product->name }}">
                            <br>
                            <label for="">Description</label>
                            <br>
                            <input type="text" name="description" value="{{ $product->description}}">
                            <br>
                            <label for="">Price</label>
                            <br>
                            <input type="number" name="price" value="{{ $product->price }}">
                            <br>
                            <label for="">Stock</label>
                            <br>
                            <input type="number" name="stock" value="{{ $product->stock }}">
                            <br>
                            <label for="">Image</label>
                            <br>
                            <input type="file" name="image">
                            <br>
                            <button type="submit">Update data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection       
</body>
</html>
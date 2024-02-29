<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>
@extends('layouts.app')@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>                    
                <div class="card-body">
                    @if ($errors->any()) 
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif                        
                    <form action="{{ route('edit_profile') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <input type="role" class="form-control"
                                value="{{ $user->is_admin ? 'Admin' : 'Member' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="formcontrol"></div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password"  name="password_confirmation"class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Change profile details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html> 
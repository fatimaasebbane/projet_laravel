@extends('layout')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $user->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $user->email }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $user->password }}</label>
        </div>

    </div>
@endsection

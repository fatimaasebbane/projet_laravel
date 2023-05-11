@extends('layout')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $repa->nom }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $repa->type }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $repa->prix }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">{{ $repa->description }}</label>
        </div>
    </div>
@endsection

@extends('layout')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $contact->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $contact->email }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $contact->phone }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">{{ $contact->message }}</label>
        </div>
    </div>
@endsection

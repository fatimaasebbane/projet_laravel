@extends('layout')
@section('content')
    <base href="/public">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset(" $lunch->image") }}" class="card-img-top" alt="{{ $lunch->image }}" width="250"
                height="300">
            <div class="card-body">
                <h5 class="card-title">{{ $lunch->nom }}</h5>
                <p class="card-text">{{ $lunch->description }}</p>
                <p href="" class="btn btn-primary">{{ $lunch->prix }} $ </p>
            </div>
        </div>
    </div>
    </div>
@endsection

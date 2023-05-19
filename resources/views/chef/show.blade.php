@extends('layout')
@section('content')
    <base href="/public">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ $chef->image }}" class="card-img-top" alt="{{ $chef->image }}" width="300" height="250">
            <div class="card-body">
                <h5 class="card-title">{{ $chef->nom }}</h5>
                <p class="card-text">{{ $chef->bio }}</p>

            </div>
        </div>
    </div>
    </div>
@endsection

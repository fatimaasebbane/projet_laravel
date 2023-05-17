@extends('layout')

@section('content')
    <div class="container">
        @if ($reservations)
            @foreach ($reservations as $item)
                <div class="jumbotron">
                    <h5>le repas:{{ $item->nom }}</h5>
                    <h5>la date:{{ $item->date }}</h5>
                    <h5>le nombre de gens:{{ $item->gens }}</h5>
                </div>
            @endforeach
        @else
            <h2> aucun reservations</h2>
        @endif
    </div>
@endsection

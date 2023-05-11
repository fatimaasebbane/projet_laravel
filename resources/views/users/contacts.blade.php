@extends('layout')

@section('content')
    <div class="container">
        <h4>les messages:</h4>
        @foreach ($contacts as $item)
            <div class="alert alert-warning">
                <h6> message:{{ $item->message }}</h6>

            </div>
        @endforeach

    </div>
@endsection

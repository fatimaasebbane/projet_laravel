@extends('layout')

@section('content')
    <div class="container">
        @if ($contacts)
            <h4>les messages:</h4>
            @foreach ($contacts as $item)
                <div class="alert alert-warning">
                    <h6> message:{{ $item->message }}</h6>
                </div>
            @endforeach
        @else
            <h2>aucun contacts</h2>
        @endif
    </div>
@endsection

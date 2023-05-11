@extends('layout')
@section('content')
    <div class="jumbotron">
        <h1> BIENVENU DANS VOTRE PAGE ADMIN</h1>
        <a class="btn btn-success btn-lg" href="{{ route('clientIndex.index') }}" role="button">revient au page client:</a>
    </div>
@endsection

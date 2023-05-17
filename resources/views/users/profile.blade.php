@extends('layout')
@section('content')
    <div class="container">
        @if ($profile)
            <div class="jumbotron">
                <h5>phone:{{ $profile->phone }}</h5>
                <h5>adresse:{{ $profile->adresse }}</h5>
                <h5>bio:{{ $profile->genre }}</h5>
                <h5>facebook:{{ $profile->facebook }}</h5>
                <h5>instegram:{{ $profile->insta }}</h5>
                <h5>image:
                    <img src="{{ $profile->image }}" />
                </h5>
            </div>
        @else
            <h2>aucun profile</h2>
        @endif
    </div>
@endsection

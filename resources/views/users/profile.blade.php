@extends('layout')
@section('content')
    <div class="container">
        @if ($profile)
            <div class="jumbotron">
                <table class="table">
                    <thead>
                        <tr>
                            <th>phone</th>
                            <th>adresse</th>
                            <th>bio</th>
                            <th>facebook</th>
                            <th>instegram</th>
                            <th>image</th>
                        </tr>
                    </thead>
                    <tr>
                        <tbody>
                            <td>{{ $profile->phone }}</td>
                            <td>{{ $profile->adresse }}</td>
                            <td>{{ $profile->genre }}</td>
                            <td>{{ $profile->facebook }}</td>
                            <td>{{ $profile->insta }}</td>
                            <td><img src="{{ $profile->image }}" width="150" height="200" />
                            </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        @else
            <h2>aucun profile</h2>
        @endif
    </div>
@endsection

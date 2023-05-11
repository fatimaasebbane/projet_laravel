@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p>créer un nouveau image:</p>
            <a class="btn btn-primary btn-lg" href="{{ route('photos.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $item)
                    <tr>
                        <td><img src="{{ $item->photo }}" alt="{{ $item->photo }}" class="img-tumbnail" width="100"
                                height="100"></td>
                        <td>{{ $item->type }}</td>
                        <td><a class="btn btn-success" href="{{ route('photos.edit', $item->id) }}">edit</a>
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('photos.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ route('photos.destroy', $item->id) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection

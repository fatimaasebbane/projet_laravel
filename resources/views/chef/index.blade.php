@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p> </p>
            <a class="btn btn-primary btn-lg" href="{{ route('chef.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">bio</th>
                    <th scope="col">image</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $item)
                    <tr>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->bio }}</td>
                        <td><img src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail" width="100"
                                height="100"></td>

                        <td><a class="btn btn-success" href="{{ route('chef.edit', $item->id) }}">edit</a>
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('chef.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ route('chef.destroy', $item->id) }}" method="post">
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

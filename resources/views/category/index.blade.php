@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p> </p>
            <a class="btn btn-primary btn-lg" href="{{ route('category.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td><a class="btn btn-success" href="{{ route('category.edit', $item->id) }}">edit</a>
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('category.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ route('category.destroy', $item->id) }}" method="post">
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

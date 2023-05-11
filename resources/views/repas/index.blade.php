@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('repas.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col">description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($repas as $item)
                    <tr>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prix }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->description }}</td>

                        <td><a class="btn btn-success" href="{{ route('repas.edit', $item->id) }}">edit</a>
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('repas.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ route('repas.destroy', $item->id) }}" method="post">
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
    {{ $repas->links() }}
@endsection

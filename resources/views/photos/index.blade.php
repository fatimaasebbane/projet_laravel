@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <br><br><br><br>
        <div class="jumbotron">
            <p style="color: black">créer un nouveau image:</p>
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
                        <td><img src="{{ $item->photo }}" alt="{{ $item->photo }}"
                                style="width:100px; height:100px; !important" class="img-tumbnail"></td>
                        <td>{{ $item->type }}</td>
                        <td><a class="btn btn-success" href="{{ route('photos.edit', $item->id) }}">edit</a>
                        </td>

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

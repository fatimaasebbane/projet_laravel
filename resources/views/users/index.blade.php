@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>add a new user:</h1>
            <a class="btn btn-primary btn-lg" href="{{ route('user.create') }}" role="button">create</a>

        </div>
        <table class="table container">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>


                        <td><a class="btn btn-success" href="{{ route('user.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('user.show', $item->id) }}"><i
                                    class="fa-solid fa-eye fa-1x"></i></a>&nbsp;</td>
                        <td>
                            <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        <td> <a class="btn btn-warning" href="{{ route('profile', $item->id) }}" role="button">profile
                            </a>
                        </td>
                        <td> <a class="btn btn-success" href="{{ route('reservations', $item->id) }}" role="button">all
                                reservations</a>
                        </td>
                        <td> <a class="btn btn-success" href="{{ route('contacts', $item->id) }}" role="button">all
                                messages</a>
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

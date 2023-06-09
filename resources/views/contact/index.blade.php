@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">message</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->message }}</td>


                        <td> <a class="btn btn-primary" href="{{ route('contact.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ route('contact.destroy', $item->id) }}" method="post">
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

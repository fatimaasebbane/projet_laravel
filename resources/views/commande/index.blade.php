@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <div class="jumbotron">
            <h1 style="color:black">All Commandes</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">repas</th>
                    <th scope="col">quantite</th>
                    <th scope="col">prix_total</th>
                    <th scope="col">adresse</th>
                    <th scope="col">livraison</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $item)
                    <tr>
                        <td>{{ $item->repas }}</td>
                        <td>{{ $item->quantite }}</td>
                        <td>{{ $item->prix_total }}</td>
                        <td>{{ $item->adresse }}</td>
                        <td>{{ $item->livraison }}</td>

                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('commande.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a></td>
                        <td>
                            <form action="{{ route('commande.destroy', $item->id) }}" method="post">
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

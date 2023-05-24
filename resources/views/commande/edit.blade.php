@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ route('commande.update', $commande->id) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put');
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="form-group">
            <label for="exampleFormControlInput1">repas</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $commande->repas }}"
                name='repas' placeholder="repas">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix_total</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix_total'
                value="{{ $commande->prix_total }}" placeholder="prix_total">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">adresse</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='adresse'
                value="{{ $commande->adresse }}" placeholder="adresse">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">quantite</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='quantite'
                value="{{ $commande->quantite }}" placeholder="quantite">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">livraison</label>
            <select name="livraison" value="{{ $commande->livraison }}">
                <option value="valive">delivred</option>
                <option value="non_valide" selected>no_delivred</option>
            </select>
        </div>

        <button type="submit" value="envoyer">update</button>
    </form>
@endsection

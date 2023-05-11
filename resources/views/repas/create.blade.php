@extends('layout')
@section('content')
    <form action="{{ route('repas.store') }}" class="container" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix' placeholder="prix">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='type' placeholder="type">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection

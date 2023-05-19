@extends('layout')
@section('content')
    <form action="{{ route('chef.store') }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">bio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='bio' placeholder="bio">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection

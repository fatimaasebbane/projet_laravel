@extends('layout')
@section('content')
    <form action="{{ route('photos.store') }}" class="container" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file" class="form-control" name="photo" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='type' placeholder="type">
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection

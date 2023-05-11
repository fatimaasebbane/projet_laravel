@extends('layout')
@section('content')
    <form action="{{ route('category.store') }}" class="container" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">nom de categorie</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="name">
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection

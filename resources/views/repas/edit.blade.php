@extends('layout')
@section('content')
    <form action="{{ route('repas.update', $repa->id) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put');
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $repa->nom }}" name='nom'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix'
                value="{{ $repa->prix }}" placeholder="prix">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='type'
                value="{{ $repa->type }}" placeholder="type">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">[description]</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $repa->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">[image]</label>
            <input value="{{ $repa->image }}" type="file" class="form-control" id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection

@extends('layout')
@section('content')
    <form action="{{ route('photos.update', $photo->id) }}" class="container" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleFormControlTextarea1">[image]</label>
            <input value="{{ $photo->photo }}" type="file" class="form-control" id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $photo->type }}"
                name='type' placeholder="type">
        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection

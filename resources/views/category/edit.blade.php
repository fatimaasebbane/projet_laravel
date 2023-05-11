@extends('layout')
@section('content')
    <form action="{{ route('category.update', $category->id) }}" class="container" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $category->name }}" name='name'
                placeholder="name">
        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection

@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ route('repas.store') }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />

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
            <select name="type" id="">
                <option value="lunch">lunch</option>
                <option value="dinner">dinner</option>
                <option value="breakfast"> breakfast</option>
                <option value="starters">starters</option>
                <option value="drink">drink</option>
                <option value="dessert">dessert</option>
                <option value="main">main</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection

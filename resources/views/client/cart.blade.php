@extends('client.layout')
@section('content')
    <base href="/public">
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-event-03.jpg);">
        <h2 class="tit6 t-center">
            Commande
        </h2>
    </section>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $repas->image }}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="meduiam mb-1">{{ $repas->type }}</div>
                    <h1 class="display-5 fw-bolder">{{ $repas->nom }}</h1>
                    <div class="fs-20 mb-7">
                        <span class="text-decoration-line-through">${{ $repas->prix }} </span>

                    </div>
                    <p class="lead">{{ $repas->description }}</p>
                    <form action="{{ route('add_pannier', $repas->id) }}" method='get'>
                        <div><label for="">Quantité:</label>
                            <input type="number" name="quantite" value="1" style="max-width: 3rem" />
                        </div>
                        <div>
                            <button class="btn btn-success flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            {{ $msg }}
        </div>
    @endif
@endsection

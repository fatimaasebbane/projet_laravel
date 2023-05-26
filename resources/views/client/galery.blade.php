@extends('client.layout')
@section('content')
    <base href="/public">
    @include('client.includes.aside')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Gallery
        </h2>
    </section>



    <!-- Gallery -->
    <div class="section-gallery p-t-118 p-b-100">
        <div
            class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                Tous les Photos
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".food">
                soir
            </button>

            <button class="label-gallery txt26 trans-0-4" data-filter=".events">
                Evenement
            </button>

            <button class="label-gallery txt26 trans-0-4" data-filter=".guests">
                Invités Vip
            </button>
        </div>

        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
            @foreach ($photos as $item)
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $item->type }}">
                    <img src={{ $item->photo }} alt="IMG-GALLERY">

                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                        <a class="btn-show-gallery flex-c-m fa fa-search" href={{ $item->photo }}
                            data-lightbox="gallery"></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
        </div>
    </div>
@endsection

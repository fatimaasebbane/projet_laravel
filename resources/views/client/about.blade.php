@extends('client.layout')
@section('content')
    @include('client.includes.aside')

    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            About Us
        </h2>
    </section>


    <!-- Our Story -->
    <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <span class="tit2 t-center">
            Italian Restaurant
        </span>

        <h3 class="tit3 t-center m-b-35 m-t-5">
            Our Story
        </h3>

        <p class="t-center size32 m-l-r-auto">
            Magnificent Italy attracts travelers eager to explore its stunning landscapes, unique culture and
            its gastronomic delights. With its rich cuisine, this beautiful Mediterranean land offers countless dishes
            famous and traditional must-sees.
            A multitude of delicacies and popular Italian dishes, sweet and savory, await your discovery during
            your stays when you are in Italy at <span style="color:red"> Asebbane restaurant</span>
            . These traditional Italian dishes are
            deeply rooted in
            Italian culture, and recipes are often passed down from generation to generation and are cherished for
            their authentic origins. </p>
    </section>


    <!-- Video -->
    <section class="section-video parallax100" style="background-image: url(clientpage/images/header-menu-01.jpg);">
        <div class="content-video t-center p-t-225 p-b-250">


            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
                data-target="#modal-video-01">

            </div>
        </div>
    </section>


    <!-- Delicious & Romantic-->
    <section class="bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <!-- Delicious -->
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-delicious t-center">
                        <span class="tit2 t-center">
                            Delicious
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            RECIPES
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            The best recipes for you
                            with high quality and special taste, totally organic and very delicious, only from us and
                            especially for you. </p>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/our-story-01.jpg') }} alt="IMG-OUR">
                    </div>
                </div>
            </div>


            <!-- Romantic -->
            <div class="row p-t-170">
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/our-story-02.jpg') }} alt="IMG-OUR">
                    </div>
                </div>

                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-romantic t-center">
                        <span class="tit2 t-center">
                            our
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            place
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Our magnificent place restaurant is a real gastronomic gem. As soon as you walk through your
                            doors, you are transported to a world of exquisite flavors and refined elegance.
                            The atmosphere that reigns in our restaurant is both warm and sophisticated. The carefully
                            chosen decoration creates an atmosphere that is both modern and timeless. Tastefully set tables
                            and dimmed lights add a touch of romance to the whole thing, making it the perfect spot for a
                            night out or special celebration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="parallax0 parallax100" style="background-image: url(clientpage/images/bg-cover-video-02.jpg);">
        <div class="overlay0-parallax t-center size33"></div>
    </div>


    <!-- Chef -->
    <section class="section-chef bgwhite p-t-115 p-b-95">
        <div class="container t-center">
            <span class="tit2 t-center">
                Meet Our
            </span>

            <h3 class="tit5 t-center m-b-50 m-t-5">
                Chef
            </h3>

            <div class="row">
                @foreach ($chefs as $chef)
                    <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                        <!-- -Block5 -->
                        <div class="blo5 pos-relative p-t-60">
                            <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                                <img src={{ $chef->image }} alt="{{ $chef->image }}">
                            </div>

                            <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                                <div class="txt34 dis-block p-b-6">
                                    {{ $chef->nom }}
                                </div>

                                <span class="dis-block t-center txt35 p-b-25">
                                    Chef
                                </span>

                                <p class="t-center">
                                    {{ $chef->bio }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Sign up -->
    <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
            <span class="txt5 m-10">
                Specials Sign up
            </span>

            <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address"
                    placeholder="Email Adrress">
                <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
            </div>

            <!-- Button3 -->
            <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
                Sign-up
            </button>
        </form>
    </div>
@endsection

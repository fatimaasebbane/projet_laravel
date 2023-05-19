@extends('client.layout')
@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Reservation
        </h2>
    </section>
    <!-- Reservation -->
    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-b-30">
                    <div class="t-center">
                        <span class="tit2 t-center">
                            Reservation
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            Book table
                        </h3>
                    </div>
                    @if ($msg = Session::get('msg'))
                        <div class="alert alert-secondary d-flex align-items-center" role="alert">
                            <div>
                                <h4>Welcome in Asebbane Restaurant</h4>
                                <p>
                                    {{ $msg }}
                                </p>
                            </div>

                        </div>
                    @endif
                    <form action="{{ route('createReservation') }}" class="wrap-form-reservation size22 m-l-r-auto"
                        method="patch">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Date -->
                                <span class="txt9">
                                    Date
                                </span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"
                                        name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Time -->
                                <span class="txt9">
                                    Time
                                </span>

                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="heure">
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- People -->
                                <span class="txt9">
                                    People
                                </span>

                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="gens">
                                        <option>1 person</option>
                                        <option>2 people</option>
                                        <option>3 people</option>
                                        <option>4 people</option>
                                        <option>5 people</option>
                                        <option>6 people</option>
                                        <option>7 people</option>
                                        <option>8 people</option>
                                        <option>9 people</option>
                                        <option>10 people</option>
                                        <option>11 people</option>
                                        <option>12 people</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Name -->
                                <span class="txt9">
                                    Name
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom"
                                        placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Phone -->
                                <span class="txt9">
                                    Phone
                                </span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"
                                        placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Email -->
                                <span class="txt9">
                                    Email
                                </span>

                                <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"
                                        placeholder="Email">
                                </div>
                            </div>

                        </div>

                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Book Table
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="info-reservation flex-w p-t-80">
                <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                    <h4 class="txt5 m-b-18">
                        Reserve by Phone
                    </h4>

                    <p class="size25">
                        Call us
                        Call <span class="txt24"> 06 36 69 30 87</span> 7/7days a week and from 8 a.m. to 8 p.m. (free
                        service + price of a call).
                        If you wish to call from abroad, dial <span class="txt24">(001) 345 6889</span> (cost of an
                        international call).

                    </p>
                </div>

                <div class="size24 w-full-md p-t-40">
                    <h4 class="txt5 m-b-18">
                        For Event Booking
                    </h4>

                    <p class="size26">
                        call us:
                        <span class="txt24">(001) 345 6889</span>

                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection

@extends('layout')
@section('content')
    @if ($profile)
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-img">
                            <img src="{{ asset(" $profile->image") }}" alt="{{ $profile->image }}" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ $profile->user->name }}
                            </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">réseaux sociaux</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>bio</p>
                            <span>{{ $profile->bio }}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->id }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->user->name }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->user->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> {{ $profile->phone }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>genre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> {{ $profile->genre }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>facebook</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->facebook }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label> instegram</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->insta }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br />
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="container">
            <div class="jumbotron">
                <p>creer votre profile</p>
                <a class="btn btn-primary btn-lg" href="{{ route('profile.create') }}" role="button">create</a>
            </div>
        </div>
    @endif
@endsection

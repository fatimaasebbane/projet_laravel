@extends('layout')
@section('content')

    <body>

        <!-- Main Body -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-12 pb-4">
                        <h1>Comments</h1>
                        @foreach ($comments as $comment)
                            <div class="comment mt-4 text-justify float-left">
                                <h4 style="color:rgb(207, 34, 40)">{{ $comment->name }}</h4>
                                <span>- {{ $comment->created_at }}</span>
                                <br>
                                <p style="color:black">{{ $comment->commantaire }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                        <form action="{{ route('comment.store') }}" class="container" id="algin-form" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h4 style="color:rgb(198, 41, 49)">ajouter un commantaire</h4>
                                <label for="message" style="color: black">Message</label>
                                <textarea name="commantaire" cols="30" rows="5" class="form-control"
                                    style="background-color: rgb(228, 212, 212);"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" style="color:black">Name</label>
                                <input type="text" name="name" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"style="color:black">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="id_blog" value="{{ $comment->id_blog }}" hidden />

                            </div>

                            <div class="form-group">
                                <button type="submit" id="post" class="btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection

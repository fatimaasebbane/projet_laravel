@extends('layout')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <p>créer un blog:</p>
            <a class="btn btn-primary btn-lg" href="{{ route('blog.create') }}" role="button">create</a>
        </div>
        @foreach ($blogs as $blog)
            <div class="row">
                <div class="col-5-md">
                    <a href="{{ route('comment.show', $blog->id) }}">
                        <img src={{ $blog->image }} alt="IMG-BLOG" width="400" height="300">
                    </a>

                    <div class="date-blo4 flex-col-c-m">
                        <span class="txt30 m-b-4">
                            {{ $blog->created_at }}
                        </span>
                    </div>
                    <div>
                        <h4>
                            <a href="" class="tit9">{{ $blog->titre }}</a>
                        </h4>

                        <div class="txt32 flex-w p-b-24">
                            <span>
                                by {{ $blog->user->name }}
                                <span class="m-r-6 m-l-4">|</span>
                            </span>

                            <span>
                                {{ $blog->created_at }}
                                <span class="m-r-6 m-l-4">|</span>
                            </span>

                            <span>
                                {{ $blog->category->name }}
                                <span class="m-r-6 m-l-4">|</span>
                            </span>

                            <span>
                                8 Comments
                            </span>
                        </div>

                        <p>{{ $blog->description }} </p>
                    </div>
                </div>

                @if ($blog->id_user == Auth::id())
                    <div class="col-5-md">

                        <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                            <a class="btn btn-success" href="{{ route('blog.edit', $blog->id) }}">edit</a>

                            <button type="submit" class="btn btn-danger">delete</button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                @endif
            </div>
            <br>
            <br>
            <br>
        @endforeach
    </div>
@endsection

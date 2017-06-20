@extends('backend.layout.app')

@section('page title', 'Posts')

@section('content')

    <div>
        <h1>Posts</h1>
    </div>
    <div class="row">
        <div class="col-sm-8">

            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div>

        <div class="col-sm-4">
            <button class="btn btn-lg btn-primary">New Post</button>
        </div>
    </div>

    <hr>


    <div class="container">
        <ul class="media-list">

            @foreach($posts as $post)

                <li class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-thumbnail" width="250" src="/images/blog-1.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$post->title}}</h4>
                        <p>{{substr($post->body,0,350)}} ...</p>

                        <div>
                            <button type="button" class="btn btn-default">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>

                </li>

            @endforeach

        </ul>
    </div>


@endsection
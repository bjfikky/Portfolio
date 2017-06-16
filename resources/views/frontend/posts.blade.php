@extends('frontend.layouts.app')

@section('page title', 'Blog')

@include('frontend.includes.menu')

@section('content')
<!--Cover Image-->
<section class="page-cover">
    <div class="container">
        <div class="center-title">
            <h1>ALL POSTS</h1>
        </div>
    </div>
</section>


<!-- PAGE CONTENT -->
<section class="page">
    <div class="container">
        <div class="row">
            <div class="page-content col-md-12">

                @foreach($posts as $post)

                <div class="col-md-4">
                    <div class="blog-box grid-blog">
                        <img src="images/blog-2.jpg" alt="">
                        <div class="col-md-12 blog-info">
                            <span class="data">Jeff D. Stutler - 16 September 2016</span>
                            <a href="/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
                            <p>{{substr($post->body,0,350)}} ...</p>
                            <a href="/posts/{{$post->id}}" class="blog-link"> READ MORE</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>
</section>

@include('frontend.includes.contact')

@endsection
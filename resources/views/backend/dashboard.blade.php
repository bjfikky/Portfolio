@extends('backend.layout.app')

@section('page title', 'Overview')

@section('content')
    <div id="overview">
        <div>
            <h1>Overview</h1>
            <p class="lead">A brief snapshot of your website and messages.<br>
                Use this page to take quick actions.</p>
        </div>



        <div class="container">
            <h4>Recent Posts</h4>
            <hr>
            <div class="col-sm-9">
                <ul class="list-group">

                    @foreach($recentPosts as $post)

                        <a href="" class="list-group-item">{{$post->title}}</a>

                        @endforeach

                </ul>
            </div>

            <div class="col-sm-3">
                <div class="btn-group-vertical" role="group" aria-label="">
                    <button type="button" class="btn btn-success">New Post</button>
                    <button type="button" class="btn btn-default">All Posts</button>
                </div>
            </div>
        </div>

        <div class="container">
            <h4>Popular Categories</h4>
            <hr>
            <div class="col-sm-9">
                <ul class="list-group">
                    <a href="" class="list-group-item">Despacito</a>
                    <a href="" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="" class="list-group-item">Morbi leo risus</a>
                    <a href="" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="" class="list-group-item">Vestibulum at eros</a>
                </ul>
            </div>

            <div class="col-sm-3">
                <div class="btn-group-vertical" role="group" aria-label="">
                    <button type="button" class="btn btn-success">New Category</button>
                    <button type="button" class="btn btn-default">All Categories</button>
                </div>
            </div>
        </div>

        <div class="container">
            <h4>Messages</h4>
            <hr>
            <div class="col-sm-6">
                <ul class="list-group">

                        <a href="" class="list-group-item">
                            <span class="badge">14</span>
                            <strong>Unread</strong>
                        </a>


                    <a href="" class="list-group-item">
                        <span class="badge">60</span>
                        Read
                    </a>

                    <a href="" class="list-group-item">
                        <span class="badge">4</span>
                        Sent
                    </a>

                    <a href="" class="list-group-item">
                        <span class="badge">5</span>
                        Trashed
                    </a>
                </ul>
            </div>

            <div class="col-sm-3">
                <button type="button" class="btn btn-default">New Message</button>
            </div>

        </div>

        <div class="container">
            <h4>Recent Comments</h4>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi est et eveniet expedita id nesciunt
                quidem rerum sit tempore. Aliquam beatae delectus ducimus ea ex natus perferendis provident rerum sit?</p>
        </div>
    </div>
@endsection
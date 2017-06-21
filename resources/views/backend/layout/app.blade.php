
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Dashboard - @yield('page title')</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

@include('backend.includes.nav')

<div class="container">

    @if(Auth::check())
    <div class="menu">

        {{-- The "if statement" makes sure the proper tabs are highlighted even when query strings are present in the URL--}}
        <ul class="nav nav-tabs">
            <li role="presentation" @if($_SERVER['REQUEST_URI'] == '/dashboard' || $_SERVER['REQUEST_URI'] == '/dashboard?'.$_SERVER['QUERY_STRING']) class="active" @endif ><a href="/dashboard">Overview</a></li>
            <li role="presentation" @if($_SERVER['REQUEST_URI'] == '/dashboard/posts' || $_SERVER['REQUEST_URI'] == '/dashboard/posts?'.$_SERVER['QUERY_STRING']) class="active" @endif><a href="/dashboard/posts">Posts</a></li>
            <li role="presentation" @if($_SERVER['REQUEST_URI'] == '/dashboard/categories' || $_SERVER['REQUEST_URI'] == '/dashboard/categories?'.$_SERVER['QUERY_STRING']) class="active" @endif><a href="/dashboard/categories">Categories</a></li>
            <li role="presentation" @if($_SERVER['REQUEST_URI'] == '/dashboard/messages' || $_SERVER['REQUEST_URI'] == '/dashboard/messages?'.$_SERVER['QUERY_STRING']) class="active" @endif><a href="/dashboard/messages">Messages</a></li>
        </ul>

    </div>
    @endif

    @yield('content')

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</body>
</html>

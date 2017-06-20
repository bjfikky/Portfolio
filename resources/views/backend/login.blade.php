@extends('backend.layout.app')

@section('content')

    <form method="POST" action="/dashboard/login">
        {{csrf_field()}}

        <div class="form-group">
            <label for="email">Email Address</label>
            <input class="form-control" type="text" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit">
        </div>

    </form>

@endsection
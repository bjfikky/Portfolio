@extends('backend.layout.app')

@section('page title', 'Login')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">

                            @foreach ($errors->all() as $error)
                                <h5>{{ $error }}</h5>
                            @endforeach

                    </div>
                @endif

                <form method="POST" action="/dashboard/login">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit">
                    </div>

                </form>
            </div>
        </div>
    </div>





@endsection
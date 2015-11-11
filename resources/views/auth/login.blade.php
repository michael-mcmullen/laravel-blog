@extends('layout.auth')

@section('content')

@if (count($errors) > 0)
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="{{ URL::route('auth.login') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    Email
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    Password
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>

@stop
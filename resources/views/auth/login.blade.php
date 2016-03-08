
@extends('app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('res/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('res/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('res/css/styles.css') }}">

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-fixed-top" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href=""><img src = "{{ URL::asset('images/logo/BBZlogo/bbzlogo_white.svg') }}" width = "40" height = "40" style="margin-top:5px;"></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password"><br>
                                <span class="checkbox" style = "display:inline-block;margin: 0 10px 0 0">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </span>
                                <span><a class="btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a></span>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style = "display:inline-block;margin: 0 10px 0 0" type="submit" class="btn btn-primary">Login</button>
                                <a class=" btn-link" style = "font-weight:bold;" href="{{ url('auth/register') }}">Not Registered</a>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
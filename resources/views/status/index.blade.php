@extends('app')

@section('content')



        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col-xs-2 col-md-1"></div>
    <div class="col-xs-8 col-md-10">
        <div class="jumbotron" id="home-jumbotron">
            <!--<img src="/images/logo.jpg" alt="jf">

            -->
            {!! Form::open(['action' => 'StatusController@store']) !!}

                <div class="form-group">
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                        {!! Form::submit('Post Status', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="jumbotron" id="home-jumbotron">
            @foreach ($statuses as $status)
                <p>{{ $status->user->name }} {{ $status->created_at->diffForHumans() }}</p>
                <p>{{ $status->body }}</p>
            @endforeach
        </div>
    </div>
    <div class="col-xs-2 col-md-1"></div>
</div>
@include('errors.list')


@stop
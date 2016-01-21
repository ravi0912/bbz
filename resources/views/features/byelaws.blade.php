@extends('app')

@section('content')
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">
    <center class="row">
        <div class="col-lg-7 text-center blog_wrap">
            <table class="table table-bordered">
                <tr>
                    <td><b>City</b></td>
                    <td><b><a href="">Document Description</a></b></td>
                    <td><b>Issuing Authority</b></td>
                </tr>

                @foreach($bylaws as $bylaw)
                    <tr>
                        <td>{{ $bylaw->city }}</td>
                        <td><a href="{{ $bylaw->link }}" target="_blank">{{ $bylaw->description }}</a></td>
                        <td>{{ $bylaw->issuing_authority }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </center>
    <script type="text/javascript" src="res/js/jquery.min.js"></script>
    <script type="text/javascript" src="res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="res/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="res/js/scrolling-nav.js"></script>
@stop

@extends('app')

@section('content')

    <style>
        .tender_outer_wrapper {
            position:relative;
            margin-top:80px;
            text-align:left;
            height:150px;
            background-color: #d6e9f7;
            width:780px;
            right:100px;
        }
        .tender_title {
            position: absolute;
            border:1px solid black;
            width:100px;
            height:30px;
            top:20px
        }
        .tender_location {
            position: absolute;
            border:1px solid black;
            width:100px;
            height:30px;
            top:60px;
        }
        .tender_open_date {
            position: absolute;
            border:1px solid black;
            width:100px;
            height:30px;
            top: 100px;
        }

    </style>

    {{--<div class="container">
        <div class="jumbotron tender_outer_wrapper">
            --}}{{--<div class="tender_inner_wrapper">
                <div class="tender_title">ddf</div>
                <div class="tender_location">fg</div>
                <div class="tender_open_date">hy</div>
            </div>--}}{{--
        </div>
    </div>--}}

    <link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">
    <center class="row">
            <div class="col-lg-7 text-center blog_wrap">
                <table class="table table-bordered">
                    <tr>
                        <th>Location</th>
                        <th>Title</th>
                        <th>Opening Date</th>
                        <th>Closing Date</th>
                        {{--<th>Heading 5</th>--}}
                    </tr>
                    @foreach($tenders as $tender)
                        <tr>
                            <td>{{ $tender->city }}| {{ $tender->state }}</td>
                            <td><a href="{{ $tender->link }}" target="_blank">{{ $tender->title }}</a></td>
                            <td>{{ $tender->open_date }}</td>
                            <td>{{ $tender->close_date }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
    </center>

@stop
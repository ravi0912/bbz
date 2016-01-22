
@extends('app')

@section('content')
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
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
    <script type="text/javascript" src="res/js/jquery.min.js"></script>
    <script type="text/javascript" src="res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="res/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="res/js/scrolling-nav.js"></script>
@stop
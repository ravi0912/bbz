@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">
        </br></br>
        @if($searchs)
            @foreach($searchs as $u)
            <div id = "right_connection" class = "right_connection">
                <div id = "right_connection_content" class = "right_connection_content">
                    <div id = "right_ul_content_imae" class = "right_ul_content_imae">
                        <img src = "{{ URL::asset('uploads/thumbnails/'.$u->id.'.jpeg') }}" >
                    </div>
                    <a href="{{ url('/showprofile/'. $u->id)  }}" >
                        <div id = "right_connection_content_2" class = "right_connection_content_2">
                            {{ $u->name }}
                        </div>
                    </a>
                </div>

            </div>
            @endforeach

        @else
                <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content"> No results Found!</div>
        @endif
    </div>

{{--@include('partials.notification')--}}

@stop
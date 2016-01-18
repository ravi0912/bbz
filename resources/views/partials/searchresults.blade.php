@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">
        </br></br>
        @if($searchResults > 0)
            @foreach($searchs as $u)
            <div id = "newsfeed_content" class = "newsfeed_content">
                <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                    <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content"><img src = "{{ URL::asset('uploads/thumbnails/'.$u->id.'.jpeg') }}" ></div>
                    <a href="{{ url('/showprofile/'. $u->id)  }}" >
                        <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content"> {{ $u->name }}</div>
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
@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">
        </br></br>
        @foreach($user_id_1_connections as $user_id_1_connection)
                <div id = "newsfeed_content" class = "newsfeed_content">
                    <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                        <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content">
                            <img src = "{{ URL::asset('uploads/thumbnails/'.$user_id_1_connection->user_id_2.'.jpeg') }}" >
                        </div>
                        <a href="{{url('/showprofile/'.$user_id_1_connection->user_id_2 )}}">
                            <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                                {{ $user_id_1_connection->user2 ? $user_id_1_connection->user2->name : '' }}

                            </div>
                        </a>
                        {{ $user_id_1_connection->user2 ? $user_id_1_connection->user2->designation : '' }}
                    </div>

                </div>
            @endforeach
        @foreach($user_id_2_connections as $user_id_2_connection)
            <div id = "newsfeed_content" class = "newsfeed_content">
                <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                    <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content">
                        <img src = "{{ URL::asset('uploads/thumbnails/'.$user_id_2_connection->user_id_1.'.jpeg') }}" >
                    </div>
                    <a href="{{url('/showprofile/'.$user_id_2_connection->user_id_1 )}}">
                        <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                            {{ $user_id_2_connection->user1 ? $user_id_2_connection->user1->name : '' }}
                        </div>
                    </a>
                    {{ $user_id_2_connection->user1 ? $user_id_2_connection->user1->designation : '' }}
                </div>

            </div>
        @endforeach
    </div>

    {{--@include('partials.notification')--}}

@stop
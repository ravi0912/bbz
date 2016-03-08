@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">
        </br></br>
        @foreach($user_id_1_connections as $user_id_1_connection)
                <div  id = "right_connection" class = "right_connection">
                    <div id = "right_connection_content" class = "right_connection_content">
                        <div id = "right_ul_content_imae" class = "right_ul_content_imae">
                            <img src = "{{ URL::asset('uploads/thumbnails/'.$user_id_1_connection->user_id_2.'.jpeg') }}" >
                        </div>
                        <a href="{{url('/showprofile/'.$user_id_1_connection->user_id_2 )}}">
                            <div id = "right_connection_content_2" class = "right_connection_content_2">
                                {{ $user_id_1_connection->user2 ? $user_id_1_connection->user2->name : '' }}

                            </div>
                        </a>
                        {{ $user_id_1_connection->user2 ? $user_id_1_connection->user2->designation : '' }}
                    </div>

                </div>
            @endforeach
        @foreach($user_id_2_connections as $user_id_2_connection)
            <div  id = "right_connection" class = "right_connection">
                <div id = "right_connection_content" class = "right_connection_content">
                    <div id = "right_ul_content_imae" class = "right_ul_content_imae">
                        <img src = "{{ URL::asset('uploads/thumbnails/'.$user_id_2_connection->user_id_1.'.jpeg') }}" >
                    </div>
                    <a href="{{url('/showprofile/'.$user_id_2_connection->user_id_1 )}}">
                        <div id = "right_connection_content_2" class = "right_connection_content_2">
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

@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">

        <div class="newsfeed_form" id="newsfeed_form">
            <!--<img src="/images/logo.jpg" alt="jf">

            -->
            {!! Form::open(['action' => 'StatusController@store']) !!}
            <div class="newsfeed_header">
                {{--Hi {{ auth()->user()->name }}, Want to share something!!!--}}
            </div>
            <div class="">
                {!! Form::textarea('body', null, ['class' => 'newsfeed_textarea','rows' => '3','placeholder' => 'Hi Ravi, Want to share something!!! ']) !!}
            </div>
            <div class="">
                {!! Form::submit('Post Status', ['class' => 'newsfeed_poststatus general_button']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        @foreach ($statuses as $status)
            <div id = "newsfeed_content" class = "newsfeed_content">
                <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                    <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content"><a href = ""><img src = "uploads/thumbnails/{{ $status->user_id}}.jpeg"></a></div>
                    <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                        {{ $status->user->name }}
                        <div id = "newsfeed_content_1_time" class = "newsfeed_content_1_content">{{ $status->created_at->diffForHumans() }}</div>
                    </div>

                        <div class = "newsfeed_content_1_more">
                            <div id = "newsfeed_content_1_more" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="#">Edit</a></li>
                                </ul>
                            </div>
                        </div>

                </div>
                <div id = "newsfeed_content_2" class = "newsfeed_content_2">
                    {{ $status->body }}
                </div>
                <div id = "newsfeed_content_3" class = "newsfeed_content_3">
                    <span id="like_show_click_{{ $status->id }}">
                        @if($liked[$status->id])
                            <?php $l = $likes[$status->id] - 1?>
                            @if($l == 0)
                                you liked
                            @else
                                you & {{ $l }} liked
                            @endif
                        @else
                            @if($likes[$status->id] == 0)
                            @else
                                {{ $likes[$status->id] }} liked
                            @endif
                        @endif
                    </span>
                    <span id="like_click_{{ $status->id }}" onmouseup="LikeMouseUp(event,{{ $status->id }})">
                        like
                    </span>
                    <span id="comment_show_click_{{ $status->id }}" onmouseup="CommentMouseUp(event,{{ $status->id }})">
                        comment
                    </span>
                    <span id="share">
                       share
                   </span>
                </div>
                <div id = "newsfeed_content_4" class = "newsfeed_content_4">
                    {{--display likes--}}
                </div>
                <div id = "newsfeed_content_5" class = "newsfeed_content_5">
                    {{--display comments--}}
                    <div class="" id="comments_show_{{ $status->id }}"></div>
                    <div>
                        <input type="text" id="comment_body_{{ $status->id }}" onkeyup="keyUp(event,{{ $status->id }})" placeholder="Write Comment">
                    </div>
                </div>

            </div>
        @endforeach
@include('partials.notification')
        <script type="text/javascript" src ="{{ URL::asset('js/status_comment.js') }} "></script>
@stop
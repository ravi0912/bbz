
@extends('app')

@section('content')

@foreach ($statuses as $status)
    <div id = "newsfeed_content" class = "newsfeed_content">
        <div id = "newsfeed_content_1" class = "newsfeed_content_1">
            <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content"><a href = ""><img src = "{{ URL::asset('uploads/thumbnails/'.$status->user_id.'.jpeg') }}"></a></div>
            <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                {{ $status->user->name }}
                <div id = "newsfeed_content_1_time" class = "newsfeed_content_1_content">{{ $status->created_at->diffForHumans() }}</div>
            </div>
            @if(auth()->user()->id == $status->user_id)
                <div class = "newsfeed_content_1_more">
                    <div id = "newsfeed_content_1_more" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Delete</a></li>
                            <li><a href="#">Edit</a></li>
                        </ul>
                    </div>
                </div>
            @endif

        </div>
        <div id = "newsfeed_content_2" class = "newsfeed_content_2">
            {{ $status->body }}
        </div>
        <div id = "newsfeed_content_3" class = "newsfeed_content_3">
                    <span id="like_show_click_{{ $status->id }}">
                        @if($liked)
                            <?php $l = $likes - 1?>
                            @if($l == 0)
                                you liked
                            @else
                                you & {{ $l }} liked
                            @endif
                        @else
                            @if($likes == 0)
                            @else
                                {{ $likes }} liked
                            @endif
                        @endif
                    </span>
                    <span id="like_click_{{ $status->id }}" onmouseup="LikeMouseUp(event,{{ $status->id }},{{ $status->user_id }},{{ auth()->user()->id }})">
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
                <input type="text" id="comment_body_{{ $status->id }}" onkeyup="comment_execute_keyUp(event,{{ $status->id }},{{$status->user_id}},{{ auth()->user()->id }})" placeholder="Write Comment">
            </div>
        </div>

    </div>
@endforeach
<script type="text/javascript" src ="{{ URL::asset('js/status_comment.js') }} "></script>
@stop

@extends('app')

@section('content')
    <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">

        <div class="newsfeed_form" id="newsfeed_form">
            <!--<img src="/images/logo.jpg" alt="jf">

            -->
            {!! Form::open(['action' => 'StatusController@store']) !!}
            {{--<div class="newsfeed_header">--}}
                {{--Hi {{ auth()->user()->name }}, Want to share something!!!--}}
            {{--</div>--}}
            <div class="newsfeed_form_1" id="newsfeed_form_1">
                <span>
                    <img src = "{{ URL::asset('uploads/thumbnails/'.auth()->user()->id.'.jpeg') }}" >
                </span>
                <span>
                    {!! Form::textarea('body', null, ['class' => 'newsfeed_textarea','rows' => '3','cols' => '45','placeholder' => 'Hi '. auth()->user()->name.', Want to share something!!! ']) !!}
                </span>
            </div>
            <div class="newsfeed_form_post" id="newsfeed_form_post">
                {!! Form::submit('Post', ['class' => 'newsfeed_poststatus general_button']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        @foreach ($statuses as $status)
            <div id = "newsfeed_content" class = "newsfeed_content">
                <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                    <a href="{{url('/showprofile/'.$status->user_id)}}">
                        <div id = "newsfeed_content_1_image" class = "newsfeed_content_1_content image"><div id = "newsfeed_content_1_image_content " class = "newsfeed_content_1_image_content image_content"><img src = "{{ URL::asset('uploads/thumbnails/'.$status->user_id.'.jpeg') }}"></div></div>
                    <div id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                        {{ $status->user->name }}

                        <div id = "newsfeed_content_1_time" class = "newsfeed_content_1_content">{{ $status->created_at->diffForHumans() }}</div>
                    </div>
                    </a>
                    @if(auth()->user()->id == $status->user_id)
                        <div class = "newsfeed_content_1_more">
                            <div id = "newsfeed_content_1_more" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    {!! Form::open(['action' => 'StatusController@destroy']) !!}
                                        <div class="form-group">
                                            <input type="hidden"  value="{{ $status->id }}" name = "status_id">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-info" id="status_delete" type="submit">Delete</button>
                                        </div>
                                    {!! Form::close() !!}
                                    {{--<button class="btn btn-info" id="status_delete" type="submit">Edit</button>--}}
                                </ul>
                            </div>
                        </div>
                    @endif

                </div>
                <div id = "newsfeed_content_2" class = "newsfeed_content_2">
                    {{ $status->body }}
                </div>
                <div id = "newsfeed_content_4" class = "newsfeed_content_4">
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
                </div>
                <div id = "newsfeed_content_3" class = "newsfeed_content_3">

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

                <div id = "newsfeed_content_5" class = "newsfeed_content_5">
                    {{--display comments--}}
                    <div class="newsfeed_content_5_content" id="comments_show_{{ $status->id }}"></div>
                    {{--<div id = "newsfeed_comment" class = "newsfeed_content_5_input">--}}
                    {{--</div>--}}
                    <div class="newsfeed_comment_content">
                        <div class="newsfeed_comment_content_image"><img src = "{{ URL::asset('uploads/thumbnails/'.auth()->user()->id.'.jpeg') }}"></div>
                        <div class="newsfeed_comment_content_text">
                            <span class="newsfeed_comment_content_name">
                               <input type="text" id="comment_body_{{ $status->id }}" onkeyup="comment_execute_keyUp(event,{{ $status->id }},{{$status->user_id}},{{ auth()->user()->id }})" placeholder="Write Comment">
                            </span>
                        </div>


                    </div>
                </div>

            </div>
        @endforeach
        <script type="text/javascript" src ="{{ URL::asset('js/status_comment.js') }} "></script>
@stop
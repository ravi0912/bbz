
@extends('app')

@section('content')
    <div class="main_news_wrapper_outer">
        <div id = "newsfeed main_body_content" class = "newsfeed main_body_content">

            <div class="newsfeed_form" id="newsfeed_form">

                {!! Form::open(['action' => 'StatusController@store','files'=>true]) !!}
                <div class="newsfeed_form_1" id="newsfeed_form_1">
                    <div class="newsfeed_form_1_image" id="newsfeed_form_1_image">
                        <img src = "{{ URL::asset('uploads/thumbnails/'.auth()->user()->id.'.jpeg') }}" >
                    </div>
                    <div>
                        {!! Form::textarea('body', '', ['class' => 'newsfeed_textarea','rows' => '3','cols' => '45','placeholder' => 'Hi '. auth()->user()->name.', Want to share something!!! ']) !!}
                    </div>
                </div>
                {{--{!! Form::file('images[]', ['multiple'=>true,'style' =>'display:block']) !!}--}}
                <div class="newsfeed_form_post" id="newsfeed_form_post">
                    {!! Form::submit('Post', ['class' => 'general_button newsfeed_poststatus ']) !!}
                </div>
                {!! Form::close() !!}
                @include('errors.list')
            </div>
            @foreach ($statuses as $status)
            <div id="newsfeed_content_status_outer_wrapper">
                <div id = "newsfeed_content_1_image" class = "">
                    <div id = "newsfeed_content_1_image_content " class = "newsfeed_content_1_image_content ">
                        <a href="{{url('/showprofile/'.$status->user_id)}}">
                            <img src = "{{ URL::asset('uploads/profiles/'.$status->user_id.'.jpeg') }}">
                        </a>
                    </div>
                </div>

                <div id = "newsfeed_content" class = "newsfeed_content">

                    <div id = "newsfeed_content_1" class = "newsfeed_content_1">
                        <a href="{{url('/showprofile/'.$status->user_id)}}">
                        <span id = "newsfeed_content_1_description" class = "newsfeed_content_1_content">
                            <div id = "newsfeed_content_1_name" class = "newsfeed_content_1_name"> {{ $status->user->name }}</div>
                            <div id = "newsfeed_content_1_desig" class = "newsfeed_content_1_desig"> {{ $status->user->designation }}</div>
                        </span>
                        </a>
                        @if(auth()->user()->id == $status->user_id)
                            <div class = "newsfeed_content_1_more">
                                <div id = "newsfeed_content_1_more" class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu" id="dropdown_status">
                                        {!! Form::open(['action' => 'StatusController@destroy']) !!}
                                        <div class="form-group">
                                            <input type="hidden"  value="{{ $status->id }}" name = "status_id">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-info" id="status_delete_1" type="submit">Delete</button>
                                        </div>
                                        {!! Form::close() !!}
                                        {{--<button class="btn btn-info" id="status_delete" type="submit">Edit</button>--}}
                                    </ul>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div id = "newsfeed_content_2" class = "newsfeed_content_2">
                        <div id = "newsfeed_content_1_time" class = "newsfeed_content_1_content">{{ $status->created_at->diffForHumans() }}</div>

                        <div id = "newsfeed_content_2_text" class = "newsfeed_content_2_text">
                            <!--url setup-->
                            <?php
                            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                            $text = $status->body;
                            $text = str_replace( "www.", "http://www.", $text );
                            $text = str_replace( "http://http://www.", "http://www.", $text );
                            $text = str_replace( "https://http://www.", "https://www.", $text );
                            preg_match_all($reg_exUrl, $text, $matches);
                            $usedPatterns = array();
                            foreach($matches[0] as $pattern){
                                if(!array_key_exists($pattern, $usedPatterns)){
                                    $usedPatterns[$pattern]=true;
                                    $text = str_replace  ($pattern, '<a href="'.$pattern.'" rel="nofollow" target="_blank">'.$pattern.'</a> ', $text);
                                }
                            }
                            echo $text;
                            ?>

                            {{--preview--}}

                            @if(!empty($linkpreviewexist[$status->id]))

                                <br><hr style="border-bottom:1px solid #3C97D3">

                                <div class="preview_wrapper;width:620px;height:250px">
                                    <table style="width:610px;height:126px">
                                        <tr>
                                            <td style="width:170px;text-align:center;">
                                                <img src="{{ $linkpreviewimage[$status->id] }}" alt="" height="120" width="150" class="img-thumbnail" style="margin-bottom:25px"/>
                                            </td>
                                            <td style="width:520px">
                                                <table style="height:126px">
                                                    <tr>
                                                        <td style="width:520px;height:50px;padding-left:5px;border-bottom:1px solid #3C97D3">{{ $linkpreviewtitle[$status->id] }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:520px;height:76px;padding-left:5px;padding-bottom:18px;font-size:13px">{{ $linkpreviewdescription[$status->id] }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </div>

                            @endif

                            {{--preview end--}}


                        </div>
                    </div>
                    {{--<div id = "newsfeed_content_4" class = "newsfeed_content_4">--}}

        <div>




        </div>
    </div>
               {{--<div id = "newsfeed_content_4" class = "newsfeed_content_4">--}}
                <div id = "newsfeed_content_3" class = "newsfeed_content_3">
                    <div id="like_show_click_{{ $status->id }}" class = "newsfeed_content_3_lcs">
                        @if($liked[$status->id])
                                <div id="like_click_{{ $status->id }}" onmouseup="LikeMouseUp(event,{{ $status->id }},{{ $status->user_id }},{{ auth()->user()->id }})">
                                    <div>{{ $likes[$status->id] }} </div>
                                    <div><img id="like_img_{{ $status->id }}" src = "{{ URL::asset('images/logo/lcs/liked.svg') }}"></div>
                                </div>
                            @else

                                <div id="like_click_{{ $status->id }}" onmouseup="LikeMouseUp(event,{{ $status->id }},{{ $status->user_id }},{{ auth()->user()->id }})">
                                    @if($likes[$status->id] == 0)
                                    @else
                                        <div>{{ $likes[$status->id] }} </div>
                                    @endif
                                    <div><img id="like_img_{{ $status->id }}" src = "{{ URL::asset('images/logo/lcs/like.svg') }}"></div>
                                </div>

                            @endif
                        </div>

                        <div id="comment_show_click_{{ $status->id }}" class = "newsfeed_content_3_lcs" onmouseup="CommentMouseUp(event,{{ $status->id }})">
                            @if($countComment[$status->id] == 0)
                            @else
                                <div>{{ $countComment[$status->id] }} </div>
                            @endif
                            <img id="comment_img_{{ $status->id }}" src = "{{ URL::asset('images/logo/lcs/comment.svg') }}">
                        </div>
                        {{--<div id="share" class = "newsfeed_content_3_lcs">
                           <img src = "{{ URL::asset('images/logo/lcs/share.svg') }}">
                       </div>--}}
                    </div>

                    <div id = "newsfeed_content_5" class = "newsfeed_content_5">
                        {{--display comments--}}
                        <div class="newsfeed_content_5_content" id="comments_show_{{ $status->id }}"></div>
                        {{--<div id = "newsfeed_comment" class = "newsfeed_content_5_input">--}}
                        {{--</div>--}}
                        <div class="newsfeed_comment_content">
                            <div class="newsfeed_comment_content_image"><img src = "{{ URL::asset('uploads/thumbnails/'.auth()->user()->id.'.jpeg') }}"></div>
                            <div class="newsfeed_comment_content_text">
                                <div class="newsfeed_comment_content_text_comment">
                                    <span class="newsfeed_comment_content_name">
                               <input type="text" id="comment_body_{{ $status->id }}" onkeyup="comment_execute_keyUp(event,{{ $status->id }},{{$status->user_id}},{{ auth()->user()->id }},0,'null')" placeholder="Write Comment">
                            </span>
                                </div>

                            </div>


                        </div>
                    </div>

            </div>
            @endforeach

    </div>
    </div>

        <script type="text/javascript" src ="{{ URL::asset('js/status_comment.js') }} "></script>

@stop
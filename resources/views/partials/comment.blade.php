@foreach($comments as $comment)
    <div class="newsfeed_comment_content">
        <div class="newsfeed_comment_content_image">
            <a href="{{url('/showprofile/'.$comment->user_id)}}">
                <img src = "{{ URL::asset('uploads/thumbnails/'.$comment->user_id.'.jpeg')}}">
            </a>
        </div>
        <div class="newsfeed_comment_content_text">
            <a href="{{url('/showprofile/'.$comment->user_id)}}">
                <span class="newsfeed_comment_content_name">
                    {{ $comment->user->name }}
                </span>
            </a>
            <span class="newsfeed_comment_content_main_text">
                {{ $comment->body }}
            </span>
            <br>
            <div class="newsfeed_comment_content_time">
                {{ $comment->created_at->diffForHumans() }}
            </div>
        </div>


    </div>
@endforeach
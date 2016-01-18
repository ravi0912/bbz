@foreach($comments as $comment)
    <div class="newsfeed_comment_content">
        <div class="newsfeed_comment_content_image"><img src = "{{ URL::asset('uploads/thumbnails/'.$comment->user_id.'.jpeg')}}"></div>
        <div class="newsfeed_comment_content_text">
            <span class="newsfeed_comment_content_name">
                {{ $comment->user->name }}
            </span>
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
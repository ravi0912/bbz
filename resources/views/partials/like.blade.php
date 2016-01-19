<div>


        @if($liked == 1 )

                {{ $likes }}
                <span id="like_click_{{ $status_id }}" onmouseup="LikeMouseUp(event,{{ $status_id }},{{ $user_id }},{{ auth()->user()->id }})">
                                    <img id="like_img_{{ $status_id }}" src = "{{ URL::asset('images/logo/lcs/liked.svg') }}">
                </span>
        @else

                {{ $likes }}
                <span id="like_click_{{ $status_id }}" onmouseup="LikeMouseUp(event,{{ $status_id }},{{ $user_id }},{{ auth()->user()->id }})">
                                    <img id="like_img_{{ $status_id }}" src = "{{ URL::asset('images/logo/lcs/like.svg') }}">
                                </span>

        @endif


</div>
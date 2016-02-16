<div id = "right_ul_header" class = "right_ul_header">NOTIFICATIONS</div>
<div id = "right_ul_content" class = "right_ul_content">
@if($no_notifications > 0)
    @foreach($notifications as $notification)

            <div id = "right_notification" class = "right_notification">
                <div id = "right_notification_content" class = "right_notification_content">
                    @if($notification->status_id !=0 )
                        <a href="{{url('/showstatus/'.$notification->status_id)}}">
                    @else
                        <a href="{{url('/profile#profile_3_project')}}">
                    @endif
                        <div id = "right_ul_content_imae" class = "right_ul_content_imae">
                            <img id = "" src = "{{ URL::asset('uploads/thumbnails/'.$notification->user_id_2.'.jpeg') }}">
                        </div>
                        <div id = "right_notification_content_2" class = "right_notification_content_2">
                            {{ $notification->notification }}<br>
                            <div id = "right_notification_content_3" class = "right_notification_content_3">
                                {{ $notification->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    @endforeach
@endif
</div>


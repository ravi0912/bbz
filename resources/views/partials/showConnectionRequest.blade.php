<div id = "right_ul_header" class = "right_ul_header">CONNECTION REQUESTS</div>
<div id = "right_ul_content" class = "right_ul_content">
    @if($user_connection_count > 0)
        @foreach($user_connection_requests as $user_connection_request)

            <div id = "right_connection" class = "right_connection">
                <div id = "right_connection_content" class = "right_connection_content">
                   <!-- <a href="{{url('/showprofile/'.$user_connection_request->user_id_1)}}">-->
                        <div id = "right_ul_content_imae" class = "right_ul_content_imae">
                            <img id = "" src = "{{ URL::asset('uploads/thumbnails/'.$user_connection_request->user_id_1.'.jpeg') }}">
                        </div>
                        <div id = "right_connection_content_2" class = "right_connection_content_2">
                            {{ $user_connection_request->user1->name }} <br>
                            <span id = "right_connection_content_3" class = "right_connection_content_3">

                       		</span>
                        </div>
                        <div id = "right_connection_content_3" class = "right_connection_content_3">
                            <span id = "right_connection_confirm" class = "right_connection_confirm" onclick="confirm_request(event,{{ $user_connection_request->user_id_1 }})">
                                <img src = "{{ URL::asset('images/logo/right/SVG/CORRECT.svg') }}">
                            </span>
                            <span id = "right_connection_delete" class = "right_connection_delete" onclick="cancel_request(event,{{ $user_connection_request->user_id_1 }})">
                                <img src = "{{ URL::asset('images/logo/right/SVG/INCORRECT.svg') }}">
                            </span>
                        </div>
                    {{--</a>--}}
                </div>
            </div>
        @endforeach
    @else
        <div id = "right_connection_content_2" class = "right_connection_content_2">
            No request to show
        </div>
    @endif
</div>

<script>
    //Confirm Request from notification panel
//alert();
    function confirm_request(event,user_id){
        if(event.which == 1) {
            //alert('confirm request')

            var domain = window.location.host;

            $.get('http://' + domain + '/confirmConnectionNotification', {
                user_id_2: user_id,
            }, function (markup) {

                alert("Request Accepted");
                window.location =window.location.href;
            });
        }

    }

    //Cancel Request connection from acceptor side ,Notification panel

    function cancel_request(event,user_id) {
        if (event.which == 1) {

            var domain = window.location.host;
            //alert(user_id);
            $.get('http://' + domain + '/cancelConnectionNotification', {
                user_id_2: user_id,
            }, function (markup) {
                alert('Request Cancelled');
                window.location =window.location.href;
            });
        }
    }

</script>
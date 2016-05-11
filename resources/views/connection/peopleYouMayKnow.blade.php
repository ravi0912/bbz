@foreach($peopleMayKnows as $peopleMayKnow)
    <div style="margin-top:10px;">
        <div class="add_people_profile_pic">
            <img src=" {{ URL::asset('uploads/thumbnails/'.$peopleMayKnow->id.'.jpeg')  }}" alt="{{$peopleMayKnow->id}}" class="add_people_profile_pic_image"/>
        </div>
        <div class="add_people_details">
            <div class="name"><a href="#" style="font-weight:bold;color:#000">{{ $peopleMayKnow->name }}</a></div>
            <div class="others"><a href="#" style="color:#a1a1a1;font-size:11px">{{ $peopleMayKnow->designation }} </a></div>
        </div>
        <div class="add_people_invite" id="add_people_invite_{{$peopleMayKnow->id}}">
            <button class="btn btn-default add_connection" id="right_connection_request" onclick="SentRequestMouseUpRight(event,{{ $peopleMayKnow->id }})">
            Add Connection
            </button>
        </div>
    </div>
    <hr style="border-bottom:1px solid #0e76bd"><br>
@endforeach

<script>
    function SentRequestMouseUpRight(event,user_id){
        if(event.which == 1){
            var myDataRef10 = new Firebase('https://bbz-workstation.firebaseio.com/connection_request/'+user_id);

            myDataRef10.set({
                connection_notification    : 1 // 0 means no notifiation and 1 means new notification
            });

            var domain = window.location.host;
            //alert(user_id);
            $.get('http://'+domain+'/requestConnection', {
                user_id_2: user_id,
            }, function (markup) {
                //alert();

                $("#add_people_invite_".concat(user_id)).html('<button class="btn btn-default add_connection" id="right_connection_request" onclick="CancelRequestMouseUpRight(event,'+user_id+')"> Request Sent </button>');
            });
          }
    }


    function CancelRequestMouseUpRight(event,user_id){
        if(event.which == 1){
            var domain = window.location.host;
            //alert(user_id);
            $.get('http://'+domain+'/cancelRequest', {
                user_id_2: user_id,
            }, function (markup) {
                $("#add_people_invite_".concat(user_id)).html('<button class="btn btn-default add_connection" id="right_connection_request" onclick="SentRequestMouseUpRight(event,'+user_id+')"> Add Connection </button>');
            });
        }
    }
</script>

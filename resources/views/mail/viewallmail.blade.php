
@extends('app')

@section('content')
    <link href="{{ URL::asset('css/message.css') }}" rel = "stylesheet" >
    <div id = "message main_body_content" class = "message main_body_content">
        <div id = "message_navigation" class = "message_navigation" >
            <div id = "message_navigation_header" class = "message_navigation_header">
                <span>All Messages</span>
            </div>
            <div id = "message_navigation_ul" class = "message_navigation_ul" >
                <!-- Side message panel -->

            </div>
        </div>
        <div id='message_display' class='message_display' >
                <!-- centre message display -->


        </div>
    </div>


    {{--<script>
        var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails');

        myDataRef.orderByChild("user_id_1").equalTo(1).on('child_added', function(snapshot) {
            var mails = snapshot.val();
            displayChatMessage(mails.mail.user_id_2, mails.mail.body.message);
        });
        function displayChatMessage(name, text) {
            $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
            $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
        };
    </script>--}}
    <script>
        var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}');

        myDataRef.orderByChild("date").once('value', function(snapshot) {
            snapshot.forEach(function(childsnapshot){
                var key = childsnapshot.key();
                //alert(key);
                var childdata = childsnapshot.val();
                //alert(childdata.name);
                displayChatMessage(childdata.name, childdata.message,key,childdata.date,childdata.sent_or_recieved);
            });
        });
        function displayChatMessage(name, text, key, date, sent_or_recieved) {
            if(sent_or_recieved == 0){
                var name1 = "you : ";
            }else{
                var name1 = name+" : ";
            }
            var domain = window.location.host;
//            $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#message_navigation_li'));
//            $('#message_navigation_li')[0].scrollTop = $('#message_navigation_li')[0].scrollHeight;
            $("#message_navigation_ul").prepend('<div id = "message_navigation_li" class = "message_navigation_li" onclick = "load_message(event,'+key+');" ><a href = "{{ url('/showprofile/') }}/'+key+'"><div id ="message_navigation_li_image" class = "message_navigation_li_image"><div id ="message_navigation_li_image_content" class = "message_navigation_li_image_content"><img  src = "http://'+ domain +'/uploads/thumbnails/'+ key +'.jpeg " alt = "'+ key +'" align="middle"></div></div><div id = "message_navigation_li_name" class = "message_navigation_li_name">'+name+'</a></div><br><div id = "message_navigation_li_time" class = "message_navigation_li_time">'+date+'</div><div id = "message_navigation_li_mp" class = "message_navigation_li_mp" ><span id = "message_navigation_li_mp_1" class = "message_navigation_li_mp_1">'+name1+'</span><span id = "message_navigation_li_mp_2" class = "message_navigation_li_mp_2">'+text+'</span></div></div><br>');
        };


        //viewing message
        window.onload = function(){
            var id = '{{ $id }}';
            var domain = window.location.host;
            //$("#like_show_click_".concat(status_id)).hide();
            //$("#message_input").show();
            $.get('http://'+domain+'/sendMail', {
                id: id,
            }, function (markup) {
                //alert();
                $('#message_display').html(markup);
                $("#message_input_subject").focus();
            });


        }

    </script>
    <script type="text/javascript" src = "{{ URL::asset('js/message.js') }}" ></script>

    {{--@include('partials.notification')--}}
@stop
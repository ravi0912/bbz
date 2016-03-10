<div id = "right" class = "right">
    <div id = "right_nav" class = "right_nav">
        <div  onmousedown = "load_right_ul_li_1(event);" class = "right_nav_active"><img onload="onLoadNotifications();" id = "right_nav_1" src = "{{ URL::asset('images/logo/right/SVG/notification_off.svg') }}"></div>
        <div onmousedown = "load_right_ul_li_2(event);"><a  ><img id = "right_nav_2" src = "{{ URL::asset('images/logo/right/SVG/message_off.svg') }}"></a>
            <!--<span class="badge badge-notify">3</span>--></div>
        <div onmousedown = "load_right_ul_li_3(event);"><img id = "right_nav_3" src = "{{ URL::asset('images/logo/right/SVG/request_off.svg') }}"></div>
    </div>
    <div id = "right_ul" class = "right_ul">
        <div class = "right_ul_li">
            {{--<div id = "notification" class = "notification">--}}
                {{--<div id = "notification_header" class = "notification_header" >NOTIFICATION</div>--}}
                {{--<div id = "notification_content" class = "notification_content">--}}
                    {{--<div id = "notification_content_1" class = "notification_content_1">--}}
                        {{--heading--}}
                    {{--</div>--}}
                    {{--<div id = "notification_content_2" class = "notification_content_2">--}}
                        {{--content--}}
                    {{--</div>--}}
                    {{--<div id = "notification_content_3" class = "notification_content_3">--}}
                        {{--time--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id = "notification_more" class = "notification_more">more</div>--}}
        </div>

    </div>
</div>


<script>
    // Notification , MailNotification and ConnectNotification
    var myDataRef7 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/{{ auth()->user()->id  }}');
    var myDataRef8 = new Firebase('https://bbz-workstation.firebaseio.com/notification/{{ auth()->user()->id  }}');
    var myDataRef9 = new Firebase('https://bbz-workstation.firebaseio.com/connection_request/{{ auth()->user()->id  }}');

    //Notification Check
    myDataRef8.on('value', function(snapshot) {
        snapshot.forEach(function(childsnapshot){
            var key = childsnapshot.val();
            if(key == 1){
                $('#right_nav_1').attr('src', '{{ URL::asset('images/logo/right/SVG/notification_on.svg') }}');
            }
        });
    });


    //Mail Notfication Check
    myDataRef7.on('value', function(snapshot) {
        snapshot.forEach(function (childsnapshot) {
            var key = childsnapshot.val();
            if (key == 1) {
                $('#right_nav_2').attr('src', '{{ URL::asset('images/logo/right/SVG/message_on.svg') }}');
            }
        });
    });


    //ConnectionRequest check
    myDataRef9.on('value', function(snapshot) {
        snapshot.forEach(function (childsnapshot) {
            var key = childsnapshot.val();
            if (key == 1) {
         $('#right_nav_3').attr('src', '{{ URL::asset('images/logo/right/SVG/request_on.svg') }}');
         }
         });
    });

        //Getting Notifation data
        function load_right_ul_li_1(event) {
            if (event.which == 1) {

                myDataRef8.set({
                    notification: 0 // 0 means no seen notifiation and 1 means new notification
                });
                $('#right_nav_1').attr('src', '{{ URL::asset('images/logo/right/SVG/notification_off.svg') }}');



                var domain = window.location.host;
                $.get('http://'+domain+'/showNotification', {
                }, function (markup) {
                    $(".right_ul_li").html(markup);

                });

            }
        }

        //Getting mail notification data

        function load_right_ul_li_2(event) {
            if (event.which == 1) {

                myDataRef7.set({
                    mail_notification: 0 // 0 means no seen mail notifiation and 1 means new mail notification
                });
                $('#right_nav_2').attr('src', '{{ URL::asset('images/logo/right/SVG/message_off.svg') }}');

                //Displaying messages
                $(".right_ul_li").html('<div id = "right_ul_header" class = "right_ul_header">MESSAGES</div>');
                $(".right_ul_li").append('<div id = "right_ul_content" class = "right_ul_content"></div>');
                var myDataRef11 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}');

                myDataRef11.orderByChild("date").once('value', function(snapshot) {
                    snapshot.forEach(function(childsnapshot){
                        var key = childsnapshot.key();
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
                    //.html in id to make it clear and do refresh

                    $(".right_ul_content").prepend('<div id = "right_message_navigation_li" class = "right_message_navigation_li"><a href = "http://'+domain+'/showprofile/'+key+'"><div id ="right_ul_content_imae" class = "right_ul_content_imae"><img  src = "http://'+ domain +'/uploads/thumbnails/'+ key +'.jpeg " alt = "'+ key +'" align="middle"></div><div id = "right_message_navigation_li_name" class = "right_message_navigation_li_name">'+name+'</a></div><a href="http://'+domain+'/viewAllMail/'+key+'"><div id = "right_message_navigation_li_time" class = "right_message_navigation_li_time">'+date+'</div><div id = "right_message_navigation_li_mp" class = "right_message_navigation_li_mp" ><span id = "right_message_navigation_li_mp_1" class = "right_message_navigation_li_mp_1">'+name1+'</span><span id = "right_message_navigation_li_mp_2" class = "right_message_navigation_li_mp_2">'+text+'</span></div></div></a>');
                };

            }

            $(".right_ul_li").append('<a href="{{ url('/viewAllMail/0') }}"><div id = "right_ul_more" class = "right_ul_more">more</div></a>');
        }
        //Connection request data
        function load_right_ul_li_3(event) {
            if (event.which == 1) {

                myDataRef9.set({
                    connection_request_notification: 0 // 0 means no seen connection and 1 means new connection notification
                });
                $('#right_nav_3').attr('src', '{{ URL::asset('images/logo/right/SVG/request_off.svg') }}');

                //Showing connection Request

                var domain = window.location.host;
                $.get('http://'+domain+'/showConnectionRequest', {
                }, function (markup) {
                    $(".right_ul_li").html(markup);
                    //$(".right_ul_li").find("script").each(function(i) { eval($(this).text()); });
                });


            }

        }
    function onLoadNotifications(){
        var domain = window.location.host;
        $.get('http://'+domain+'/showNotification', {
        }, function (markup) {
            $(".right_ul_li").html(markup);
        });
    }





</script>



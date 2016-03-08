<div id = "message_display_header" class = "message_display_header">
    <span>MESSAGES</span>
    {{--<span>Groups</span>--}}
    {{--<span>Projects</span>--}}
</div>
<div id='messagesDiv' class='messagesDiv'>

    <!--message-->
    {{--<div class='messagesDiv_list'>--}}
        {{--<div class='messagesDiv_list_image'>--}}
            {{--<img  src = "uploads/profiles/{{ auth()->user()->id }}.jpeg" alt = "not found" align="middle">--}}
        {{--</div>--}}
        {{--<div class='messagesDiv_list_content'>--}}
            {{--<div class='messagesDiv_list_content_svg'>--}}
                {{--<svg height="10" width="10">--}}
                    {{--<polygon points=" 0,5 10,0 10,10" style="fill:white;stroke:white;stroke-width:1" />--}}
                {{--</svg>--}}
                {{--<svg height="10" width="10">--}}
                {{--<polygon points=" 0,10 10,5 0,0" style="fill:white;stroke:white;stroke-width:1" />--}}

                {{--</svg>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

    <!--message-->
    {{--<div class='messagesDiv_list_me'>--}}
        {{--<div class='messagesDiv_list_image_me'>--}}
            {{--<img  src = "uploads/profiles/{{ auth()->user()->id }}.jpeg" alt = "not found" align="middle">--}}
        {{--</div>--}}
        {{--<div class='messagesDiv_list_content_me'>--}}
            {{--<div class='messagesDiv_list_content_svg_me'>--}}
                {{--<svg height="10" width="10">--}}
                {{--<polygon points=" 0,10 10,5 0,0" style="fill:white;stroke:white;stroke-width:1" />--}}
                {{--</svg>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

</div>




<div id='message_input' class='message_input'>
    <div id='message_input_main_head' class='message_input_main_head'>
        <div id='message_input_main' class='message_input_main' >
            <label for = "message_input_subject"> Subject: </label>
            <input type='text' id='message_input_subject' name = "message_input_subject"  class="message_input_subject"><br>
            <textarea id='message_input_text' placeholder='Message' class="message_input_text" rows="3" cols=""></textarea>
        </div>
        <div id='message_input_action' class='message_input_action'>
            <button id="" class="general_button" onmousedown="sendMail({{ $id }},event)">
                Send
            </button>

        </div>
    </div>
    <div id = "message_input_image" class = "message_input_image">
        <img  src = "{{ URL::asset('uploads/profiles/'.auth()->user()->id.'.jpeg') }}" alt = "not found" align="middle">
    </div>
</div>

<script>
    $("#messagesDiv").animate({ scrollTop: $("#messagesDiv")[0].scrollHeight}, 1000);
    var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ auth()->user()->id  }}');
    var myDataRef3 = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ $id  }}');
    var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/{{ $id  }}');
    var myDataRef1 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}/{{ $id }}');
    var myDataRef2 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ $id }}/{{ auth()->user()->id  }}');

    myDataRef.orderByChild("user_id_2").equalTo({{ $id }}).on('child_added', function(snapshot) {
        var mails = snapshot.val();
        //alert(mails.body.message);
        displayChatMessage1(mails.user_id_2, mails.body.subject, mails.body.message,mails.body.sent_or_recieved,mails.body.date);
    });
    //token 0 means sent and 1 means revcieved of sent_or_recieved
    function displayChatMessage1(id,subject,text,sent_or_recieved,date) {
        if(sent_or_recieved == 0 ){
            auth_id = {{auth()->user()->id}};
            $("#messagesDiv").append('<div class="messagesDiv_list_me"><div class="messagesDiv_list_content_me"><div class="messagesDiv_list_content_me_sub"><div class="messagesDiv_list_content_header">'+subject+'</div>'+text+'</div></div><div class="messagesDiv_list_image_me"><img  src = "uploads/profiles/'+auth_id+'.jpeg" alt = "not found" align="middle"></div></div><br>');
        }else{
            $("#messagesDiv").append('<div class="messagesDiv_list"><div class="messagesDiv_list_image"><img  src = "uploads/profiles/'+id+'.jpeg" alt = "not found" align="middle"></div><div class="messagesDiv_list_content"><div class="messagesDiv_list_content_header">'+subject+'</div>'+text+'</div></div><br>');
        }
       /* $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
        $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;*/

    };



    function sendMail(user_id_2,event){
        //alert(user_id_2);
        var name2 = "{{ $usr }}";
        var currentTime = new Date();
        var month = currentTime.getMonth() + 1;
        var day = currentTime.getDate();
        var year = currentTime.getFullYear();
        var date = day + "/" + month + "/" + year;
        $("#messagesDiv").animate({ scrollTop: $("#messagesDiv")[0].scrollHeight}, 1000);

        var user_id_1 = {{ auth()->user()->id }};
        var name1 = "{{ auth()->user()->name  }}";
        if (event.which == 1) {
            var subject = $('#message_input_subject').val();
            var message = $('#message_input_text').val();
            if(subject != "" && message != "" ) {
                myDataRef.push({
                    user_id_2: user_id_2,
                    read: 1,//token 0 means not read and 1 means read.
                    body: {
                        name: name1,
                        sent_or_recieved: 0, //token 0 means sent and 1 means revcieved
                        subject: subject,
                        message: message,
                        date: date
                    }

                });

                myDataRef3.push({
                    user_id_2: user_id_1,
                    read: 0,//token 0 means not read and 1 means read.
                    body: {
                        name: name1,
                        sent_or_recieved: 1, //token 0 means sent and 1 means revcieved
                        subject: subject,
                        message: message,
                        date: date
                    }


                });
                myDataRef1.set({
                    name: name2,
                    sent_or_recieved: 0,//token 0 means sent and 1 means revcieved
                    subject: subject,
                    message: message,
                    date: date
                });

                myDataRef2.set({
                    name: name1,
                    sent_or_recieved: 1,//token 0 means sent and 1 means revcieved
                    subject: subject,
                    message: message,
                    date: date
                });

                myDataRef4.set({
                    mail_notification: 1 // 0 means no notifiation and 1 means new notification
                });
                $('#message_input_subject').val('');
                $('#message_input_text').val('');
            }else{
                alert("Please, Enter the subject and message" );
            }

        }

    }

</script>


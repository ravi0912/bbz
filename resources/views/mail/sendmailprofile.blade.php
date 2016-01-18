
<div id='message_input' class='message_input'>
    <div id='message_input_main' class='message_input_main'>
        <div >
            <input type='text' id='message_input_subject' placeholder='Subject' class="message_input_subject"><br>
            <textarea id='message_input_text' placeholder='Message' class="message_input_text" rows="" cols="">
                            </textarea>
        </div>
        <div id='message_input_action' class='message_input_action'>
            <button id="" class="general_button" onmousedown="sendMail({{ $id }},event)">
                Send
            </button>

        </div>
    </div>
</div>

<script>
    var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ auth()->user()->id  }}');
    var myDataRef3 = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ $id  }}');
    var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/{{ $id  }}');
    var myDataRef1 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}/{{ $id }}');
    var myDataRef2 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ $id }}/{{ auth()->user()->id  }}');


    function sendMail(user_id_2,event){
        //alert(user_id_2);

        var currentTime = new Date();
        var month = currentTime.getMonth() + 1;
        var day = currentTime.getDate();
        var year = currentTime.getFullYear();
        var date = day + "/" + month + "/" + year;


        var user_id_1 = {{ auth()->user()->id }};
        var name1 = "{{ auth()->user()->name  }}";
        if (event.which == 1) {
            var subject = $('#message_input_subject').val();
            var message = $('#message_input_text').val();
            if( message != "" ) {
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
                    name: name1,
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
                alert("Please, Enter the message" );
            }

        }

    }

</script>


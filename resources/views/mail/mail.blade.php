
@extends('app')

@section('content')
    <br>
    <br>
    <br>
    <div id='messagesDiv'></div>
    <input type='text' id='subjectInput' placeholder='Subject' class="form-control">
    <textarea id='messageInput' placeholder='Message' class="form-control" rows="4" cols="50">
    </textarea>
    <button id="sendMessage" class="btn-primary" onmouseup="SendMail(event,2)">Send</button>
    <script>
        var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails/mail');
        var myDataRef1 = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ auth()->user()->id  }}');
        function SendMail(event,user_id_2) {

            if (event.which == 1) {
                var id_1 = {{ auth()->user()->id }} ;
                var id_2 = user_id_2;
                var u_id_1 = id_1+"/"+id_2;
                var u_id_2 = id_2+"/"+id_1;
                var subject = $('#subjectInput').val();
                var message = $('#messageInput').val();
                myDataRef.push({
                    user_id_1: id_1,
                    mail:{
                        user_id_2: id_2,
                        body :{
                            sent_or_recieved:0, //token 0 means sent and 1 means revcieved
                            subject: subject,
                            message: message
                        }
                    }

                });

                myDataRef.push({
                    user_id_1: id_2,
                    mail:{
                        user_id_2: id_1,
                        body :{
                            sent_or_recieved:1, //token 0 means sent and 1 means revcieved
                            subject: subject,
                            message: message
                        }
                    }

                });
                /*myDataRef.child(u_id_2).push({
                    sent_or_recieved:1, //token 0 means sent and 1 means revcieved
                    subject: subject,
                    message: message
                });*/
                $('#messageInput').val('');
                $('#subjectInput').val('');


            }
        }
        myDataRef1.orderByChild("user_id_2").equalTo(2).on('child_added', function(snapshot) {
            //alert();
            var mails = snapshot.val();
            //alert(mails.body.subject);
            displayChatMessage(mails.body.subject, mails.body.message);
        });
        function displayChatMessage(name, text) {
            $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
            $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
        };
    </script>

    @include('partials.notification')
@stop

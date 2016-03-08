// storing message to database
var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ auth()->user()->id  }}');
var myDataRef3 = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ $id  }}');
var myDataRef1 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}/{{ $id }}');
var myDataRef2 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ $id }}/{{ auth()->user()->id  }}');
function SendMail(event,user_id_2,name) {
    alert(user_id_2);
    if (event.which == 1) {
        var subject = $('#message_input_subject').val();
        var message = $('#message_input_text').val();
        myDataRef.push({
            mail:{
                user_id_2: user_id_2,
                read :1,//token 0 means not read and 1 means read.
                body :{
                    sent_or_recieved:0, //token 0 means sent and 1 means revcieved
                    subject: subject,
                    message: message
                }
            }

        });

        myDataRef3.push({
            mail:{
                user_id_2: {{ auth()->user()->id }},
                read:0,//token 0 means not read and 1 means read.
                body :{
                    sent_or_recieved:1, //token 0 means sent and 1 means revcieved
                    subject: subject,
                    message: message
                }
            }

        });
    // Storing last message done by both user in different table
        myDataRef1.set({
            name    : name,
            sent_or_recieved:0,//token 0 means sent and 1 means revcieved
            subject : subject,
            message : message
        });

        myDataRef2.set({
            name    : {{ auth()->user()->name  }},
            sent_or_recieved:1,//token 0 means sent and 1 means revcieved
            subject : subject,
            message : message
        });
        /*myDataRef.child(u_id_2).push({
         sent_or_recieved:1, //token 0 means sent and 1 means revcieved
         subject: subject,
         message: message
         });*/
        $('#message_input_subject').val('');
        $('#subject_input_text').val('');
    }

}
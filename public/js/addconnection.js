function SentRequestMouseUp(event,user_id){
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

            $("#connection_show_image").html(markup);
        });
    }
}

function confirmMouseUp(event,user_id){
    var myDataRef10 = new Firebase('https://bbz-workstation.firebaseio.com/connection_request/'+user_id);

    myDataRef10.set({
        connection_notification    : 1 // 0 means no notifiation and 1 means new notification
    });
}

function CancelRequestMouseUp(event,user_id){
    if(event.which == 1){
        var domain = window.location.host;
        //alert(user_id);
        $.get('http://'+domain+'/cancelRequest', {
            user_id_2: user_id,
        }, function (markup) {
            $("#connection_show_image").html(markup);
        });
    }
}


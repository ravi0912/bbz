//Mail notification seen

function mail_seen(event,id){

    if(event.which == 1){
        var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/'+id);
        //alert (myDataRef4);
        myDataRef4.set({
            mail_notification    : 0 // 0 means no notifiation and 1 means new notification
        });
    }

}

function notification_seen(event,id){

    if(event.which == 1){
        var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/'+id);
        //alert (myDataRef4);
        myDataRef4.set({
            mail_notification    : 0 // 0 means no notifiation and 1 means new notification
        });
    }

}

function connection_request_seen(event,id){

    if(event.which == 1){
        var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/'+id);
        //alert (myDataRef4);
        myDataRef4.set({
            mail_notification    : 0 // 0 means no notifiation and 1 means new notification
        });
    }

}



    //Ajax call for view selected person message
    function load_message(event,id){
        if(event.which == 1){
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


    }



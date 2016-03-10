/*
Like Ajax call
 */

function LikeMouseUp(event,status_id,user_id,auth_id){
    if(event.which == 1){

        //Sending notification to user_id in fire base
        if(auth_id != user_id){
            var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/notification/'+user_id);

            myDataRef.set({
                notification: 1 // 0 means no notifiation and 1 means new notification
            });
        }
        //$(this).child().attr("src", "{{ URL::asset('images/logo/lcs/liked.svg') }}");
        var domain = window.location.host;
       //$("#like_show_click_".concat(status_id)).hide();
       //alert($status_id);
        $.get('http://'+domain+'/executeLike', {
            status_id: status_id,
            user_id:user_id,
        }, function (markup) {
            //alert();
            $("#like_show_click_".concat(status_id)).html(markup);
            /*if(status_id == 0)
                $("#like_img_".concat(status_id)).attr("src", 'http://'+domain+'/images/logo/lcs/like.svg');
            else
                $("#like_img_".concat(status_id)).attr("src", 'http://'+domain+'/images/logo/lcs/liked.svg');*/
        });
    }
}



/*
Comment Ajax call
*/

function CommentMouseUp(event,status_id){
    if(event.which == 1){
        var domain = window.location.host;
        $.get('http://'+domain+'/showComment', {
            status_id: status_id
        }, function (markup) {
            $("#comments_show_".concat(status_id)).html(markup);
            $("#comment_body_".concat(status_id)).focus();
        });
    }

}




function comment_execute_keyUp(event,status_id,user_id,auth_id,page_id,page_name) {

    if (event.keyCode == 13){
        //Sending notification to user_id in fire base
        if(auth_id != user_id){
            var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/notification/'+user_id);

            myDataRef.set({
                notification: 1 // 0 means no notifiation and 1 means new notification
            });
        }

        var domain = window.location.host;
        var comment_id = "#comment_body_".concat(status_id);
        var comment_body = $(comment_id).val();
        $("#comments_show_".concat(status_id)).show();
         $.get('http://'+domain+'/executeComment', {
         page_name: page_name,
         page_name: page_name,
         page_id: page_id,
         status_id: status_id,
         user_id:user_id,
         comment_body: comment_body
         }, function (markup) {
         $("#comments_show_".concat(status_id)).html(markup);
         });
        var comment_body = $(comment_id).val('');
    }
}

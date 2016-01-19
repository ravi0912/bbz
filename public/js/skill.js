$('.profile_3_form_skill_add').bind('click',function(){
    var anchor = $("#profile_3_form_skill_input").val();
    if($("#profile_3_form_skill_input").val()){
        $("#profile_3_form_skill_input").removeClass("profile_3_form_skill_input_a");
        var anchor_1 = $("#profile_3_form_skill_input_1").val();
        var s = " ";
        var anchor_2 = anchor.concat(s, anchor_1);
        $("#profile_3_form_skill_input_1").val = anchor_2;
        $("#profile_3_form_skill_display").prepend('<div class = "profile_3_form_skill_display_content"><span id = "profile_3_form_skill_display_2_n " class = "profile_3_form_skill_display_2">'+anchor+'</span><span id = "profile_3_form_skill_display_3_n" class = "profile_3_form_skill_display_3" > &times;</span></div>');

    }else{

        $("#profile_3_form_skill_input").addClass("profile_3_form_skill_input_a");
    }
});

//$('.profile_3_form_skill_display_content span').on('click', function(){
//
//    $(this).parents('.profile_3_form_skill_display_content').remove();
//});
$('.profile_3_form_skill_display_content').on('click', '.profile_3_form_skill_display_3', function(events){
    events.preventDefault();
    $(this).parent().remove();
});
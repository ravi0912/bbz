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
$('.profile_2').hover(
    function () {
        $('.profile_image_2').addClass("profile_image_up profile_2_hover");
        $('#profile_1_edit').show();
        $('#profile_1_edit').addClass("animated");

    },
    function () {
        $('.profile_image_2').removeClass("profile_image_up profile_2_hover");
        $('#profile_1_edit').hide();
    }
);
$('#profile_3_education').hover(
    function () {
        $('.profile_3_education_edit').show();
    },
    function () {
        $('.profile_3_education_edit').hide();
    }
);
$('#profile_3_experience').hover(
    function () {
        $('.profile_3_experience_edit').show();
    },
    function () {
        $('.profile_3_experience_edit').hide();
    }
);
$('#profile_3_project').hover(
    function () {
        $('.profile_3_project_edit').show();
    },
    function () {
        $('.profile_3_project_edit').hide();
    }
);





//// Added by Ankur
//$('.profile_2k').hover(
//    function () {
//        $('.profile_image_2k').addClass("profile_image_up profile_2_hover");
//        $('#profile_1k_edit').show();
//        $('#profile_1k_edit').addClass("animated");
//
//    },
//    function () {
//        $('.profile_image_2').removeClass("profile_image_up profile_2_hover");
//        $('#profile_1_edit').hide();
//    }
//);





//Profile Edit Option popout
function profile_1_Show(event){
    if(event.which == 1) {

        var domain = window.location.host;
        $.get('http://'+domain+'/profileUpdateShow', {
        }, function (markup) {
            $("#profile_1_form_head").show();
            $("#profile_1_form").addClass("animated zoomIn");
            $("#profile_1_form").html(markup);
        });
    }

}

//Profile Add Option pop out

function profile_1_Add(event,user_id){
    if(event.which == 1) {
        $("#profile_1_form_head").show();
        $("#profile_1_form").addClass("animated zoomIn");
    }

}

$('#profile_pop_close').click(
    function () {
        $("#profile_1_form_head").hide();
        $("#profile_1_form").removeClass("animated zoomIn");
    }
);



//Profile Pic Enlarge
function profile_large(event,user_id) {
        if(event.which == 1) {
            $("#profile_1_form_head").show();
            $("#profile_1_form").addClass("animated zoomIn");
            $("#profile_1_form").html('<div id = "profile_image_1" class="profile_image_1"><img  src = "uploads/profiles/' + user_id + '.jpeg" alt = "not found" align="middle"></div>');
        }
}

$('.profile_3_experience_checkbox').click(

    function () {
        if ($('.profile_3_experience_checkbox').is(":checked")){
            $(".profile_3_experience_finish *").attr('disabled','disabled');
            $(".profile_3_experience_finish").addClass('profile_3_finish');
        }else{
            $(".profile_3_experience_finish *").removeAttr('disabled','disabled');
            $(".profile_3_experience_finish").removeClass('profile_3_finish');
        }

    }
);

//Profile Education edit
function profile_3_education_show(event,education_id){
    if(event.which == 1) {
        var domain = window.location.host;
        $.get('http://'+domain+'/educationUpdateShow', {
            education_id : education_id,
        }, function (markup) {
            $("#profile_1_form_head").show();
            $("#profile_1_form").addClass("animated zoomIn");
            $("#profile_1_form").html(markup);
        });
    }

}

//Profile Experience edit
function profile_3_experience_show(event,experience_id){
    if(event.which == 1) {

        var domain = window.location.host;
        $.get('http://'+domain+'/experienceUpdateShow', {
            experience_id : experience_id
        }, function (markup) {
            $("#profile_1_form_head").show();
            $("#profile_1_form").addClass("animated zoomIn");
            $("#profile_1_form").html(markup);
        });
    }

}

//Profile Project Edit
function profile_3_project_show(event,project_id){
    if(event.which == 1) {

        var domain = window.location.host;
        $.get('http://'+domain+'/projectUpdateShow', {
            project_id : project_id
        }, function (markup) {
            $("#profile_1_form_head").show();
            $("#profile_1_form").addClass("animated zoomIn");
            $("#profile_1_form").html(markup);
        });
    }

}

//Skill Add
function addSkill(event){
    if(event.which == 1) {
        var skill = $("#profile_3_form_skill_input").val();
        var domain = window.location.host;
        $.get('http://'+domain+'/addSkill', {
            skill : skill
        }, function (markup) {
            $("#profile_3_skill_content_1").html(markup);
        });
    }

}

//Skill Delete
function deleteSkill(event,skill_id){
    if(event.which == 1) {
        var domain = window.location.host;
        $.get('http://'+domain+'/deleteSkill', {
            skill_id : skill_id
        }, function (markup) {
            $("#profile_3_skill_content_1").html(markup);
        });
    }

}


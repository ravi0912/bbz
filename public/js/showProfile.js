//Skill Boost
function boostSkill(event,skill_id,user_id_1){
    if(event.which == 1) {
        var domain = window.location.host;
        $.get('http://'+domain+'/boostSkill', {
            skill_id : skill_id,
            user_id_1 : user_id_1
        }, function (markup) {
            $("#profile_3_skill_content_1").html(markup);
        });
    }

}

//Skill unBoost
function unBoostSkill(event,skill_id,user_id_1){
    if(event.which == 1) {
        var domain = window.location.host;
        $.get('http://'+domain+'/unBoostSkill', {
            skill_id : skill_id,
            user_id_1 : user_id_1
        }, function (markup) {
            $("#profile_3_skill_content_1").html(markup);
        });
    }

}
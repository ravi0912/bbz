@foreach($skills as $skill)
    <div class="profile_3_skill_content_li">
        <div class="profile_3_skill_content_li_1">
            <div class = "profile_3_skill_content_li_1_1">{{ $skill->skill }}</div>
            @if($auth_boost[$skill->id] == 1)
                <div id = "profile_3_skill_content_li_1_2_sp_unboost" class = "profile_3_skill_content_li_1_2" onclick="unBoostSkill(event,{{ $skill->id }},{{ $user_id_1 }})"> &#8211;</div>
            @else
                <div id = "profile_3_skill_content_li_1_2_sp_boost" class = "profile_3_skill_content_li_1_2" onclick="boostSkill(event,{{ $skill->id }},{{ $user_id_1 }})"> &plus;</div>
            @endif
        </div>
                                            <div class="profile_3_skill_content_li_2">
                                                @if($boostCount[$skill->id] == 0)
                                                @else
                                                    <div id="profile_3_skill_content_li_2_1_sp" class="profile_3_skill_content_li_2_1">{{ $boostCount[$skill->id] }}</div>
                                                @endif
                                            </div>


    </div>
@endforeach

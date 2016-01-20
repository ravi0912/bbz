@foreach($skills as $skill)
    <div class="profile_3_skill_content_li">
        <span class="profile_3_skill_content_li_1">{{ $skill->skill }}</span>
                                            <span class="profile_3_skill_content_li_2">
                                                @if($boostCount[$skill->id] == 0)
                                                @else
                                                    {{ $boostCount[$skill->id] }}
                                                @endif
                                            </span>
        @if($auth_boost[$skill->id] == 1)
            <span class = "profile_3_form_skill_display_3" onclick="unBoostSkill(event,{{ $skill->id }},{{ $user_id_1 }})"> &#8211;</span>
        @else
            <span class = "profile_3_form_skill_display_3" onclick="boostSkill(event,{{ $skill->id }},{{ $user_id_1 }})"> &plus;</span>
        @endif

    </div>
@endforeach
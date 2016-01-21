@if($skillsCount > 0)
    @foreach($skills as $skill)
        <div class="profile_3_skill_content_li">
            <div class="profile_3_skill_content_li_1">
                <div class="profile_3_skill_content_li_1_1">{{ $skill->skill }}</div>
                <div id = "profile_3_skill_content_li_1_2_p_delete" class = "profile_3_skill_content_li_1_2" onclick="deleteSkill(event,{{ $skill->id }})"> &times;</div>
            </div>

            <div class="profile_3_skill_content_li_2">
                @if($boostCount[$skill->id] == 0)
                @else
                    <div class="profile_3_skill_content_li_2_1">{{ $boostCount[$skill->id] }}</div>
                @endif
            </div>
        </div>
    @endforeach
@endif

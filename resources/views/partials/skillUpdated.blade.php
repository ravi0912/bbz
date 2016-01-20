@if($skillsCount > 0)
    @foreach($skills as $skill)
        <div class="profile_3_skill_content_li">
            <span class="profile_3_skill_content_li_1">{{ $skill->skill }}</span>
                                                <span class="profile_3_skill_content_li_2">
                                                    @if($boostCount[$skill->id] == 0)
                                                    @else
                                                        {{ $boostCount[$skill->id] }}
                                                    @endif
                                                </span>
            <span class = "profile_3_form_skill_display_3" onclick="deleteSkill(event,{{ $skill->id }})"> &times;</span>
        </div>
    @endforeach
@endif
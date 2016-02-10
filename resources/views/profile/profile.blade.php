@extends('app')

@section('content')
    <link href="{{ URL::asset('css/profile.css') }}" rel = "stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel = "stylesheet">
    <meta name="description" content="Website Vertical Scrolling with jQuery" />
    <meta name="keywords" content="jquery, vertical, scrolling, scroll, smooth"/>



    <div id = "profile main_body_content" class = "profile main_body_content">
        <div id = "profile_content" class = "profile_content">

            <div id = "profile_1" class="profile_1">
                <a class = "profile_1_active" href="#profile_image" ><div  onclick = "profile_education();">Home</div></a>
                <a href="#profile_3_education" ><div onclick = "profile_education();">Education</div></a>
                <a href="#profile_3_experience" ><div onclick = "profile_experience();">Experiences</div></a>
                <a href="#profile_3_project" ><div onclick = "profile_project();">Projects</div></a>
                <a href="#profile_3_skill" ><div onclick = "profile_skill();">Skills</div></a>


            </div>

            <div id = "profile_2" class="profile_2">

                <div id = "profile_2_content" class="profile_2_content">
                    <div style="margin-top:8%;">
                        <div id = "profile_2_content" class=" profile_2_content_1">


                        </div>
                        @if($profile_count == 1)
                            <div id = "profile_1_edit" class = "profile_3_edit" onclick="profile_1_Show(event,{{ auth()->user()->id }});">Edit</div>
                        @else
                            <div id = "profile_1_edit" class = "profile_3_add general_button" onclick="rofile_1_Add(event,{{ auth()->user()->id }});">Add</div>
                        @endif
                        <div id = "profile_image" class="profile_image">
                            <div id = "profile_image_1" class="profile_image_1">
                                <img onclick='profile_large(event,"uploads/profiles/{{ auth()->user()->id }}.jpeg")' src = "uploads/profiles/{{ auth()->user()->id }}.jpeg" alt = "not found" align="middle">
                            </div>
                            <div id = "profile_image_2" class="profile_image_2">
                                {!! Form::open(['action' => 'ImageUploadController@storeProfileImage','enctype' => 'multipart/form-data']) !!}
                                <label class="profile_image_choose">
                                    {!! Form::file('image', ['class' => 'profile_image_choose']) !!}
                                    Update
                                </label>
                            </div>
                        </div>
                        <div id = "profile_description" class="profile_description">
                            <div id = "profile_name" class="profile_name">{{ auth()->user()->name }}</div>
                            <div id = "profile_type" class="profile_type">{{ auth()->user()->designation }},
                                @foreach($profiles as $profile)
                                    {{ $profile->current_designation }}</div>
                            <div id = "profile_address" class="profile_address">{{ $profile->current_company}}</div>
                            <div id = "profile_address" class="profile_address">{{ $profile->current_city }}, {{ $profile->current_state }}</div>
                            @endforeach
                            <a href="{{url('/showConnections/'.auth()->user()->id)}}"><span id = "profile_connection" class="profile_connection">Connections: {{ $connections }}</span></a>
                        </div>


                    </div>
                    <div id = "profile_image_2_preview" class="profile_image_2_preview">
                        <div id = "profile_image_2_text" class="profile_image_2_text">Preview</div>
                        <span id = "profile_image_2_upload" class="profile_image_2_upload ">{!! Form::submit('Upload', ['class' => ' profile_image_2_upload']) !!}</span>
                        @include('errors.list')
                        <span id = "profile_image_2_close" class="profile_image_2_close ">Cancel</span>
                        {!! Form::close()!!}
                    </div>
                    <div id = "profile_1_form_head" class = "profile_pop">
                        <span id = "profile_pop_close" class = "profile_pop_close">
                            <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
                        </span>

                        <div id = "profile_1_form" class = "profile_1_form">

                            {!! Form::open(['action' => 'ProfileController@profileAdd']) !!}
                            <div class="form-group">
                                {!! Form::text('current_designation', '', ['placeholder' => 'Current Designation','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('current_company', '', ['placeholder' => 'Current Company','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('current_city', '', ['placeholder' => 'Current City','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('current_state', '', ['placeholder' => 'Current State','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                            </div>
                            <div class="form-group">
                                <label for="start_month">
                                    Date of Birth :
                                </label>
                                {!! Form::select('date', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31',
                    ),'', ['placeholder' => 'DD','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_sm']) !!}/
                                {!! Form::select('month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
                    ),'', ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_fm']) !!}
                                /{!! Form::text('year', '', ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_fy']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'general_button ','id' => 'ok']) !!}
                            </div>
                            {!! Form::close() !!}
                            @include('errors.list')
                        </div>
                    </div>
                </div>

            </div>

            <div id = "profile_3" class="profile_3">
                <div id = "profile_3_education" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Education</div>
                    <div id = "profile_3_add" class = "profile_3_add general_button" onclick="profile_3_education(1);">Add</div>
                    <div id = "profile_3_education_content">
                        <div id = "profile_3_education_content_display" class="profile_3_education_content">
                            @foreach ($educations as $education)
                                <div id = "profile_3_education_content_1" class="profile_3_sub_content">
                                    <div id = "profile_3_education_edit" class = "profile_3_education_edit profile_3_edit" onclick="profile_3_education_show(event,{{ $education->id }});">Edit</div>
                                    <div id = "profile_3_education_content_school" class = "profile_3_sub_content_school">{{ $education->school }}</div>
                                    <div id = "profile_3_education_content_branch" class = "profile_3_sub_content_branch">{{ $education->branch }}</div>
                                    <div id = "profile_3_education_content_degree" class = "profile_3_sub_content_degree">{{ $education->degree }}</div>
                                    <div id = "profile_3_education_content_grade" class = "profile_3_sub_content_grade">{{ $education->grade }}</div><br>
                                    <div id = "profile_3_education_content_timein" class = "profile_3_sub_content_timein">{{ $education->start_year }}</div> -
                                    <div id = "profile_3_education_content_timeout" class = "profile_3_sub_content_timeout">{{ $education->finish_year }}</div>
                                    <div id = "profile_3_education_content_description_1" class = "profile_3_sub_content_description_1">{{ $education->experience }}</div>
                                    <div id = "profile_3_education_content_description_2" class = "profile_3_sub_content_description_2">{{ $education->description }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div id = "profile_3_education_content_form" class="profile_3_sub_content_form">
                            <!-- //Form - education edit -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class=" ">
                                        <div class="">
                                            <div class="panel-body">

                                                {!! Form::open(['action' => 'ProfileController@educationStore']) !!}
                                                <div class="form-group">
                                                    {!! Form::text('school', '', ['placeholder' => 'School/University Name','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>

                                                <div class="form-group">
                                                    <label for="start_month">
                                                        Start
                                                    </label>
                                                    {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
        ),'', ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_sm']) !!}/{!! Form::text('start_year', '', ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_sy']) !!}-<label for="start_month">
                                                        Finish
                                                    </label>
                                                    {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
        ),'', ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_fm']) !!}/{!! Form::text('finish_year', '', ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_fy']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('branch', '', ['placeholder' => 'Branch','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('degree', '', ['placeholder' => 'Degree','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('grade', '', ['placeholder' => 'Grade','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::textarea('experience', '', ['rows'=>'4','placeholder' => 'Experience','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::textarea('description', '', ['rows'=>'4','placeholder' => 'Description','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Submit', ['class' => 'general_button ','id' => 'ok']) !!}
                                                    <span id = "profile_3_cancel" class = "profile_3_cancel" onclick="profile_3_education(2);">Cancel</span>
                                                </div>
                                                {!! Form::close() !!}

                                            </div>
                                            @include('errors.list')
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id = "profile_3_experience" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Experience</div>
                    <div id = "profile_3_add" class = "profile_3_add general_button" onclick="profile_3_education(3);">Add</div>
                    <div id = "profile_3_experience_content">
                        <div id = "profile_3_experience_content_display" class="profile_3_experience_content">

                            @foreach ($experiences as $experience)
                                <div id = "profile_3_experience_content_1" class="profile_3_sub_content">
                                    <div id = "profile_3_experience_edit" class = "profile_3_experience_edit profile_3_edit" onclick="profile_3_experience_show(event,{{ $experience->id }});">Edit</div>
                                    <div id = "profile_3_experience_content_school" class = "profile_3_sub_content_school">{{ $experience->company_name }}</div>
                                    <div id = "profile_3_experience_content_branch" class = "profile_3_sub_content_branch">{{ $experience->title }}</div>
                                    <div id = "profile_3_experience_content_branch" class = "profile_3_sub_content_branch">{{ $experience->location }}</div><br>
                                    <div id = "profile_3_experience_content_timein" class = "profile_3_sub_content_timein">{{ $experience->start_year }}</div> -
                                    @if($experience->working == 1)
                                        <div id = "profile_3_experience_content_timeout" class = "profile_3_sub_content_timeout">Working</div>
                                    @else
                                        <div id = "profile_3_experience_content_timeout" class = "profile_3_sub_content_timeout">{{ $experience->finish_year }}</div>
                                    @endif
                                    <div id = "profile_3_experience_content_description_1" class = "profile_3_sub_content_description_1">{{ $experience->description }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div id = "profile_3_experience_content_form" class="profile_3_sub_content_form">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="">
                                        <div class="">

                                            <div class="panel-body">

                                                {!! Form::open(['action' => 'ProfileController@experienceStore']) !!}
                                                <div class="form-group">
                                                    {!! Form::text('company_name', '', ['placeholder'=>'Company Name','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('title', '', ['placeholder'=>'Title','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('location', '', ['placeholder'=>'Location','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                 <span class="profile_3_experience_start profile_3_start">
                                                     <label for="start_month">
                                                         Start
                                                     </label>
                                                     {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
    ),'', ['placeholder'=>'MM','class' => 'profile_3_form_content_sm','id' => 'ok']) !!}/{!! Form::text('start_year', '', ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                     </span>
                                                <span class="profile_3_experience_finish profile_3_start">
                                                    <label for="finish_month">
                                                        Finish
                                                    </label>
                                                    {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
    ),'', ['placeholder'=>'MM','class' => 'profile_3_form_content_sm']) !!}/{!! Form::text('finish_year', '', ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                </span>

                                                </div>
                                                <div class="form-group">
                                                    {!! Form::checkbox('working','1', false,['class'=>'profile_3_experience_checkbox']) !!} Presently working
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::textarea('description', '', ['rows'=>'4','placeholder'=>'Description','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Submit', ['class' => 'general_button ']) !!}
                                                    <span id = "profile_3_cancel" class = "profile_3_cancel" onclick="profile_3_education(4);">Cancel</span>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @include('errors.list')
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div id = "profile_3_project" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Project</div>
                    <div id = "profile_3_add" class = "profile_3_add general_button" onclick="profile_3_education(7);">Add</div>
                    <div id = "profile_3_project_content">
                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h2>{!! Session::get('success') !!}</h2>
                            </div>
                        @endif
                        @foreach ($projects as $project)
                            <div id = "profile_3_project_content_display" class="profile_3_project_content">
                                <div id = "profile_3_project_content_1" class="profile_3_sub_content">
                                    <div id = "profile_3_project_edit" class = "profile_3_project_edit profile_3_edit" onclick="profile_3_project_show(event,{{ $project->id }});">Edit</div>
                                    <div >
                                        {!! Form::open(['action' => 'ImageUploadController@storeProjectImage','files'=>true])!!}
                                            <div class="form-group">
                                                {!! Form::hidden('project_id', $project->id) !!}
                                            </div>
                                            {!! Form::file('images[]', ['multiple'=>true,'style' =>'display:block']) !!}
                                            {!! Form::submit('Submit') !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div id = "profile_3_project_content_school" class = "profile_3_sub_content_school">{{ $project->name }}</div>
                                    <div id = "profile_3_project_content_school" class = "profile_3_sub_content_school">{{ $project->occupation }}</div>
                                    <div id = "profile_3_project_content_timein" class = "profile_3_sub_content_timein">{{ $project->start_month }}/{{ $project->start_year }}</div> -
                                    <div id = "profile_3_project_content_timeout" class = "profile_3_sub_content_timeout">{{ $project->finish_month }}/{{ $project->finish_year }}</div> |
                                    <div id = "profile_3_project_content_degree" class = "profile_3_sub_content_degree">{{ $project->address }}</div><br>
                                    <div id = "profile_3_project_content_grade" class = "profile_3_sub_content_grade">{{ $project->team_members }}</div><br>

                                    <div id = "profile_3_project_content_branch" class = "profile_3_sub_content_branch"> <a title="Click to see Project" href="{{ $project->url }}" target="_blank">Project Link</a> </div>
                                    <div id = "profile_3_project_content_description_2" class = "profile_3_sub_content_description_2">{{ $project->description }}</div>
                                    <div id = "profile_3_project_content_gallery" class = "profile_3_sub_content_gallery">
                                        <?php
                                        $dirname = "uploads/projects/".auth()->user()->id."/".$project->id."/";
                                        $images = glob($dirname."*.jpeg");
                                            //echo $dirname;
                                        foreach($images as $image) {
                                                    $image1 = "'".$image."'";
                                                    echo '<div class = "profile_3_sub_content_image" onclick="profile_large(event,'.$image1.')"><img src = "'.$image.'"></div>';
                                                }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div id = "profile_3_project_content_form" class="profile_3_sub_content_form">
                            <!-- //Form - project  -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="">
                                        <div class="">
                                            <div class="panel-body">

                                                {!! Form::open(['action' => 'ProfileController@projectStore']) !!}
                                                <div class="form-group">
                                                    {!! Form::text('name', '', ['placeholder'=>'Project Name','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('occupation', '', ['placeholder'=>'Occupation','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="start_month">
                                                        Start
                                                    </label>
                                                    {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
        ),'', ['placeholder'=>'MM','class' => 'profile_3_form_content_sm','id' => 'ok']) !!}/{!! Form::text('start_year', '', ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                    <label for="finish_month">
                                                        Finish
                                                    </label>
                                                    {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
        ),'', ['placeholder'=>'MM','class' => 'profile_3_form_content_sm']) !!}/{!! Form::text('finish_year', '', ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('url', '', ['placeholder'=>'URL','class' => 'profile_3_form_content','title' => "http://www.google.com"]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('team_members', '', ['placeholder'=>'Team Members','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::text('address', '', ['placeholder'=>'Address','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::textarea('description', '', ['rows'=>'4','placeholder'=>'Description','class' => 'profile_3_form_content']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Submit', ['placeholder'=>' ','class' => 'general_button ']) !!}
                                                    <span id = "profile_3_cancel" class = "profile_3_cancel" onclick="profile_3_education(8);">Cancel</span>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @include('errors.list')
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div id = "profile_3_skill" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Skill</div>
                    <div id = "profile_3_add" class = "profile_3_add general_button" onclick="profile_3_education(5);">Add</div>
                    <div id = "profile_3_skill_content">
                        <div id = "profile_3_skill_content_display" class="profile_3_skill_content">

                                <div id = "profile_3_skill_content_1" class="profile_3_skill_sub_content">
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
                                </div>
                        </div>
                        <div id = "profile_3_skill_content_form" class="profile_3_sub_content_form">
                                <div id = "profile_3_skill_input" class="profile_3_skill_input">
                                    <input name = "profile_3_form_skill_input" id = "profile_3_form_skill_input" class = "profile_3_form_skill_input" placeholder="Enter your skill">
                                    <span id = "profile_3_form_skill_add" class = "profile_3_form_skill_add general_button" onclick="addSkill(event)">Submit</span>
                                    <span id = "profile_3_cancel" class = "profile_3_cancel" onclick="profile_3_education(6);">Cancel</span>
                                </div>
                                {{--<div id = "profile_3_form_skill_display" class = "profile_3_form_skill_display">
                                    <div class = "profile_3_form_skill_display_content">
                                        <span class = "profile_3_form_skill_display_1">3</span>
                                        <span class = "profile_3_form_skill_display_2">PHP</span>
                                        <span class = "profile_3_form_skill_display_3"> &times;</span>
                                    </div>

                                </div> <br>--}}

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        //Image Preview
        //Function for Reading image path
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_image_1 img').attr('src', e.target.result);
                    $('#profile_image_1 img').attr('height', "160");
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        //Updating image for preview
        $(function() {
            $("#profile_image_2 input:file").change(function (){
//                var fileName = $(this).val();
//                $(".filename").html(fileName);
                $(".profile_image_2_preview").show();
                readURL(this);
            });
            $("#profile_image_2_close").click(function(){
                $('#profile_image_1 img').attr('src', 'uploads/profiles/{{ auth()->user()->id }}.jpeg');
                $('#profile_image').css('border', 'none');
                $(".profile_image_2_preview").hide();
            });
        });
    </script>
    <script type="text/javascript" src = "{{ URL::asset('js/profile.js') }}" ></script>
    {{--@include('partials.notification')--}}

@stop
@extends('app')

@section('content')
    <link href="{{ URL::asset('css/profile.css') }}" rel = "stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel = "stylesheet">
    <meta name="description" content="Website Vertical Scrolling with jQuery" />
    <meta name="keywords" content="jquery, vertical, scrolling, scroll, smooth"/>



    <div id = "profile main_body_content" class = "profile main_body_content">
        <div id = "profile_content" class = "profile_content">

            <div id = "profile_1" class="profile_1">
                <a class = "profile_1_active" href="#profile_image" ><div  onclick = "profile_education();">HOME</div></a>
                <a href="#profile_3_education" ><div onclick = "profile_education();">Education</div></a>
                <a href="#profile_3_experience" ><div onclick = "profile_experience();">Experience</div></a>
                <a href="#profile_3_project" ><div onclick = "profile_project();">Project</div></a>
                <a href="#profile_3_skill" ><div onclick = "profile_skill();">Skill</div></a>
            </div>

            <div id = "profile_2" class="profile_2">

                <div id = "profile_2_content" class="profile_2_content">
                    <div style="margin-top:8%;">
                        @foreach ($userprofile as $usr)
                            <div id = "profile_2_content" class=" profile_2_content_1">
                                <div id ="connection_show_image">
                                    @if($connect == 0)
                                        <div onclick="SentRequestMouseUp(event,{{ $usr->id }})">
                                            <img class = "sp_img" src = "{{ URL::asset('images/addconnection.svg') }} " alt="0" title="Send Request Connection">
                                        </div>
                                    @endif
                                    @if($connect == 2)
                                        <div onclick="CancelRequestMouseUp(event,{{ $usr->id }})">
                                            <img class = "sp_img" src = "{{ URL::asset('images/requestsent.svg') }}" alt="2" title="Request Sent, Click for cancel Request">
                                        </div>
                                    @endif
                                </div>
                                <div>
                                @if($connect == 1)
                                    {!! Form::open(['action' => 'ConnectionController@confirmConnection']) !!}
                                        <div class="form-group">
                                            <input type="hidden"  value="{{ $usr->id }}" name = "user_id_2">
                                            <input class = "sp_img" type="image" src = "{{ URL::asset('images/accept_request.svg') }}" alt="1" title="Confirm Request">
                                        </div>
                                    {!! Form::close() !!}
                                @endif
                                @if($connect == 3)
                                    {!! Form::open(['action' => 'ConnectionController@removeConnection']) !!}
                                        <div class="form-group">
                                            <input type="hidden" value="{{ $usr->id }}" name = "user_id_2">
                                            <input class = "sp_img" type="image" src = "{{ URL::asset('images/accepted.svg') }}" alt="3" title="Connected, Click to remove from connection">
                                        </div>
                                    {!! Form::close() !!}
                                @endif
                                </div>
                                {{--<div><img src = "{{ URL::asset('images/addcontact.png') }}"></div>--}}
                                <div id = "profile_2_content_sendmessage" class = "profile_2_content_sendmessage" title="Click to Send Mail"><img src = "{{ URL::asset('images/sendmessage.png') }}"></div>
                            </div>
                            <div id = "profile_image" class="profile_image">

                                <div id = "profile_image_1" class="profile_image_1">
                                    <img onclick="profile_show_large(event,{{ $usr->id }})" width="100" height="100" src = "{{ URL::asset('uploads/profiles/'.$usr->id.'.jpeg') }}" alt = "{{ $usr->name }}">                                </div>
                            </div>
                            <div id = "profile_description" class="profile_description">
                                <div id = "profile_name" class="profile_name">{{ $usr->name}}</div>
                                <div id = "profile_type" class="profile_type">{{ $usr->designation}},
                                    @foreach($profiles as $profile)
                                        {{ $profile->current_designation }}</div>
                                <div id = "profile_address" class="profile_address">{{ $profile->current_company}}</div>
                                <div id = "profile_address" class="profile_address">{{ $profile->current_city }}, {{ $profile->current_state }}</div>
                                @endforeach
                                <a href="{{url('/showConnections/'.$usr->id)}}"><span id = "profile_connection" class="profile_connection">Connections: {{ $connections }}</span></a>

                                <div id = "profile_1_form_head" class = "profile_pop">
                                    <span id = "profile_pop_close" class = "profile_pop_close">Close</span>

                                    <div id = "profile_1_form" class = "profile_1_form">
                                    </div>
                                </div>

                            </div>
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>

            <!-- Need to be edited -->

            @endforeach
            <!-- Till here -->

            <div id = "profile_3" class="profile_3">
                <div id = "profile_3_education" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Education</div>
                    <div id = "profile_3_education_content">
                        <div id = "profile_3_education_content_display" class="profile_3_education_content">
                            @foreach ($educations as $education)
                                <div id = "profile_3_education_content_1" class="profile_3_sub_content">
                                    <div id = "profile_3_education_content_school" class = "profile_3_sub_content_school">{{ $education->school }}</div>
                                    <div id = "profile_3_education_content_timein" class = "profile_3_sub_content_timein">{{ $education->start_year }}</div> -
                                    <div id = "profile_3_education_content_timeout" class = "profile_3_sub_content_timeout">{{ $education->finish_year }}</div>
                                    <div id = "profile_3_education_content_branch" class = "profile_3_sub_content_branch">{{ $education->branch }}</div>
                                    <div id = "profile_3_education_content_degree" class = "profile_3_sub_content_degree">{{ $education->degree }}</div>
                                    <div id = "profile_3_education_content_grade" class = "profile_3_sub_content_grade">{{ $education->grade }}</div>
                                    <div id = "profile_3_education_content_description_1" class = "profile_3_sub_content_description_1">{{ $education->experience }}</div>
                                    <div id = "profile_3_education_content_description_2" class = "profile_3_sub_content_description_2">{{ $education->description }}</div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div id = "profile_3_experience" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Experience</div>
                    <div id = "profile_3_experience_content">
                        <div id = "profile_3_experience_content_display" class="profile_3_experience_content">'

                            @foreach ($experiences as $experience)
                                <div id = "profile_3_experience_content_1" class="profile_3_sub_content">
                                    <div id = "profile_3_experience_content_school" class = "profile_3_sub_content_school">{{ $experience->company_name }}</div>
                                    <div id = "profile_3_experience_content_branch" class = "profile_3_sub_content_branch">{{ $experience->title }}</div>
                                    <div id = "profile_3_experience_content_branch" class = "profile_3_sub_content_branch">{{ $experience->location }}</div>
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

                    </div>
                </div>
                <div id = "profile_3_project" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Project</div>
                    <div id = "profile_3_project_content">
                        @foreach ($projects as $project)
                            <div id = "profile_3_project_content_display" class="profile_3_project_content">
                                <div id = "profile_3_project_content_1" class="profile_3_sub_content">

                                    <div id = "profile_3_project_content_school" class = "profile_3_sub_content_school">{{ $project->name }}</div>
                                    <div id = "profile_3_project_content_school" class = "profile_3_sub_content_school">{{ $project->occupation }}</div>
                                    <div id = "profile_3_project_content_timein" class = "profile_3_sub_content_timein">{{ $project->start_month }}/{{ $project->start_year }}</div> -
                                    <div id = "profile_3_project_content_timeout" class = "profile_3_sub_content_timeout">{{ $project->finish_month }}/{{ $project->finish_year }}</div> |
                                    <div id = "profile_3_project_content_degree" class = "profile_3_sub_content_degree">{{ $project->address }}</div><br>
                                    <div id = "profile_3_project_content_grade" class = "profile_3_sub_content_grade">{{ $project->team_members }}</div><br>
                                    <div id = "profile_3_project_content_description_1" class = "profile_3_sub_content_description_1">{{ $project->address }}</div>
                                    <div id = "profile_3_project_content_branch" class = "profile_3_sub_content_branch"> <a title="Click to see Project" href="{{ $project->url }}" target="_blank">Project Link</a> </div>
                                    <div id = "profile_3_project_content_description_2" class = "profile_3_sub_content_description_2">{{ $project->description }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div id = "profile_3_skill" class="profile_3_content">
                    <div id = "profile_3_content_header" class= "profile_3_content_header">Skill</div>
                    <div id = "profile_3_skill_content">
                        <div id = "profile_3_skill_content_display" class="profile_3_skill_content">

                            <div id = "profile_3_skill_content_1" class="profile_3_skill_sub_content">
                                @if($skillsCount > 0)
                                    @foreach($skills as $skill)
                                        {{--<div class="profile_3_skill_content_li">--}}
                                            {{--<span class="profile_3_skill_content_li_1">{{ $skill->skill }}</span>--}}
                                                {{--<span class="profile_3_skill_content_li_2">--}}
                                                    {{--@if($boostCount[$skill->id] == 0)--}}
                                                    {{--@else--}}
                                                        {{--{{ $boostCount[$skill->id] }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                            {{--@if($auth_boost[$skill->id] == 1)--}}
                                                {{--<span class = "profile_3_form_skill_display_3" onclick="unBoostSkill(event,{{ $skill->id }},{{ $usr->id }})"> &#8211;</span>--}}
                                            {{--@else--}}
                                                {{--<span class = "profile_3_form_skill_display_3" onclick="boostSkill(event,{{ $skill->id }},{{ $usr->id }})"> &plus;</span>--}}
                                            {{--@endif--}}

                                        {{--</div>--}}
                                        <div class="profile_3_skill_content_li">
                                            <div class="profile_3_skill_content_li_1">
                                                <div class="profile_3_skill_content_li_1_1">{{ $skill->skill }}</div>
                                                @if($auth_boost[$skill->id] == 1)
                                                    <div id = "profile_3_skill_content_li_1_2_sp_unboost" class = "profile_3_skill_content_li_1_2" onclick="unBoostSkill(event,{{ $skill->id }},{{ $usr->id }})"> &#8211;</div>
                                                @else
                                                    <div id = "profile_3_skill_content_li_1_2_sp_boost" class = "profile_3_skill_content_li_1_2" onclick="boostSkill(event,{{ $skill->id }},{{ $usr->id }})"> &plus;</div>
                                                @endif                                        </div>

                                            <div class="profile_3_skill_content_li_2">
                                                @if($boostCount[$skill->id] == 0)
                                                @else
                                                    <div id="profile_3_skill_content_li_2_1_sp" class="profile_3_skill_content_li_2_1">{{ $boostCount[$skill->id] }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>


    {{--@include('partials.notification')--}}
    <script type="text/javascript" src ="{{ URL::asset('js/addconnection.js') }} "></script>
        <script type="text/javascript" src ="{{ URL::asset('js/showProfile.js') }} "></script>
    <div id='profile_2_content_sendmessage_container_head' class='profile_2_content_sendmessage_container_head'>
<span id = "close_sendmessage_container" class = "profile_pop_close">
                            <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
        <div id='profile_2_content_sendmessage_container' class='profile_2_content_sendmessage_container'>

            <div id='profile_2_message_input' class='profile_2_message_input'>

                <div id='profile_2_message_input_main' class='profile_2_message_input_main'>
                    <div >
                        <input type='text' id='profile_2_message_input_subject' placeholder='Subject' class="profile_2_message_input_subject"><br>
                        <textarea id='profile_2_message_input_text' placeholder='Message' class="profile_2_message_input_text" rows="" cols=""></textarea>
                    </div>
                    <div id='profile_2_message_input_action' class='profile_2_message_input_action'>
                        <button id="" class="general_button" onmousedown="sendMail({{ $usr->id }},event)">
                            Send
                        </button>

                    </div>
                </div>
            </div>

            <script>
                var myDataRef = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ auth()->user()->id  }}');
                var myDataRef3 = new Firebase('https://bbz-workstation.firebaseio.com/mails/{{ $usr->id  }}');
                var myDataRef4 = new Firebase('https://bbz-workstation.firebaseio.com/mailnotification/{{ $usr->id  }}');
                var myDataRef1 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ auth()->user()->id  }}/{{ $usr->id }}');
                var myDataRef2 = new Firebase('https://bbz-workstation.firebaseio.com/mailsviewone/{{ $usr->id }}/{{ auth()->user()->id  }}');


                function sendMail(user_id_2,event){
                    //alert(user_id_2);

                    var currentTime = new Date();
                    var month = currentTime.getMonth() + 1;
                    var day = currentTime.getDate();
                    var year = currentTime.getFullYear();
                    var date = day + "/" + month + "/" + year;


                    var user_id_1 = {{ auth()->user()->id }};
                    var name2 = "{{ $usr->name  }}";
                    var name1 = "{{ auth()->user()->name  }}";
                    if (event.which == 1) {
                        var subject = $('#profile_2_message_input_subject').val();
                        var message = $('#profile_2_message_input_text').val();
                        if(message != "" ) {
                            myDataRef.push({
                                user_id_2: user_id_2,
                                read: 1,//token 0 means not read and 1 means read.
                                body: {
                                    name: name2,
                                    sent_or_recieved: 0, //token 0 means sent and 1 means revcieved
                                    subject: subject,
                                    message: message,
                                    date: date
                                }

                            });

                            myDataRef3.push({
                                user_id_2: user_id_1,
                                read: 0,//token 0 means not read and 1 means read.
                                body: {
                                    name: name1,
                                    sent_or_recieved: 1, //token 0 means sent and 1 means revcieved
                                    subject: subject,
                                    message: message,
                                    date: date
                                }


                            });
                            myDataRef1.set({
                                name: name2,
                                sent_or_recieved: 0,//token 0 means sent and 1 means revcieved
                                subject: subject,
                                message: message,
                                date: date
                            });

                            myDataRef2.set({
                                name: name1,
                                sent_or_recieved: 1,//token 0 means sent and 1 means revcieved
                                subject: subject,
                                message: message,
                                date: date
                            });

                            myDataRef4.set({
                                mail_notification: 1 // 0 means no notifiation and 1 means new notification
                            });
                            $("#profile_2_content_sendmessage_container").removeClass("animated zoomIn");
                            $("#profile_2_content_sendmessage").append('<div id = "black_noti" class =  "animated zoomIn black_noti">Sent</div>');
                            $("#black_noti").delay(3000).fadeOut();
                            $("#profile_2_message_input_subject").val('');
                            $("#profile_2_message_input_text").val('');
                            $("#profile_2_content_sendmessage_container").removeClass("animated zoomIn");
                            $("#profile_2_content_sendmessage_container_head").hide();
                        }else{
                            alert("Please, Enter the subject and message" );
                        }

                    }

                }
                $("#profile_2_content_sendmessage").click(function () {
                    $("#profile_2_content_sendmessage_container_head").show();
                    $("#profile_2_message_input_subject").focus();
                    $("#profile_2_content_sendmessage_container").addClass("animated zoomIn");
                });
                $("#close_sendmessage_container").click(function () {
                    $("#profile_2_content_sendmessage_container").removeClass("animated zoomIn");
                    $("#profile_2_content_sendmessage_container_head").hide();
                });

                //Profile enlarge

                function profile_show_large(event,user_id) {
                    if(event.which == 1) {
                        $("#profile_1_form_head").show();
                        $("#profile_1_form").html('<div id = "profile_image_1" class="profile_image_1"><img  src = "{{ URL::asset('uploads/profiles/'.$usr->id.'.jpeg') }}" alt = "not found" align="middle"></div>');
                    }
                }
            </script>
        </div>
    </div>

@stop
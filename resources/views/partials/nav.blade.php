        @if (Auth::guest())


        @else
<nav class = "top_nav" >
    <div class="top_nav_content">
            <div class="top_nav_logo">
                <a class="" id = "" href="/"><img src = "{{ URL::asset('images/logo/BBZlogo/bbzlogo_white.svg') }}"></a>
            </div>
            <div class="top_nav_left">
                <div class="top_nav_left_a">
                <div class = "nav_home" style = "color:white;font-size:1.1em;"><a style = "color:white;" href="{{ url('/blogs') }}">Blogs</a></div>
                <div class = "nav_home" style = "color:white;font-size:1.1em;"><a style = "color:white;" href="{{ url('/byelaws') }}">ByeLaws</a></div>
                <div class = "nav_home" style = "color:white;font-size:1.1em;"><a style = "color:white;" href="{{ url('/tender') }}">Tenders</a></div>
                    </div>
                <div class = "nav_input" >
                    <form class=" " role="search" action="{{ url('/searchResults') }}" method="GET" >
                        <!-- styling needed -->

                        <span class="" id="search-results" style = "display:none;">
                            <span class='nav_search_result_svg'>
                                <svg height="10" width="10">
                                    <polygon points=" 5,0 10,0 10,10" style="fill:red;stroke:white;stroke-width:1" />
                                </svg>
                            </span>
                        </span>
                        <span class = "search-input">
                            <input type="text" id="search-input" class="" placeholder="Search" autocomplete="off" name="keywords">
                            <button type="submit" class="search-input-button"><img src = "{{ URL::asset('images/logo/nav/SVG/search_1.svg') }}" width="20" height="20"></button>
                        </span>

                    </form>
                </div>
            </div>
            <div class="top_nav_right">

                {{--<div class = "nav_search" onclick = "show_nav_input();"><a href="#"><img id = "nav_search" src = "{{ URL::asset('images/logo/nav/SVG/search.svg') }}"></a></div>--}}
                {{--<div class = "nav_settings"><a href="#"><img src = "{{ URL::asset('images/logo/nav/SVG/settings.svg') }}"></a></div>--}}

                <div class = "nav_home" style = "color:white;font-size:1.1em;"><a style = "color:white;" href="{{ url('/') }}">Home</a></div>
                <div class = "nav_home" style = "color:white;font-size:1.1em;"><a style = "color:white;"  href="{{ url('/profile') }}">Profile </a></div>
                {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>--}}
                {{--<li>--}}
                    {{--<a href="{{ url('/viewAllMail') }}" onmousedown="mail_seen(event,{{ auth()->user()->id  }})"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>--}}
                    {{--<!--<span class="badge badge-notify">3</span>-->--}}
                {{--</li>--}}
                {{--<li><a href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>--}}
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span id = "nav_profile_image" class = "nav_profile_image">
                            <img src = "{{ URL::asset('uploads/profiles/'.auth()->user()->id.'.jpeg') }}" >
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="{{url('/showConnections/'.auth()->user()->id)}}">Connections</a></li>
                        <li><a href="{{ url('/auth/reset') }}">Change Password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>

    </div>
</nav>
<!-- Search-->



<script>
    function show_nav_input(){
        $(".nav_search").hide();
        $(".nav_input").toggle(300)
        $(".nav_input input").focus();
        $('.nav_search').attr('src', '{{ URL::asset('images/logo/nav/SVG/search_1.svg') }}');
    }

</script>
<script type="text/javascript" src="{{ URL::asset('js/mailnotification.js') }}"></script>

@include ('partials.right')

@include ('partials.left_overlap')
@endif
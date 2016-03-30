@extends('app')

@section('content')


    <link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">


    <style type="text/css">

        .blog_wrap {
            margin-left:5%;
        }

        .blog-entry{
            margin-top:50px;
            border: 2px solid #f1f1f2;
            height:250px;
            position: relative;
            background: #f9f9f9;
        }

        .col-lg-8 {
            width:70%;
        }

        .material {
            width:500px;
            height:250px;
            padding-bottom:15px;
        }

        .pic {
            width:250px;
            height:250px;
        }

        .pic:hover {
            border:1px solid #0e76bd;

        }

        .read_more {
            padding:10px;
            background-color: #0e76bd;
            color:#fff;
        }

        .read_more:hover {
            text-decoration: none;
            color:#fff;
            cursor:pointer;
            box-shadow:2px 2px 2px #000;
        }

        .read_more:focus {
            text-decoration: none;
            color:#fff;
        }

        .blog-entry > img{
            width: 240px;
            height: 100%;
            position: absolute;
            top: 0px;
            box-shadow: 0px 0px 4px #777;

        }

        .blog-entry > div{
            padding: 20px;
        }

        .blog-entry:nth-child(odd){
            margin-right: 100px;
        }

        .blog-entry:nth-child(even){
            margin-left: 100px;
        }

        .blog-entry > div h1{
            font-size:1.5em;
            font-weight: bold;
            text-align: center;
        }

        .blog-entry > div p{
            text-align: justify;
        }

        .blog-entry > div a{
            cursor: pointer;
            background-color: #3C97D3;
            border: 1px solid #3C97D3;
            color: white;
            padding: 6px 15px;
            font-size: 16px;
            margin: 5px auto;
            font-weight: bold;
            display: inline-block;
        }

        .blog-entry > div a:hover{
            background-color: white;
            color: #608EC0;
        }

        .blog-entry:nth-child(odd) > img{
            right: 0px;
        }

        .blog-entry:nth-child(even) > img{
            left: 0px;
        }

        .blog-entry *, .blog-entry *:hover{
            text-decoration: none;
        }
    </style>

    @if (Auth::guest())
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-fixed-top" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="" href=""><img src = "{{ URL::asset('images/logo/BBZlogo/bbzlogo_white.svg') }}" width = "40" height = "40" style="margin-top:5px;"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right responsive-nav">
                                <li><a class="page-scroll" href="#about_1">About</a></li>
                                <li><a class="page-scroll" href="#faq">FAQs</a></li>
                                <li><a class="page-scroll" href="#contact">Contact Us</a></li>
                                <li><a href="{{url('/auth/login')}}">Login</a></li>
                                <li><a href="{{url('/auth/register')}}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

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
    @endif
    <div >
        <div class="col-lg-8 text-center">

            <div class="blog_wrap">

                <table class="blog-entry">
                    <tr>

                        <td class="material">
                            <h1>Top 5 Modern Architectural Marvels of India</h1>
                            <p>
                                Construction and architecture have risen to a new level altogether with great minds working enthusiastically towards building India with amazing structures. India prides itself on having some of the most contemporary designs for offices, especially in the IT sector.
                            </p>
                            <a class="read_more" href="http://localhost:8000/showFullBlogs1" target="_blank">READ MORE</a>
                        </td>
                        <td>
                            <img src = "{{ URL::asset('images/blog/1/thumbnail.jpg') }}" class="pic img-thumbnail" >
                        </td>


                    </tr>
                </table>


                <table class="blog-entry">
                    <tr>
                        <td class="material">
                            <h1>Real Estate as an upcoming boom</h1>
                            <p>Indian Real Estate is experiencing a boom not only domestic property (such as house, individual flats and maisonettes) but also in commercial properties (property that is used for business activities). </p>
                            <a href="http://localhost:8000/showFullBlogs2" target="_blank" class="read_more">READ MORE</a>
                        </td>

                        <td>
                            <img src = "{{ URL::asset('images/blog/2/thumbnail.jpg') }}" class="pic img-thumbnail" >
                        </td>

                    </tr>
                </table>


                <table class="blog-entry">
                    <tr>
                        <td class="material">
                            <h1>3D Printing- A new world to come!</h1>
                            <p>3D printing, a recently evolved technology is now being rapidly adopted in the industry of Infrastructure. Not only is it being used to make everyday items such as jewellery or furniture, it is now being used to construct large scale infrastructure projects such as houses & bridges. </p>
                            <a href="http://localhost:8000/showFullBlogs3" target="_blank"  class="read_more">READ MORE</a>
                        </td>

                        <td>
                            <img src = "{{ URL::asset('images/blog/3/thumbnail.jpg') }}" class="pic img-thumbnail">
                        </td>
                    </tr>
                </table>


                <table class="blog-entry">
                    <tr>
                        <td class="material">
                            <h2>Guwahati edged over other cities by experts in terms of earthquake safety</h2>
                            <p>International scientific agency from Norway called NORSAR has in its report states that the resilience of buildings in Guwahati to probable earthquake is far better than buildings studied in other cities of India. (first reported by TheNortEastToday) </p>
                            <a href="http://localhost:8000/showFullBlogs4" target="_blank"  class="read_more">READ MORE</a>
                        </td>

                        <td>
                            <img src = "{{ URL::asset('images/blog/4/thumbnail-01.jpg') }}" class="pic img-thumbnail">
                        </td>
                    </tr>
                </table>


                <table class="blog-entry">
                    <tr>
                        <td class="material">
                            <h1>Green Construction</h1>
                            <p>The green building sector is booming in the industry. Not only is it providing solutions for economics construction, but also is generating large amount of jobs as well.  </p>
                            <a href="http://localhost:8000/showFullBlogs5" target="_blank"  class="read_more">READ MORE</a>
                        </td>

                        <td>
                            <img src = "{{ URL::asset('images/blog/5/thumbnail.jpg') }}" class="pic img-thumbnail">
                        </td>
                    </tr>
                </table>





            </div>

        </div>
    </div>





@stop
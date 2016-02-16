@extends('app')

@section('content')

    <link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">

    <style type="text/css">
        .blog-entry{
            margin: 20px;
            border: 2px solid #f1f1f2;
            height:240px;
            position: relative;
            background: #f9f9f9;
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

        .blog-entry:nth-child(odd) > div{
            margin-right: 240px;
        }

        .blog-entry:nth-child(even) > div{
            margin-left: 240px;
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


                <div class="blog-entry">
                    <div>
                        <h1>Top 5 Modern Architectural Marvels of India</h1>
                        <p> Construction and architecture have risen to a new level altogether with great minds working enthusiastically towards building India with amazing structures. India prides itself on having some of the most contemporary designs for offices, especially in the IT sector.
 </p>
                        <a onclick = "blog_open(1);">READ MORE</a>
                    </div>
                    <img src = "{{ URL::asset('images/blog/1/thumbnail.jpg') }}" >
                </div>


                <div class="blog-entry">
                    <div>
                        <h1>Real Estate as an upcoming boom</h1>
                        <p>Indian Real Estate is experiencing a boom not only domestic property (such as house, individual flats and maisonettes) but also in commercial properties (property that is used for business activities). </p>
                        <a onclick = "blog_open(2);">READ MORE</a>
                    </div>
                    <img src = "{{ URL::asset('images/blog/2/thumbnail.jpg') }}" >
                </div>


                <div class="blog-entry">
                    <div>
                        <h1>3D Printing- A new world to come!</h1>
                        <p>3D printing, a recently evolved technology is now being rapidly adopted in the industry of Infrastructure. Not only is it being used to make everyday items such as jewellery or furniture, it is now being used to construct large scale infrastructure projects such as houses & bridges. </p>
                        <a onclick = "blog_open(3);">READ MORE</a>
                    </div>
                    <img src = "{{ URL::asset('images/blog/3/thumbnail.jpg') }}" >
                </div>


                <div class="blog-entry">
                    <div>
                        <h1>Guwahati edged over other cities by experts in terms of earthquake safety</h1>
                        <p>International scientific agency from Norway called NORSAR has in its report states that the resilience of buildings in Guwahati to probable earthquake is far better than buildings studied in other cities of India. (first reported by TheNortEastToday) </p>
                        <a onclick = "blog_open(4);">READ MORE</a>
                    </div>
                    <img src = "{{ URL::asset('images/blog/4/thumbnail-01.jpg') }}" >
                </div>


                <div class="blog-entry">
                    <div>
                        <h1>Green Construction</h1>
                        <p>The green building sector is booming in the industry. Not only is it providing solutions for economics construction, but also is generating large amount of jobs as well.  </p>
                        <a onclick = "blog_open(5);">READ MORE</a>
                    </div>
                    <img src = "{{ URL::asset('images/blog/5/thumbnail.jpg') }}" >
                </div>





            </div>

        </div>
    </div>
    <div id = "blog_1_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <span id = "blog_pop_close" class = "blog_pop_close" onclick = "blog_close();">
                <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/1/cover.jpg') }}" >
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>Top 5 Indian Architectural Marvels</h1>
                <p>
                    Construction and architecture have risen to a new level altogether with great minds working enthusiastically towards
                    building India with amazing structures. India prides itself on having some of the most contemporary designs for
                    offices, especially in the IT sector.
                </p>

                <p>
                    It's amazing how modern architecture is changing the look of India, with the infrastructure boom in play we see new shapes
                    and beautiful looking buildings cropping up all around India.
                </p>
                <p>
                    Here is the list of such 10 buildings: <br>
                <ol>
                    <li>International Tech Park, Bangalore</li>
                    <dd>
                        Commonly called ITPL and sometimes <i><a href="http://www.itpbangalore.com/">ITPB</a></i> is a tech park located in Whitefield, Bangalore.
                        It features several sporting arenas along with <i><a href="link: http://www.vivantabytaj.com/whitefield-bangalore/overview.html">The Vivanta by Taj Hotel</a>.</i>
                        It was created as a result of a joint venture between <i>India</i> and <i>Singapore</i> in January 1994. It is a large facility, comprising
                        9 buildings-<i>Discoverer, Innovator, Creator, Explorer, Inventor, Navigator, Voyager</i> and <i>Aviator</i> plus a building belonging to TCS
                        which is called <i>Pioneer</i>. The tenth building which is under construction will be called "<i>Victor</i>".<br>
                        With about 140 stores in the Park Square, spread over an area of about 450,000 sq. ft., this 4 floor building is amongst the leading architectural
                        marvels of India.
                        <center>
                            <img src = "{{ URL::asset('images/blog/1/1.jpg') }}" >
                        </center>
                    </dd>

                    <li>Imperial SD Tower, Mumbai</li>
                    <dd>
                        <i><a href="http://imperialtowers.in/">Imperial SD Tower</a></i> a twin tower, residential skyscraper and is currently ranked as the highest completed
                        architectural structure in India. With 61 floors and a height of 254 meters the building is designed by the popular Indian
                        Architect, <i><a href="http://www.hafeezcontractor.com/">Hafeez Contractor</a></i>, making his one of the most recognizable project to date.
                        It has a floor area of 1,300,000 sq. ft., with 17 elevators and several other up-to date technologies used The Imperial stands
                        out as an example in the Indian architectural marvels built to date.
                    </dd>
                    <center>
                        <img src = "{{ URL::asset('images/blog/1/2.jpg') }}" >
                    </center>
                    <li>Lokhandwala Minerva</li>
                    <dd>
                        Lokhandwala Minerva is an 82-floor supertall skyscraper under construction in Mumbai, Maharashtra. It will have two towers of
                        82 floors each which will encompass parking floors from 2nd to 16th, Podium Garden on 17th floor, residential floors on 26th to 79th, service
                        floor on 80th and penthouse on 81, 82 and terrace (<i><a href="https://en.wikipedia.org/wiki/Lokhandwala_Minerva">Wikipedia</a></i>).
                        It is built on a slum land, which was acquired by the builders using re-development models which include providing free land and rehabilitation.
                    </dd>
                    <center>
                        <img src = "{{ URL::asset('images/blog/1/3.jpg') }}" >
                    </center>
                    <li>One Avighna Park</li>
                    <dd>
                        One Avighna Park is a cluster redevelopment project, and is envisaged to house- Twin 64-storey Luxury Residential Towers, One 40-storey
                        Hospitality/Commercial Tower & Seven Rehabilitation Towers in Mumbai, Maharashtra. The project in already under construction, with 51
                        out of 64 proposed floors completed till date and is expected to launch by this year.
                        The building is also pre-certified as a <a href="https://igbc.in/igbc/redirectHtml.htm?redVal=showratingSysnosign"><i>Platinum Rated Green Building</i></a>
                        by <a href="https://www.igbc.in"><i>IGBC</i></a>. It was also awarded <a href="http://www.careratings.com/grading/real-estate-star-rating.aspxs"><i>7 star rating by CARE</i></a>
                        in <a href="http://www.careratings.com/upload/grading/PressReport/One%20Avighna%20Park_RR_June%202014.pdf"><i>Real Estate Category-2014 </i></a>.
                        With several <a href="https://en.wikipedia.org/wiki/One_Avighna_Park"><i>other awards</i></a> in the bag, the estimated cost of construction
                        is $280 million (approx. 1800 crores INR).
                    </dd>
                    <center>
                        <img src = "{{ URL::asset('images/blog/1/4.jpg') }}" >
                    </center>
                    <li>Ramoji Film City</li>
                    <dd>
                        Located in Hyderabad, with an area of about 2000 acres <a href = "http://ramojifilmcity.com/">Ramoji Film City</a> is the largest integrated
                        Film City in the world. Established by Indian Film producer Ramoji Rao in 1996, the facility has been certified by The Guinness
                        Book of World Records as the <a href="http://www.guinnessworldrecords.com/world-records/largest-film-studio?fb_comment_id=865433920154580_944989305532374"><i>
                                world's largest film studio complex</i></a>.
                    </dd>
                    <center>
                        <img src = "{{ URL::asset('images/blog/1/5.jpg') }}" >
                    </center>
                </ol><br><br>
                <i>Source:</i> Team Buildblockz
            </div>
        </div>
    </div>
    <div id = "blog_2_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <span id = "blog_pop_close" class = "blog_pop_close" onclick = "blog_close();">
                <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/2/cover.jpg') }}" >
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>
                    Real Estate as an upcoming boom
                </h1>
                <p>
                    Indian Real Estate is experiencing a boom not only domestic property (such as house, individual flats and
                    maisonettes) but also in commercial properties (property that is used for business activities).
                    Real estate is currently the fourth-largest sector in the country in terms of Foreign Direct Investment (FDI) inflows.
                    Total FDI in the construction development sector during April 2000-May 2015 stood at around US$ 24.07 billion.
                </p>
                <p>
                    The Indian Government has been supportive towards the industry and thus there been massive developments in recent times
                    regarding policies and projects. In August 2015, the Union Cabinet approved 100 Smart City Projects in India. The Government
                    has also raised FDI limits for townships and settlements development projects to 100 per cent. Real estate projects within
                    the Special Economic Zone (SEZ) are also permitted 100 per cent FDI. In Union Budget 2015-16, the government allocated US$ 3.72 billion
                    for housing and urban development.<br>
                <center>
                    <img src = "{{ URL::asset('images/blog/2/1.jpg') }}" style = "width:80%;height:auto;">
                </center>
                    There are many factors responsible for this boom in the Indian Real Estate Sector. In recent years, India real estate
                    has been in a flourishing stage in not only the Tier 1 cities of India, but also in other Indian cities. Some of the key
                    factors responsible for this are increase in the population level, emergence of nuclear families & rapid urbanization.
                    The presence of NRIs and their interest in investing in the Indian real estate market as well as the liberalization policies taken
                    up by the Indian government to encourage the 100% FDI participation have contributed greatly in rapid growth of the sector. International
                    as well as domestic real estate developers have also contributed immensely to prospering Indian Real Estate Market.
                    India's real estate market is expected to grow two-fold from US$ 93.8 billion in 2014 to an estimated US$ 180 billion in 2020.
                </p>

                <i>Sources</i>: <a href="http://www.ibef.org/industry/indian-real-estate-industry-analysis-presentation">IBEF</a>,
                <a href="http://business.mapsofindia.com/india-real-estate/boom.html#sthash.rAzDNqPg.dpuf">Maps of India</a>
            </div>
        </div>
    </div>
    <div id = "blog_3_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <span id = "blog_pop_close" class = "blog_pop_close" onclick = "blog_close();">
                <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/3/cover.jpg') }}" >
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1> 3D Printing- A new world to come!</h1>
                <p>
                    3D printing, a recently evolved technology is now being rapidly adopted in the industry of
                    Infrastructure. Not only is it being used to make everyday items such as jewellery or furniture, it is
                    now being used to construct large scale infrastructure projects such as houses & bridges.
                </p>
                <p>
                    WinSun, a Chinese private firm, has used giant 3D printers to make 10 detached single storey houses
                    in a day. It has used four 10m x 6.6m printers to spray a mixture of cement and construction waste
                    to build the walls, layer by layer, official Xinhua news agency reported.
                </p>
                <center>
                    <iframe width = "650" height = "350"   src="https://www.youtube.com/embed/SObzNdyRTBs" frameborder="0" allowfullscreen></iframe>
                </center>
                <p>
                    Since all work is automated &amp due to the cheap material used, each house can be printed for under
                    $5000. "We can print buildings to any digital design our customers bring us. It's fast and cheap," says
                    WinSun chief executive Ma Yihe. The company hopes that one day, their technology will be used to
                    build skyscrapers all around the world. However, the current laws in China do not allow
                    multi-storey 3D printed houses.
                </p>
                <p>
                    On the other side of the world, a leading technology start-up, MX3D is under the process of
                    developing world's first 3-D printed bridge over an Amsterdam canal. Co-founded by Joris Laarman and
                    Tim Geurtjens, the company plans to use robots to complete the task in a fast and effective manner.
                    The use of robots fulfils the dual expectation of precision and cost saving. The steel footbridge
                    will span eight meters and is expected to be completed by 2017. "The bridge is going to be fairly
                    small - it's a pedestrian bridge," Laarman says. "It's still a huge challenge, because we want to print
                    it in one go. We want the robots to print their own support structure as they move over the water."
                </p>
                <center>
                    <iframe width = "650" height = "350" src="https://www.youtube.com/embed/SEaht2tQ8P8" frameborder="0" allowfullscreen></iframe>
                </center>
                <p>
                    The six-axis robots MX3D are using, are able to rotate their arms along six different planes of
                    movements, depositing small quantities of steel and building the bridge layer by layer. MX3D
                    originally intended to print the bridge in situ, but had to abandon that plan over health and safet
                    concerns.
                </p>
                <p>
                    Such examples showcase that 3D printing in the infrastructure industry is not only a fast & effective
                    approach, but also a commercially feasible one. 3D printing in India is an exciting prospect as it is
                    completely virgin and the most exciting use cases of 3D printing in a rural or social context is bound
                    to come out of India.
                    <br>
                    How soon it will be adopted in the industry, only time can tell.
                </p><br>
                <i>Sources</i>:<br><a href="http://thetechpanda.com/2014/01/07/3d-printing-opportunities-challenges-future-india/#.VpiWwPl97IU">3D Printing &ndash; Opportunities, Challenges and the Future in India: <i>Tech Panda</i>
                    <br><a href="http://www.bbc.com/news/blogs-news-from-elsewhere-27156775">China: Firm 3D prints 10 full-sized houses in a day: <i>BBC News</i>
                        <br><a href="http://www.dezeen.com/2016/01/13/video-interview-robots-worlds-first-3d-printed-bridge-mx3d-joris-laarman-movie/">Producing the world's first 3D-printed bridge with robots "is just the beginning": <i>Dezeen</i></a>
            </div>
        </div>
    </div>
    <div id = "blog_4_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <span id = "blog_pop_close" class = "blog_pop_close" onclick = "blog_close();">
                <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/4/cover.jpg') }}" >
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>Guwahati edged over other cities by experts in terms of earthquake safety</h1>
                <p>
                    International scientific agency from Norway called NORSAR has in its report states that the resilience
                    of buildings in Guwahati to probable earthquake is far better than buildings studied in other cities of India. (first reported by <i>TheNortEastToday</i>)
                </p>
                <p>
                    This project examined aprox. 16,000 buildings samples in Guwahati. Experts from Norway and Assam
                    Engineering College have imposed simulated earthquakes like the Nepal earthquake or even bigger
                    including the Great Assam earthquake of 1897 and 1950 and their impact on these buildings. They
                    have just concluded their studies and submitted their final report which states that the resilience
                    power of buildings in Guwahati to probable earthquake is far better than buildings studied in
                    other cities of India.
                </p>
                <p>
                    In Guwahati, no high rise building can be constructed without the services of licensed; architects,
                    engineers, structural engineers, geotechnical engineers and field supervisors. The design prepared by
                    the Structural Engineer has to be vetted by a Structural Design Review Panel like IIT Guwahati and
                    Assam Engineering College.
                    <br>
                    P.K Sharma, President of AREIDA has said, “Assam must learn to live with earthquakes; and Guwahati
                    cannot escape high rise buildings due to scarcity and affordability of residential land.”
                </p><br>
                <i>Source</i>: <a href="http://thenortheasttoday.com/buildings-of-guwahati-safer-than-others-in-the-countrynorway-experts-on-earthquake/">Buildings of Guwahati safer than others in the country:Norway experts on earthquake</a>: <i>(TheNorthEastToday)</i>
            </div>
        </div>
    </div>
    <div id = "blog_5_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <span id = "blog_pop_close" class = "blog_pop_close" onclick = "blog_close();">
                <img src = "{{ URL::asset('images/close.png') }}" width = "25" height = "25">
            </span>
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/5/cover.jpg') }}" >
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>Green Construction</h1>
                <p>
                    The green building sector is booming in the industry. Not only is it providing solutions for
                    economics construction, but also is generating large amount of jobs as well. According to a
                    recent USGBC study from  Booz Allen Hamilton, the growth rate of green construction is
                    rapidly outpacing those of conventional construction and will continue to rise.
                </p>
                <p>
                    The sector accounted for more than 2.3 million American Jobs in 2015 according to a
                    recent U.S. Green Building Council (USGBC) study from <a href="https://www.journalism.co.uk/press-releases/learn-more-about-austrian-green-construction-summer-programme-at-ecobuild/s66/a600999/"><i>
                            Booz Allen Hamilton</i></a>.
                    "Green building is playing a massive role in the U.S. construction sector, the clean and
                    efficient energy sector and the U.S. economy as a whole," said Rick Fedrizzi (CEO and
                    founding chair of the USGBC), "More than 2.3 million U.S. workers are taking home $134
                    billion annually in large part because of green building programs like LEED. Demand for
                    green building will only continue to grow as individuals, businesses and institutions continue
                    to prioritize sustainable approaches to the design, construction and operations of our built
                    environment."
                    It has been estimated in the same report that by 2018, the green construction will account
                    for more than 3.3 million U.S. jobs which is more than one third of the entire construction
                    industry. It currently chips in more than $130 billion in labor income for working
                    Americans!
                    Green construction is a process of finding a delicate balance between construction and
                    sustainable development/environment. It is the use of resources involved in construction
                    more efficiently while creating more energy efficient structures.
                </p>
                <p>
                    In simpler words, <a href="http://www.greenbuildingsolutions.org/Main-Menu/What-is-Green-Construction"><i>green building</i></a>
                    is one which uses less water, optimises energy efficiency,
                    conserves natural resources, generates less waste and provides healthier spaces for
                    occupants, as compared to a conventional building.
                    Success can be measured by the measure of footprint left on the environment by the
                    project. It can be minimised through conservation of resources and through use of energy
                    efficient, cost-effective & low maintenance products for all construction needs.
                </p>
                <p>
                    Green construction can be seen making an impact in India as well.
                    The IFC, a member of the World Bank Group, and the Confederation of Real Estate
                    Developers' Associations of India (CREDAI), apex body of private real estate developers,
                    have partnered to promote green buildings in the country through IFC's EDGE certification.
                    An MoU was signed in the presence of Minister for Environment and Forests Prakash
                    Javadekar on November 25, 2014.
                </p>
                <p>
                    In Tamil Nadu, the government is planning to build solar-powered green houses for rural
                    poor. It has allotted Rs. 1,080 crore for construction of 60,000 houses.
                    In Maharashtra, near Mumbai in the Thane District, Govardhan Eco Village, a community in
                    India, has built buildings with compressed stabilized Earth blocks, Rammed Earth Technique,
                    Cob Houses(ADOBE Bricks) with traditional thatched roofs. These buildings have received a
                    five-star rating from <a href="http://www.grihaindia.org/index.php?option=com_content&view=article&id=87"><i>GRIHA</i></a>, an Indian Nationwide Green Standards for Buildings, a wing of
                    the famous TERI.
                </p>
                <p>
                    These examples showcase the ability of the Indian market & economy to blend into latest
                    trends of construction industry. One can safely assume that in the coming time, Green
                    Construction will play a vital role not only in the Indian market but at a global level and will
                    surely change many aspects of construction practices.
                </p>
                <i>Sources</i> : <a href="https://en.wikipedia.org/wiki/Green_building_in_India">Wikipedia</a>, <a href="http://www.proudgreenbuilding.com/news/study-green-construction-major-us-economic-driver/">Proud Green Building</a>
            </div>
        </div>
    </div>
    <script>
        function blog_open(x){
            if(x == 1)
                $("#blog_1_form_head").show();
            if(x == 2)
                $("#blog_2_form_head").show();
            if(x == 3)
                $("#blog_3_form_head").show();
            if(x == 4)
                $("#blog_4_form_head").show();
            if(x == 5)
                $("#blog_5_form_head").show();
        }
        function blog_close(){
            $(".blog_pop").hide();
        }
    </script>
    <script type="text/javascript" src="res/js/jquery.min.js"></script>
    <script type="text/javascript" src="res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="res/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="res/js/scrolling-nav.js"></script>
@stop
@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/showFullBlogs1.css') }}">


    <!--showFullBlogs1 starts-->

    <div id="blog_1_form_head" class="blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/1/cover.jpg') }}" class="display_images_cover img-thumbnail">
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>Top 5 Indian Architectural Marvels</h1>

                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" target="_blank">
                    Share on Facebook
                </a>

                <a href="ttps://www.linkedin.com/cws/share?url=<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" target="_blank">
                    Share on Linkedin
                </a>

                <a href="https://twitter.com/share?url=<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" target="_blank">
                    Share on Twitter
                </a>



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
                    <li class="individual_headings">International Tech Park, Bangalore</li>
                    <p>
                        Commonly called ITPL and sometimes <i><a href="http://www.itpbangalore.com/">ITPB</a></i> is a tech park located in Whitefield, Bangalore.
                        It features several sporting arenas along with <i><a href="link: http://www.vivantabytaj.com/whitefield-bangalore/overview.html">The Vivanta by Taj Hotel</a>.</i>
                        It was created as a result of a joint venture between <i>India</i> and <i>Singapore</i> in January 1994. It is a large facility, comprising
                        9 buildings-<i>Discoverer, Innovator, Creator, Explorer, Inventor, Navigator, Voyager</i> and <i>Aviator</i> plus a building belonging to TCS
                        which is called <i>Pioneer</i>. The tenth building which is under construction will be called "<i>Victor</i>".<br>
                        With about 140 stores in the Park Square, spread over an area of about 450,000 sq. ft., this 4 floor building is amongst the leading architectural
                        marvels of India.
                        <div class="display_images_wrapper">
                            <img src = "{{ URL::asset('images/blog/1/1.jpg') }}" class="display_images img-thumbnail">
                        </div>
                    </p>

                    <li class="individual_headings">Imperial SD Tower, Mumbai</li>
                    <p>
                        <i><a href="http://imperialtowers.in/">Imperial SD Tower</a></i> a twin tower, residential skyscraper and is currently ranked as the highest completed
                        architectural structure in India. With 61 floors and a height of 254 meters the building is designed by the popular Indian
                        Architect, <i><a href="http://www.hafeezcontractor.com/">Hafeez Contractor</a></i>, making his one of the most recognizable project to date.
                        It has a floor area of 1,300,000 sq. ft., with 17 elevators and several other up-to date technologies used The Imperial stands
                        out as an example in the Indian architectural marvels built to date.
                    </p>
                    <div class="display_images_wrapper">
                        <img src = "{{ URL::asset('images/blog/1/2.jpg') }}" class="display_images img-thumbnail">
                    </div>
                    <li class="individual_headings">Lokhandwala Minerva</li>
                    <p>
                        Lokhandwala Minerva is an 82-floor supertall skyscraper under construction in Mumbai, Maharashtra. It will have two towers of
                        82 floors each which will encompass parking floors from 2nd to 16th, Podium Garden on 17th floor, residential floors on 26th to 79th, service
                        floor on 80th and penthouse on 81, 82 and terrace (<i><a href="https://en.wikipedia.org/wiki/Lokhandwala_Minerva">Wikipedia</a></i>).
                        It is built on a slum land, which was acquired by the builders using re-development models which include providing free land and rehabilitation.
                    </p>
                    <div class="display_images_wrapper">
                        <img src = "{{ URL::asset('images/blog/1/3.jpg') }}" class="display_images img thumbnail">
                    </div>
                    <li class="individual_headings">One Avighna Park</li>
                    <p>
                        One Avighna Park is a cluster redevelopment project, and is envisaged to house- Twin 64-storey Luxury Residential Towers, One 40-storey
                        Hospitality/Commercial Tower & Seven Rehabilitation Towers in Mumbai, Maharashtra. The project in already under construction, with 51
                        out of 64 proposed floors completed till date and is expected to launch by this year.
                        The building is also pre-certified as a <a href="https://igbc.in/igbc/redirectHtml.htm?redVal=showratingSysnosign"><i>Platinum Rated Green Building</i></a>
                        by <a href="https://www.igbc.in"><i>IGBC</i></a>. It was also awarded <a href="http://www.careratings.com/grading/real-estate-star-rating.aspxs"><i>7 star rating by CARE</i></a>
                        in <a href="http://www.careratings.com/upload/grading/PressReport/One%20Avighna%20Park_RR_June%202014.pdf"><i>Real Estate Category-2014 </i></a>.
                        With several <a href="https://en.wikipedia.org/wiki/One_Avighna_Park"><i>other awards</i></a> in the bag, the estimated cost of construction
                        is $280 million (approx. 1800 crores INR).
                    </p>
                    <div class="display_images_wrapper">
                        <img src = "{{ URL::asset('images/blog/1/4.jpg') }}" class="display_images img-thumbnail">
                    </div>
                    <li class="individual_headings">Ramoji Film City</li>
                    <p>
                        Located in Hyderabad, with an area of about 2000 acres <a href = "http://ramojifilmcity.com/">Ramoji Film City</a> is the largest integrated
                        Film City in the world. Established by Indian Film producer Ramoji Rao in 1996, the facility has been certified by The Guinness
                        Book of World Records as the <a href="http://www.guinnessworldrecords.com/world-records/largest-film-studio?fb_comment_id=865433920154580_944989305532374"><i>
                                world's largest film studio complex</i></a>.
                    </p>
                    <div class="display_images_wrapper">
                        <img src = "{{ URL::asset('images/blog/1/5.jpg') }}" class="display_images img-thumbnail">
                    </div>
                </ol><br><br>
                <i>Source:</i> Team Buildblockz
            </div>
        </div>
    </div>

    <!--showFullBlogs1 ends-->

@stop
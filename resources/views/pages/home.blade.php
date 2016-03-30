@extends('app')

@section('content')

    <link rel="stylesheet" type="text/css" href="res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/styles.css">


<!--home landing -page starts-->

<!--home landing_page ends-->






@if (Auth::guest())
@else
    <script>
        window.location.href = "{{ url('/status') }}";
    </script>
@endif

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


<div class="ankur-section" id="top">
    <div>
        <div id="top_1">
            <img id="top_text_image" src="res/img/text.svg">
            <br>
            <center><a id="top_text" href="">Read More</a></center>
        </div>
        <img id="top_scene" src="res/img/scene.svg">
    </div>
</div>

<div class="ankur-section" id="about">

        <div class="" id="about_1">
            <img id = "about_1_image" src = "images/home_about.jpg">
            <div class="" id="about_1_text">

            <h2>What we do?</h2>
            <p style="font-size: 16px;">
                We at BuildBlockz.com would be lying if we say real-estate runs in our blood, when it's actually the other way round.
                Landing a dream home could quickly become a nightmare if anything goes awry in the concrete jungle food chain. To ensure that it doesn't, BuildBlockz brings everyone in the food chain on a common platform - from builders to contractors and architects to interior designers.
                We are a targeted professional network that aims to create a synergy between different stake-holders in the real-estate sector via connections and specializations. As real-estate revolves everyday, we keep our users updated every minute by recommending the latest trends based on their affordability and feasibility.
                Block by block we are revamping real-estate the way everyone sees it.<br><br>
                <center><a id="about_readmore" href="">Read More</a></center>
            </p>
            </div>
        </div>
        {{--<div id="about_2" >--}}
            {{--<img id="about_image" src="images/home_about.jpg">--}}
        {{--</div>--}}
</div>

<div class="ankur-section" id="faq">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br><br>
                    <h2 class="ankur-section-heading">Frequently Asked Questions</h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="faq">
                    <div class="dt">
                        <p>What is bbz workstation?</p>
                    </div>
                    <div class="dd">
                        <p>Bbz workstation is an online targeted professional network for real-estate indust
                        ry executives, such
                        as, builders, architects, interior designers, contractors, structural engineers
                        etc. It’s an innovative way to
                        collaborate, meet people and stay updated with the market trends.           </p>          </div>
                    <div class="dt">
                        <p> Who all can create an account on Buildblockz.com?</p>
                    </div>
                    <div class="dd">
                        <p> The current version of the website caters to the following professions:-<br>
                            Builder<br>
                            Architect<br>
                            Interior Designer<br>
                            Contractor<br>
                            Structural Engineer<br>
                            Civil Engineer<br>
                            However, if you're unable to suit anyone of these categories, please do inform us at
                            <a href = "">info@buildblockz.com</a>
                            , so that we can process it further. </p>
                    </div>

                    <div class="dt">
                        <p>What is Buildblockz.com trying to do?</p>
                    </div>
                    <div class="dd">
                        <p>Well that
                            ’
                            s a tricky question. Buildblockz is trying to ease networking in the real-
                            estate professional
                            industry along with trying its best to keep its users updated with the latest
                            industry trends and serve as a
                            one-stop solution for all their problems. Whether it be looking for t
                            enders or finding a client, or may be
                            even exploring the marketplace, the latest products, trending products an
                            d not only this you get a
                            chance to find people to work with via fruitful connections. </p>
                    </div>
                    <div class="dt">
                        <p> How do I switch to bbz marketplace? / I’m unable to find bbz marketplace! / Where are the product catalogs?
                        </p>
                    </div>
                    <div class="dd">
                        <p> Marketplace will be launched soon.Clicking on the red slider bar towards the extreme left of the screen, you’ll find a “bbz marketplace” option. Switching between products and services is very easy with bbz. </p>
                    </div>

                    <div class="dt">
                        <p>                        <p> Marketplace will be launched soon. </p>
                        </p>
                    </div>
                    <div class="dd">
                        <p>Since, we’re launched newly in the Indian ecosystem, it’ll take time for us to reach out to masses. But we definitely thank you for being an early adopter and supporting bbz right from its inception. </p>
                    </div>
                    <div class="dt">
                        <p> Who all can see my Personal Information/ Contact Information?</p>
                    </div>
                    <div class="dd">
                        <p> This can be controlled in the Privacy Settings options. (To be updated soon) </p>
                    </div>

                    <div class="dt">
                        <p>Is there any usage/ subscription fee?
                        </p>
                    </div>
                    <div class="dd">
                        <p> No! All professionals can create a user account on buildblockz.com for FREE!
                        </p>
                    </div>
                    <div class="dt">
                        <p>Who takes responsibility of the Tender information displayed on the website?</p>
                    </div>
                    <div class="dd">
                        <p> Buildblockz scans several websites and newspapers to prepare its exhaustive list of available tenders with their information details. We’re doing this to the best of our knowledge and shall not be liable for harm/ loss caused due to the information displayed on the website. We have also mentioned the source we’ve picked them from. To confirm we will encourage our users to visit the host website.</p>
                    </div>
                    <div class="dt">
                        <p>Who can view my Projects?</p>
                    </div>
                    <div class="dd">
                        <p> All the information that has been set to public in the Privacy Settings shall be visible to all member on the bbz workstation as well as bbz marketplace. For more details refer to this section : LINK TO PRIVACY SETTINGS  NOTE: You must be logged in, in order to make changes in the Privacy Settings.</p>
                    </div>
                    <div class="dt">
                        <p>How can I delete my account?/ How do I erase all the information on my account?</p>
                    </div>
                    <div class="dd">
                        <p>In order to de-activate or remove your account, please contact our support team (LINK TO CONTACT DETAILS). You even have an option to temporarily make your account unavailable and get it live back when you desire. For further assistance on the issue write to us at <a href = "">info@buildblockz.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="contact" class="ankur-section">
    <center id="contact_content">
        <div id="contact_content_map">
            <iframe class="contact_content_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114563.71402548246!2d91.62502565522583!3d26.19290248344291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5ac1e7cc93d5%3A0xbf481e3cfc490e1!2sIndian+Institute+of+Technology+Guwahati!5e0!3m2!1sen!2sin!4v1453249547584"  frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <div id="contact_content_form">
            {!! Form::open(['action' => 'PagesController@contactUs','class' => 'form-horizontal','id' => 'contact_form']) !!}

                <fieldset>

                    <!-- Form Name -->
                    <legend class="ankur-section-heading">Contact Us</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <input id="name" name="name" type="text" placeholder="Enter your full name here" class="form-control input-md" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-mail</label>
                        <input id="email" name="email" type="text" placeholder="Enter your E-mail ID here" class="form-control input-md" required="">
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Message</label>
                        <textarea class="form-control" id="msg" name="message" cols="24" rows="" style="width: 297px; height: 100px;" placeholder = "Enter your message here"></textarea>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button onclick="success(event)" id="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </center>


</div>
<div>
    <h3 class="">&nbsp;&nbsp;&nbsp;Team Members</h3>
    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karan Rajwanshi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ravi Kumar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jitendra Choudhary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amrit Lenka&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tulika Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swapnil Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vishal Kumar </div>
</div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tech Advisor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tech Advisor</div>

<footer style = "background: #3C97D3;">
<footer>
    <p class="pull-right"><a class="page-scroll" href="#top">Back to top</a></p>
    <p>&copy; 2016, BuildBlockz Inc. &middot; <a href="">Privacy Policy</a> &middot; <a href="">Terms &amp; Conditions</a> &middot; <a href="">Web Developer</a></p>
</footer>
<script>
    var topDiv = document.getElementById("top");
    var speed = 1.5;

    window.onscroll = function()
    {
        var yOffset = window.pageYOffset;
        topDiv.style.posTop = "0px "+ (yOffset / speed) + "px";
    }


    function success(event){
        alert('Your message is recorded. Thanx!');
    }


</script>


<script type="text/javascript" src="res/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="res/js/scrolling-nav.js"></script>
@stop

<!DOCTYPE html>
<html lang="en">
<head>

    <script>
        //redirect domain url
       /* var x = window.location.href.search("http://www.");
        if(x<0){
            window.location.href.replace('http://','http://www.');
        }*/
    </script>

    <link rel="icon" type="image/ico" href="/images/logo/BBZlogo/bbzlogo_blue.svg"/>
    <title>BBz-Workstation A professional network for Real Estate</title>



    <!-- Normal Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <meta content="email=no" name="format-detection"><meta content="follow,index" name="robots"><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Boosting professional network among Real Estate's wild cards i.e. Architect, Builder, Contractor " name="description">
    <meta name="robots" content="noodp,noydir" />
    <meta name="keywords" content="b, bbz, buildblockz, buildblockz.com, real estate, professional network, builder, contractors, architects, interior designer, tenders, byelaws, bylaws, connection ">



    <!-- Facebook opengraph meta -->
    <meta property="og:title" content="Real Estate-Professional Network" />
    <meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Create an account or log in to Bbz workstation.Bbz workstation is an online targeted professional network for real-estate industry executives, such as, builders, architects, interior designers, structural engineers etc. It’s an innovative way to collaborate, meet people and stay updated with the market trends." />
    <meta property="og:image" content="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_blue.svg" />
    <meta property="og:locale" content="en_US" />



    <!-- Twitter opengraph meta-->
    <meta name="twitter:card" content="product" />
    <meta name="twitter:title" content="Real Estate-Professional Network" />
    <meta name="twitter:description" content="Bbz workstation is an online targeted professional network for real-estate industry executives, such as, builders, architects, interior designers, contractors, structural engineers etc. It’s an innovative way to collaborate, meet people and stay updated with the market trends." />
    <meta name="twitter:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
    <meta name="twitter:image" content="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_blue.svg" />
    <meta name="twitter:site" content="@BuildBlockz" />



    <!-- Fonts -->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/right.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css') }}" rel="stylesheet">

	<style>
		body{
			font-family: Raleway;
		}
	</style>
	<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
	<script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>

    <script type="text/javascript">
        (function() {
            var hm = document.createElement('script'); hm.type ='text/javascript'; hm.async = true;
            hm.src = ('++u-heatmap-it+log-js').replace(/[+]/g,'/').replace(/-/g,'.');
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hm, s);
        })();
    </script>


</head>
<body>
@include ('partials.nav')


<center id = "main_body" class = "main_body" style = "">
	@include('flash::message')

	@yield('content')



</center>

<script src="//code.jquery.com/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/lightbox.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('.profile_1 a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 100
			}, 700,'easeInOutExpo');
			/*
			 if you don't want to use the easing effects:
			 $('html, body').stop().animate({
			 scrollTop: $($anchor.attr('href')).offset().top
			 }, 1000);
			 */
			$anchor.parent().children().removeClass("profile_1_active");
			$anchor.addClass("profile_1_active");
			event.preventDefault();
		});



//		$('.search-results-list').bind('click',function(){
//			alert("ee");
//			var anchor = $(this).html();
//			$('#search-input').val(anchor);
//		});






	});



</script>
<script type="text/javascript" src ="{{ URL::asset('js/search.js') }} "></script>
<script type="text/javascript" src = "{{ URL::asset('js/main.js') }}" ></script>


</body>
</html>
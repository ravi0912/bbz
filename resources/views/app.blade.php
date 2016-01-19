<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="icon" type="image/ico" href="/images/logo/BBZlogo/bbzlogo_blue.svg"/>
    <title>BBz-Workstation A professional network for Real Estate</title>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"><meta content="email=no" name="format-detection"><meta content="follow,index" name="robots"><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Boosting professional network among Real Estate's wild cards i.e. Architect, Builder, Contractor " name="description">




	<!-- Fonts -->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/right.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: Raleway;
		}
	</style>
	<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
	<script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
</head>
<body>
@include ('partials.nav')


<center id = "main_body" class = "main_body" style = "">
	@include('flash::message')

	@yield('content')



</center>

<script src="//code.jquery.com/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
	$('#flash-overlay-modal').modal();
</script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('.profile_1 a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 107
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
<script type="text/javascript" src = "{{ URL::asset('js/profile.js') }}" ></script>

</body>
</html>
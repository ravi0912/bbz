<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/ico" href="/images/logo.ico"/>
	<title>BBz-Business</title>



	<!-- Fonts -->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: Raleway;
		}
	</style>
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
				scrollTop: $($anchor.attr('href')).offset().top - 95
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
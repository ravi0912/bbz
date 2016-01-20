
function skill_remove_current() {
	$anchor = $(this).parent();
	$anchor.hide();
}

function cancel_change(p) {



	$('html, body').stop().animate({
		scrollTop: $(p).offset().top - 100
	}, 1500,'easeInOutExpo');
	/*
	 if you don't want to use the easing effects:
	 $('html, body').stop().animate({
	 scrollTop: $($anchor.attr('href')).offset().top
	 }, 1000);
	 */
	$anchor.parent().children().removeClass("profile_1_active");
	$anchor.addClass("profile_1_active");
	event.preventDefault();
}
function profile_3_education (x) {


	var h = '#';
	var d = '_content_display';
	var f = '_content_form';


	if(x == 1){
		var p = 'profile_3_education';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 2){
		var p = 'profile_3_education';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);

	}
	if(x == 3){
		var p = 'profile_3_experience';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");

	}
	if(x == 4){
		var p = 'profile_3_experience';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
	if(x == 5){
		var p = 'profile_3_skill';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 6){
		var p = 'profile_3_skill';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
	if(x == 7){
		var p = 'profile_3_project';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 8){
		var p = 'profile_3_project';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
}

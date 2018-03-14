/* =================================
------------------------------------
	Labs - Design Studio
	Version: 1.0
 ------------------------------------ 
 ====================================*/

'use strict';

var app_url = "http://goldsgymfias.com/";

/*------------------
	Preloder
--------------------*/
function loader() {
	$(window).on('load', function() { 
		$(".loader").fadeOut(); 
		$("#preloder").delay(400).fadeOut("slow");
	});
}



/*------------------
	Navigation
--------------------*/
function responsive() {
	// Responsive 
	$('.responsive').on('click', function(event) {
		$('.menu-list').slideToggle(400);
		event.preventDefault();
	});
}



/*------------------
	Hero Section
--------------------*/
function heroSection() {
	//Slide item bg image.
	$('.hero-item').each(function() {
		var image = $(this).data('bg');
		$(this).css({
			'background-image'  : 'url(' + image + ')',
			'background-size'   : 'cover',
			'background-repeat' : 'no-repeat',
			'background-position': 'center bottom'
		});
	});
	//slider auto height 
	var iit = setInterval(slide_item, 1);

	function slide_item() {
		var bh = $('body').height();
		$('.hero-item').height(bh);
	}
	slide_item();

	var time = 7;
	var $progressBar,
		$bar, 
		$elem, 
		isPause, 
		tick,
		percentTime;

	// Init the carousel
	$('#hero-slider').owlCarousel({
		loop: true,
		nav: true,
		items: 1,
		autoHeight:true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		onInitialized: progressBar,
		onTranslated: moved,
		onDrag: pauseOnDragging
	});

	// Init progressBar where elem is $("#owl-demo")
	function progressBar(){    
		// build progress bar elements
		buildProgressBar();

		// start counting
		start();
	}

	// create div#progressBar and div#bar then prepend to $("#owl-demo")
	function buildProgressBar(){
		$progressBar = $("<div>",{
			id:"progressBar"
		});
		$bar = $("<div>",{
			id:"bar"
		});
		$progressBar.append($bar).prependTo($("#hero-slider"));
	}

	function start() {
		// reset timer
		percentTime = 0;
		isPause = false;
		// run interval every 0.01 second
		tick = setInterval(interval, 10);
	};

	function interval() {
		if(isPause === false){
			percentTime += 1 / time;

			$bar.css({
				width: percentTime+"%"
			});

			// if percentTime is equal or greater than 100
			if(percentTime >= 100){
				// slide to next item 
				$("#hero-slider").trigger("next.owl.carousel");
				percentTime = 0; // give the carousel at least the animation time ;)
			}
		}
	}

	// pause while dragging 
	function pauseOnDragging(){
		isPause = true;
	}

	// moved callback
	function moved(){
		// clear interval
		clearTimeout(tick);
		// start again
		start();
	}

}



/*------------------
	Video Popup
--------------------*/
function videoPopup() {
	$('.video-popup').magnificPopup({
		type: 'iframe',
		autoplay : true
	});
}



/*------------------
	Testimonial
--------------------*/
function testimonial() {
	// testimonial Carousel 
	$('#testimonial-slide').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		nav:false,
		dots: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			800:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});
}



/*links services*/

var $slideLink = $("#slide-link"),
    slideLinkText = $slideLink.find("span")[0];

$slideLink.on("mouseenter", linkOver);

function linkOver() {
  TweenLite.to(slideLinkText, 0.3, {y: -25, ease: Cubic.easeIn, onComplete: function() {
    TweenLite.fromTo(slideLinkText, 0.3, {y: 25}, {y: 0, ease: Cubic.easeOut})
  }});
}



/*------------------
	Progress bar
--------------------*/
function progressbar() {

	$('.progress-bar-style').each(function() {
		var progress = $(this).data("progress");
		var prog_width = progress + '%';
		if (progress <= 100) {
			$(this).append('<div class="bar-inner" style="width:' + prog_width + '"><span>' + prog_width + '</span></div>');
		}
		else {
			$(this).append('<div class="bar-inner" style="width:100%"><span>' + prog_width + '</span></div>');
		}
	});
}



/*------------------
	Accordions
--------------------*/
function accordions() {
	$('.panel').on('click', function (e) {
		$('.panel').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});
}



/*------------------
	Progress Circle
--------------------*/
function progressCircle() {
	//Set progress circle 1
	$("#progress1").circleProgress({
		value: 0.75,
		size: 175,
		thickness: 5,
		fill: "#2be6ab",
		emptyFill: "rgba(0, 0, 0, 0)"
	});
	//Set progress circle 2
	$("#progress2").circleProgress({
		value: 0.83,
		size: 175,
		thickness: 5,
		fill: "#2be6ab",
		emptyFill: "rgba(0, 0, 0, 0)"
	});
	//Set progress circle 3
	$("#progress3").circleProgress({
		value: 0.25,
		size: 175,
		thickness: 5,
		fill: "#2be6ab",
		emptyFill: "rgba(0, 0, 0, 0)"
	});
	//Set progress circle 4
	$("#progress4").circleProgress({
		value: 0.95,
		size: 175,
		thickness: 5,
		fill: "#2be6ab",
		emptyFill: "rgba(0, 0, 0, 0)"
	});

}

/*-----------------
	Login Account
------------------*/
function login() {
	$("#btn-login").click(function(){
		var act_url = app_url + "execute/do_login";
		var email = $("#login-email").val();
		var password = $("#login-password").val();
		$.ajax({
			type: "POST",
			url: act_url,
			data: {
				"email" : email,
				"password" : password
			},
			dataType: "json",
			success: function(res)
			{
				console.log(res);
				if(res.success){
					//swal("wew");
					swal({
						title: "Login Success!",
						text: "You have successfully login your account",
						icon: "success",
						timer: 2e3,
						button: null,
					});
					
					$("#container-login-email").removeClass("has-error text-danger");
					$("#error-email").html("");
					$("#error-email").removeClass("bg-danger");
					$("#container-login-password").removeClass("has-error text-danger");
					$("#error-password").html("");
					$("#error-password").removeClass("bg-danger");
					
					console.log(location);
					location.href = app_url + 'user';

				}
				else{
							
					
					if(res.errormsg){
							$("#container-login-email").removeClass("has-error text-danger");
							$("#error-email").html("");
							$("#error-email").removeClass("bg-danger");
							$("#container-login-password").removeClass("has-error text-danger");
							$("#error-password").html("");
							$("#error-password").removeClass("bg-danger");
							swal({
								title: "Login Failed",
								text: res.message,
								icon: "warning",
								button: null,
								timer:2e3
							});
					}
					else{
							
							swal({
								title: "Login Failed",
								text: "Fields are required",
								icon: "warning",
								button: null,
								timer:2e3
							});
							if(res.messages.email != ""){
								$("#container-login-email").addClass("has-error text-danger");
								$("#error-email").addClass("bg-danger");
								$("#error-email").html(res.messages.email);
							}
							else{
								$("#container-login-email").removeClass("has-error text-danger");
								$("#error-email").html("");
								$("#error-email").removeClass("bg-danger");
							}
							if(res.messages.password != ""){
								$("#container-login-password").addClass("has-error text-danger");
								$("#error-password").addClass("bg-danger");
								$("#error-password").html(res.messages.password);
							}
							else{
								$("#container-login-password").removeClass("has-error text-danger");
								$("#error-password").html();
								$("#error-password").removeClass("bg-danger");
							}

					}
				}
			},
			error: function(res){
				console.log("ERROR",res);
				console.log(res);
			}
		});
	});
}
/*-----------------
	Create Account with email and password
------------------*/
function check_user() {
	$("#btn-check").click(function(){
		var act_url = app_url + "execute/check_user";
		var email = $("#reg-email").val();
		var pass = $("#reg-pass").val();
		var cpass = $("#reg-cpass").val();
		$('#btn-check').prop('disabled', true);
		$.ajax({
			url: act_url,
			type: "POST",
			data:{
				"email" : email,
				"pass" : pass,
				"cpass" : cpass
			},
			dataType: "json",
			success:function (res) {
				console.log(res.message);
				if(res.success){
					$("#container-reg-email").removeClass("has-error text-danger");
					$("#error-reg-email").html("");
					$("#error-reg-email").removeClass("bg-danger");
					$("#container-reg-pass").removeClass("has-error text-danger");
					$("#error-reg-pass").html("");
					$("#error-reg-pass").removeClass("bg-danger");
					$("#container-reg-cpass").removeClass("has-error text-danger");
					$("#error-reg-cpass").html("");
					$("#error-reg-cpass").removeClass("bg-danger");
					$('#btn-check').hide();
					$('#btn-next').show();
					
					swal({
						title: "Account Created! Click Next For Next Step",
						text: res.message,
						icon: "success",
						button: null,
						timer:2e3
					});
				}
				else{
					swal({
						title: "Invalid!",
						text: "Fields are required",
						icon: "warning",
						button: null,
						timer:2e3
					});
					
					$('#btn-check').prop('disabled', false);
					console.log(res.messages);
					if(res.messages.email != ""){
						$("#reg-email").removeClass("reg-form");
						$("#reg-email").addClass("reg-error");
						$("#error-reg-email").html(res.messages.email);
					}
					else{
						
						$("#reg-email").removeClass("reg-error");
						$("#reg-email").addClass("reg-form");
						$("#error-reg-email").html("");

					}
					if(res.messages.pass != ""){
						$("#reg-pass").removeClass("reg-form");
						$("#reg-pass").addClass("reg-error");
						$("#error-reg-pass").html(res.messages.pass);
					}
					else{
						$("#reg-pass").removeClass("reg-error");
						$("#reg-pass").addClass("reg-form");
						$("#error-reg-pass").html("");
					}
					if(res.messages.cpass != ""){
						$("#reg-cpass").removeClass("reg-form");
						$("#reg-cpass").addClass("reg-error");
						$("#error-reg-cpass").html(res.messages.cpass);
					}
					else{
						$("#reg-cpass").removeClass("reg-error");
						$("#reg-cpass").addClass("reg-form");
						$("#error-reg-cpass").html("");
					}
				}
			},
			error:function(res){
				console.log(res);
			}
		});
	});
}

/*-----------------
	Add Information
------------------*/
function add_info() {
	
	$("#btn-submit").click(function(){
		var act_url = app_url + "execute/add_info";
		var data = {
			"fname" : $("#reg-fname").val(),
			"lname" : $("#reg-lname").val(),
			"bdate" : $("#reg-bdate").val(),
			"gender" : $("#reg-gender").val(),
			"street" : $("#reg-street").val(),
			"city" : $("#reg-city").val(),
			"pcode" : $("#reg-pcode").val(),
			"phone" : $("#reg-phone").val(),
			"email" : $("#reg-email").val()
		}
		console.log(data);
		$.ajax({
			url: act_url,
			type: "POST",
			data: data,
			dataType: "json",
			success:function(res){
				console.log(res);
				
				if(res.success){
					hide_class("#reg-fname","reg-error");
					hide_class("#reg-lname","reg-error");
					hide_class("#reg-bdate","reg-error");
					hide_class("#reg-gender","reg-error");
					hide_class("#reg-street","reg-error");
					hide_class("#reg-city","reg-error");
					hide_class("#reg-pcode","reg-error");
					hide_class("#reg-phone","reg-error");
					swal({
						title: "Account Created! Click Next For Next Step",
						text: res.message,
						icon: "success",
						button: null,
						timer:2e3
					});
					setTimeout(function() {
						location.reload();
					}, 2000);
				}
				else{

					swal({
						title: "Invalid!",
						text: "Fields are required",
						icon: "warning",
						button: null,
						timer:2e3
					});

					console.log(res.messages);
					//Fname
					if(res.messages.fname != ""){
						$("#reg-fname").removeClass("reg-form");
						$("#reg-fname").addClass("reg-error");
						$("#error-reg-fname").html(res.messages.fname);
					}
					else{
						$("#reg-fname").removeClass("reg-error");
						$("#reg-fname").addClass("reg-form");
						$("#error-reg-fname").html("");
					}
					//Lname
					if(res.messages.lname != ""){
						$("#reg-lname").removeClass("reg-form");
						$("#reg-lname").addClass("reg-error");
						$("#error-reg-lname").html(res.messages.lname);
					}
					else{
						$("#reg-lname").removeClass("reg-error");
						$("#reg-lname").addClass("reg-form");
						$("#error-reg-lname").html("");
					}
					//BDate
					if(res.messages.bdate != ""){
						$("#reg-bdate").removeClass("reg-form");
						$("#reg-bdate").addClass("reg-error");
						$("#error-reg-bdate").html(res.messages.bdate);
					}
					else{
						$("#reg-bdate").removeClass("reg-error");
						$("#reg-bdate").addClass("reg-form");
						$("#error-reg-bdate").html("");
					}
					//Gender
					if(res.messages.gender != ""){
						$("#reg-gender").removeClass("reg-form");
						$("#reg-gender").addClass("reg-error");
						$("#error-reg-gender").html(res.messages.gender);
					}
					else{
						$("#reg-gender").removeClass("reg-error");
						$("#reg-gender").addClass("reg-form");
						$("#error-reg-gender").html("");
					}
					//Street
					if(res.messages.street != ""){
						$("#reg-street").removeClass("reg-form");
						$("#reg-street").addClass("reg-error");
						$("#error-reg-street").html(res.messages.street);
					}
					else{
						$("#reg-street").removeClass("reg-error");
						$("#reg-street").addClass("reg-form");
						$("#error-reg-street").html("");
					}
					//City
					if(res.messages.city != ""){
						$("#reg-city").removeClass("reg-form");
						$("#reg-city").addClass("reg-error");
						$("#error-reg-city").html(res.messages.city);
					}
					else{
						$("#reg-city").removeClass("reg-error");
						$("#reg-city").addClass("reg-form");
						$("#error-reg-city").html("");
					}
					//Postal Code
					if(res.messages.pcode != ""){
						$("#reg-pcode").removeClass("reg-form");
						$("#reg-pcode").addClass("reg-error");
						$("#error-reg-pcode").html(res.messages.pcode);
					}
					else{
						$("#reg-pcode").removeClass("reg-error");
						$("#reg-pcode").addClass("reg-form");
						$("#error-reg-pcode").html("");
					}
					//Phone
					if(res.messages.phone != ""){
						$("#reg-phone").removeClass("reg-form");
						$("#reg-phone").addClass("reg-error");
						$("#error-reg-phone").html(res.messages.phone);
					}
					else{
						$("#reg-phone").removeClass("reg-error");
						$("#reg-phone").addClass("reg-form");
						$("#error-reg-phone").html("");
					}
					

				}
			},
			error:function(res){
				console.log(res);
			}
		});
		
	});
}


function hide_class(id,class_name){
	$(id).removeClass(class_name);
	$(id).html("");
}

(function($) {
	// Call all functions
	loader();
	responsive();
	heroSection();
	testimonial();
	progressbar();
	videoPopup();
	accordions();
	progressCircle();
	login();
	check_user();
	add_info();

})(jQuery);
/*
 * custom js Document
*/

$(window).load(function(){
	var agent = navigator.userAgent.toLowerCase();
	if (agent.indexOf("msie") > -1 || agent.indexOf("trident") > -1) {
	  	$('body').addClass('ie');
	} else if ( agent.search( "edge/" ) > -1 ){
		$('body').addClass('ie_edge');
	} else {
	}
	objAni();
	smoothScroll();
	canvasDots();
	setTimeout(function(){
		$('#wrap').addClass('active');
	}, 100);
});

$(window).resize(function(){
	if($('.area_visual').length > 0){
		funLoad();
	}
});

$(function(){
	if($('.area_visual').length > 0){
		funLoad();
		mainSlider();
		videoObj();
	}

	noticeSlider();
	designValue();
});

function designValue(){
	if(!($('.designValue').length > 0)) return;
	$(".designValue input").bind("change paste keyup", function() {
		if($(this).val().length == 0){
			$(this).parent().removeClass('active');
		}else{
			$(this).parent().addClass('active');
		}				  
	});
	$('.designValue select, .designValue input').bind('focusin', function() {
		$(this).parent().addClass('in');						  
	});
	$('.designValue select, .designValue input').bind('focusout change', function() {
		$(this).parent().removeClass('in');						  
	});
}

//height
function funLoad(){
	var winWid = $(window).width();
	var winHig = $(window).height();
	$('.area_visual, .area_visual .list').css('height',winHig);
}

$(function(){
	//gnb
	var gnbObj = $('#header nav').html();
	$('#header').append('<div class="mob_gnb"></div>');
	$('#header .mob_gnb').html(gnbObj);

	$('a[data-util="menu"]').append('<em><i></i><i></i></em>');
	$('a[data-util="menu"]').on('click',function(){
		$(this).toggleClass('active');
		$('#header .mob_gnb').toggleClass('active');
		return false;
	});

	var sideHeight = $(".area_util").offset().top;
	$(window).scroll(function(){
		var winTop = $(document).scrollTop();
		if(winTop > sideHeight){
			$(".area_util").addClass('fix');
		}else{
			$(".area_util").removeClass('fix');
		}
	});

	//lnb
	$('#header nav .gnb > li').each(function(){
		var gnblink = $(this).children('a');
		if(gnblink.hasClass('on')){
			var lnbText = $(this).children('a').text();
			var lnbText02 = $(this).children('ul').find('a.on').text();
			var lnbList = $(this).children('ul').html();
			$('.area_subVisual h2').text(lnbText);
			$('.area_subVisual .lnb > ul').append(lnbList);			
			$('.btn_lnb').text(lnbText02);
		}
	});

	$('.btn_lnb').on('click',function(){
		$(this).toggleClass('active').next('.lnb').stop().slideToggle();
	});
});

$(window).scroll(function(){
	$('.scrollDown').each( function(i){
		var bottom_of_object = $(this).offset().top + $(this).outerHeight()/2;
		var bottom_of_window = $(window).scrollTop() + $(window).height();

		if( bottom_of_window > bottom_of_object ){
			$(this).addClass("show");
		}else{
			$(this).removeClass('show');
		}
	});
});

function objAni(){
	if(!($('.obj_txt').length > 0)) return;
		$(window).scroll(function(){
		var winTop = $(document).scrollTop();
		var topSet = $('.inr_top').offset().top - 200;
		var bottomSet = $('.inr_bottom').offset().top;
		var wHeight = $(window).height();
		var alpha = (wHeight - (winTop * 32)) / wHeight;
		var alpha2 = (wHeight + (winTop * 10)) / wHeight;
	    $(window).scroll(function(){
	    	if(topSet < winTop){
	    		$('.inr_top .obj_txt').css('transform', 'translateX('+ alpha  +'vw)');
	    	}
	    	if(bottomSet < winTop){
	    		$('.inr_bottom .obj_txt').css('transform', 'translateX('+ alpha2  +'vw)');
	    	}
	    });
	});
}


//slide
function mainSlider(){
	if(!($('.area_visual').length > 0)) return;
	$('.area_visual .list').bxSlider({
		auto:true,
		mode:'fade',
		speed:2000,
		pause:7000,
		pager:true,
		controls:false,
	});

	var popSlider = $('.area_popup .list').bxSlider({
		auto:true,
		mode:'horizontal',
		autoHover:true,
		pager:false,
		controls:true,
		onSliderLoad: function(){
			$('.area_popup .bx-controls-direction a.bx-prev').append('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="17px" viewBox="0 0 21 17" enable-background="new 0 0 18 14" xml:space="preserve"> <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.924,13.806c-0.406,0-0.795-0.271-0.966-0.675	c-0.208-0.491-0.056-1.045,0.432-1.564c0.276-0.248,0.547-0.499,0.817-0.75c0.27-0.25,0.539-0.5,0.815-0.746l2.171-1.937L1.85,8.145 c-1.038,0-1.407-0.6-1.407-1.113c0-0.538,0.396-1.166,1.512-1.166l12.152,0.012l-3.762-3.514C9.868,1.922,9.714,1.441,9.899,0.97 c0.175-0.45,0.626-0.776,1.07-0.776c0.462,0,0.834,0.342,1.065,0.629l0.038,0.044l5.484,6.123l-5.511,6.162 C11.69,13.58,11.302,13.806,10.924,13.806z"/></svg>');
			$('.area_popup .bx-controls-direction a.bx-next').append('<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="17px" viewBox="0 0 21 17" enable-background="new 0 0 18 14" xml:space="preserve"> <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.924,13.806c-0.406,0-0.795-0.271-0.966-0.675	c-0.208-0.491-0.056-1.045,0.432-1.564c0.276-0.248,0.547-0.499,0.817-0.75c0.27-0.25,0.539-0.5,0.815-0.746l2.171-1.937L1.85,8.145 c-1.038,0-1.407-0.6-1.407-1.113c0-0.538,0.396-1.166,1.512-1.166l12.152,0.012l-3.762-3.514C9.868,1.922,9.714,1.441,9.899,0.97 c0.175-0.45,0.626-0.776,1.07-0.776c0.462,0,0.834,0.342,1.065,0.629l0.038,0.044l5.484,6.123l-5.511,6.162 C11.69,13.58,11.302,13.806,10.924,13.806z"/></svg>');
		},
	});

	$('.area_popup .btn').bind('click',function(){
		if($('.area_popup').hasClass('active')){
			$(this).children('span').text('popzone Close');
			$('.area_popup').removeClass('active');
			popSlider.reloadSlider({
				auto:true,
				mode:'horizontal',
				autoHover:true,
				pager:false,
				controls:true,
				onSliderLoad: function(){
					$('.area_popup .bx-controls-direction a.bx-prev').append('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="17px" viewBox="0 0 21 17" enable-background="new 0 0 18 14" xml:space="preserve"> <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.924,13.806c-0.406,0-0.795-0.271-0.966-0.675	c-0.208-0.491-0.056-1.045,0.432-1.564c0.276-0.248,0.547-0.499,0.817-0.75c0.27-0.25,0.539-0.5,0.815-0.746l2.171-1.937L1.85,8.145 c-1.038,0-1.407-0.6-1.407-1.113c0-0.538,0.396-1.166,1.512-1.166l12.152,0.012l-3.762-3.514C9.868,1.922,9.714,1.441,9.899,0.97 c0.175-0.45,0.626-0.776,1.07-0.776c0.462,0,0.834,0.342,1.065,0.629l0.038,0.044l5.484,6.123l-5.511,6.162 C11.69,13.58,11.302,13.806,10.924,13.806z"/></svg>');
					$('.area_popup .bx-controls-direction a.bx-next').append('<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="17px" viewBox="0 0 21 17" enable-background="new 0 0 18 14" xml:space="preserve"> <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.924,13.806c-0.406,0-0.795-0.271-0.966-0.675	c-0.208-0.491-0.056-1.045,0.432-1.564c0.276-0.248,0.547-0.499,0.817-0.75c0.27-0.25,0.539-0.5,0.815-0.746l2.171-1.937L1.85,8.145 c-1.038,0-1.407-0.6-1.407-1.113c0-0.538,0.396-1.166,1.512-1.166l12.152,0.012l-3.762-3.514C9.868,1.922,9.714,1.441,9.899,0.97 c0.175-0.45,0.626-0.776,1.07-0.776c0.462,0,0.834,0.342,1.065,0.629l0.038,0.044l5.484,6.123l-5.511,6.162 C11.69,13.58,11.302,13.806,10.924,13.806z"/></svg>');
				}
			});
		}else{
			$(this).children('span').text('popzone Open');
			$('.area_popup').addClass('active');
			popSlider.reloadSlider({
				auto:true,
				mode:'horizontal',
				autoHover:true,
				pager:false,
				controls:false,
			});
		}
	});
}

$(window).load(function(){
	 var widthMatch = matchMedia("all and (max-width: 1300px)");
	 var widthHandler = function(matchList) {
	     if (matchList.matches) {
	    	 $('.area_popup .btn').trigger('click');
	     } else {
	    	 if($('.area_popup').hasClass('active')){
	    		 $('.area_popup .btn').trigger('click');
	    	 }
	     }
	 };
	 widthMatch.addListener(widthHandler);
	 widthHandler(widthMatch);
});

function noticeSlider(){
	$('.area_notice .list').bxSlider({
		auto:true,
		mode:'vertical',
		autoHover:true,
		pager:false,
		controrls:true,
		onSliderLoad: function(){
			$('.area_notice .bx-controls-direction a.bx-prev').append('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="13px" viewBox="0 0 9 13" enable-background="new 0 0 9 13" xml:space="preserve"> <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#D3B63F" points="2.307,12.781 8.587,6.5 2.307,0.219 0.413,2.112 4.799,6.5 0.413,10.887 2.307,12.781 "/> </svg>');
			$('.area_notice .bx-controls-direction a.bx-next').append('<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="13px" viewBox="0 0 9 13" enable-background="new 0 0 9 13" xml:space="preserve"> <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#D3B63F" points="2.307,12.781 8.587,6.5 2.307,0.219 0.413,2.112 4.799,6.5 0.413,10.887 2.307,12.781 "/> </svg>');
		},
	});
}

//video
function videoObj(){
	$('.video .btn').on('click',function(){
		document.getElementById('videoPlayer').play();
		$(this).parent('.video').addClass('active');
	});
}

//canvas
const canvasDots = function() {
	if(!($('canvas').length > 0) || $("canvas").is(":hidden")) return;
	if(is_mob()) return;
	const canvas = document.querySelector("canvas"),
	ctx = canvas.getContext("2d");
	
	canvas.width = $(window).width();
	canvas.height = $(window).height();
	canvas.style.display = "block";

	colorDot = "#ffffff",
	color = "#ffffff";	
	ctx.fillStyle = colorDot;
	ctx.lineWidth = 0.1;
	ctx.strokeStyle = color;

	var mousePosition = {
			x: 30 * canvas.width / 100,
			y: 30 * canvas.height / 100
	};

	let dots = {
			nb: 600,
			distance: 60,
			d_radius: 100,
			array: []
	};
	 setInterval(function(){
	 	dots.array = new Array();
	 },30000)

	function Dot() {
		this.x = Math.random() * canvas.width;
		this.y = Math.random() * canvas.height;

		this.vx = -0.5 + Math.random();
		this.vy = -0.5 + Math.random();

		this.radius = Math.random();
	}

	Dot.prototype = {
			create: function() {
				ctx.beginPath();
				ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
				ctx.fill();
			},

			animate: function() {
				for (i = 0; i < dots.nb; i++) {
					let dot = dots.array[i];

					if (dot.y < 0 || dot.y > canvas.height) {
						dot.vx = dot.vx;
						dot.vy = -dot.vy;
					} else if (dot.x < 0 || dot.x > canvas.width) {
						dot.vx = -dot.vx;
						dot.vy = dot.vy;
					}
					dot.x += dot.vx;
					dot.y += dot.vy;
				}
			},

			line: function() {
				for (i = 0; i < dots.nb; i++) {
					for (j = 0; j < dots.nb; j++) {
						i_dot = dots.array[i];
						j_dot = dots.array[j];

						if (
								i_dot.x - j_dot.x < dots.distance &&
								i_dot.y - j_dot.y < dots.distance &&
								i_dot.x - j_dot.x > -dots.distance &&
								i_dot.y - j_dot.y > -dots.distance
						) {
							if (
									i_dot.x - mousePosition.x < dots.d_radius &&
									i_dot.y - mousePosition.y < dots.d_radius &&
									i_dot.x - mousePosition.x > -dots.d_radius &&
									i_dot.y - mousePosition.y > -dots.d_radius
							) {
								ctx.beginPath();
								ctx.moveTo(i_dot.x, i_dot.y);
								ctx.lineTo(j_dot.x, j_dot.y);
								ctx.stroke();
								ctx.closePath();
							}
						}
					}
				}
			}
	};

	function createDots() {
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		for (i = 0; i < dots.nb; i++) {
			dots.array.push(new Dot());
			dot = dots.array[i];

			dot.create();
		}

		dot.line();
		dot.animate();
	}

	window.onmousemove = function(parameter) {
		mousePosition.x = parameter.pageX;
		mousePosition.y = parameter.pageY;
	};
	mousePosition.x = window.innerWidth / 2;
	mousePosition.y = window.innerHeight / 2;

	setInterval(createDots, 1000 / 30);

};


//scroll
function is_mob(){
	return (/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera);
}

function is_mac(){
	return navigator.platform.indexOf('Mac') > -1;
}

function is_chrome(){
	return /Chrome/.test(navigator.userAgent);
}

function is_firefox(){
	return /Firefox/.test(navigator.userAgent);
}

function smoothScroll(){
	if(is_mob() || is_mac() || is_firefox()) return;
	var $window = $(window);
	if(smoothScroll_passive()){
		window.addEventListener("wheel",smoothScroll_scrolling,{passive: false});
	}else{
		$window.on("mousewheel DOMMouseScroll", smoothScroll_scrolling);
	}
}

function smoothScroll_passive(){
	var supportsPassive = false;
	try {document.addEventListener("test", null, { get passive() { supportsPassive = true }});
	} catch(e) {}
	return supportsPassive;
}

function smoothScroll_scrolling(event){
	if(!event.path){
		event.path = new Array();
		function callParentNode(child){
			if(child.parentNode){
				event.path.push(child.parentNode);
				callParentNode(child.parentNode);
			}
			return;
		}
		event.path.push(event.target);
		callParentNode(event.target);
	}

	var impossibility = new Array("map", "comments");
	for(var i=0; event.path.length > i; i++){
		for(var j=0; impossibility.length > j; j++){
			if(event.path[i].getAttribute && event.path[i].getAttribute("id") ==impossibility[j])return;
		}
	}

	event.preventDefault();
	var $window = $(window);
	var scrollTime = 1;
	var distance_offset = 2.5;
	var scrollDistance = $window.height() / distance_offset;
	var delta = 0;
	if(smoothScroll_passive()){
		delta = event.wheelDelta/120 || -event.originalEvent.detail/3;
	}else{
		if(typeof event.originalEvent.deltaY != "undefined"){
			delta = -event.originalEvent.deltaY/120;
		}else{
			delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		}
	}

	var scrollTop = $window.scrollTop();
	var finalScroll = scrollTop - parseInt(delta*scrollDistance);
	TweenMax.to($window, scrollTime, {
		scrollTo : { y: finalScroll, autoKill:true },
		ease: Power3.easeOut,
		overwrite: 5
	});

}
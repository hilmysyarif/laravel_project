"use strict";function preloader(){$("#load").fadeOut();$('#loading').delay().fadeOut();}
function backtotop(){$('#back-to-top').fadeOut();$(window).scroll(function(){if($(this).scrollTop()>250){$('#back-to-top').fadeIn(1500);}else{$('#back-to-top').fadeOut(500);}});$('#top').on('click',function(){$('top').tooltip('hide');$('body,html').animate({scrollTop:0},800);return false;});}
function tooltip(){$('[data-toggle="tooltip"]').tooltip()}
function jarallax(){$('.jarallax').jarallax({speed:0.2});}
function searchstyle(){'use strict';if($(".search__input").length>0){var openCtrl=document.getElementById('btn-search'),closeCtrl=document.getElementById('btn-search-close'),searchContainer=document.querySelector('.search'),inputSearch=searchContainer.querySelector('.search__input');function init(){initEvents();}
function initEvents(){openCtrl.addEventListener('click',openSearch);closeCtrl.addEventListener('click',closeSearch);document.addEventListener('keyup',function(ev){if(ev.keyCode===27){closeSearch();}});}
function openSearch(){searchContainer.classList.add('search--open');inputSearch.focus();}
function closeSearch(){searchContainer.classList.remove('search--open');inputSearch.blur();inputSearch.value='';}
init();}
$(".iq-search").on('click',function(){$(".search-open").fadeIn(500);});$(".search-close").on('click',function(){$(".search-open").fadeOut(500);});if(jQuery('.iq-search').size()>0){jQuery('.search-btn').on("click",function(){jQuery('.iq-search').toggleClass("search-open");return false;});jQuery("html, body").on('click',function(e){if(!jQuery(e.target).hasClass("not-click")){jQuery('.iq-search').removeClass("search-open");}});}}
function megaMenu(){jQuery('#menu-1').megaMenu({logo_align:'left',links_align:'left',socialBar_align:'left',searchBar_align:'right',trigger:'hover',effect:'fade',effect_speed:400,sibling:true,outside_click_close:true,top_fixed:false,sticky_header:true,sticky_header_height:200,menu_position:'horizontal',full_width:true,mobile_settings:{collapse:true,sibling:true,scrollBar:true,scrollBar_height:400,top_fixed:false,sticky_header:true,sticky_header_height:200}});$('#menu-2').megaMenu({logo_align:'left',links_align:'left',socialBar_align:'left',searchBar_align:'right',trigger:'hover',effect:'fade',effect_speed:400,sibling:true,outside_click_close:true,top_fixed:false,sticky_header:false,sticky_header_height:200,menu_position:'vertical-right',full_width:false,mobile_settings:{collapse:true,sibling:true,scrollBar:true,scrollBar_height:400,top_fixed:false,sticky_header:false,sticky_header_height:200}});$('#menu-3').megaMenu({logo_align:'left',links_align:'left',socialBar_align:'left',searchBar_align:'right',trigger:'hover',effect:'fade',effect_speed:400,sibling:true,outside_click_close:true,top_fixed:false,sticky_header:false,sticky_header_height:200,menu_position:'vertical-left',full_width:false,mobile_settings:{collapse:true,sibling:true,scrollBar:true,scrollBar_height:400,top_fixed:false,sticky_header:false,sticky_header_height:200}});}
function sidebar_menu(){$(".sider-bt").on("click",function(){$(".sider-bt").toggleClass("cross");$(".sidebar-menu").toggleClass("sidebar-open");});}
function counters(){$('.timer').countTo();}
function countdownTimer(){$('#countdown').countdown({date:'10/01/2018 23:59:59',offset:-8,day:'Day',days:'Days'},function(){alert('Done!');});$('#iq-countdown1').countdown({date:'10/01/2018 23:59:59',offset:-8,day:'Day',days:'Days'},function(){alert('Done!');});}
function isotope(){var $isotope=$(".isotope"),$itemElement='.iq-grid-item',$filters=$('.isotope-filters');if($isotope){$isotope.isotope({resizable:true,itemSelector:$itemElement,masonry:{gutterWidth:10}});$filters.on('click','button',function(){var $val=$(this).attr('data-filter');$isotope.isotope({filter:$val});$filters.find('.active').removeClass('active');$(this).addClass('active');});}}
function masonry(){var $masonry=$('.iq-masonry-block .iq-masonry'),$itemElement='.iq-masonry-block .iq-masonry-item',$filters=$('.iq-masonry-block .isotope-filters');if($masonry){$masonry.isotope({percentPosition:true,resizable:true,itemSelector:$itemElement,masonry:{gutterWidth:0}});$filters.on('click','button',function(){var filterValue=$(this).attr('data-filter');$masonry.isotope({filter:filterValue});});$filters.each(function(i,buttonGroup){var $buttonGroup=$(buttonGroup);$buttonGroup.on('click','button',function(){$buttonGroup.find('.active').removeClass('active');$(this).addClass('active');});});}}
function portfolio_move(){$('.iq-portfolio-05').each(function(){$(this).hoverdir({});});}
function progressBar(){jQuery('.progress-bar').each(function(i,elem){var $elem=$(this),percent=$elem.attr('data-percent')||"100",delay=$elem.attr('data-delay')||"100",type=$elem.attr('data-type')||"%";if(!$elem.hasClass('progress-animated')){$elem.css({'width':'0%'});}
var progressBarRun=function(){$elem.animate({'width':percent+'%'},'easeInOutCirc').addClass('progress-animated');$elem.delay(delay).append('<span class="progress-type animated fadeIn">'+type+'</span><span class="progress-number animated fadeIn">'+percent+'</span>');};$(elem).appear(function(){setTimeout(function(){progressBarRun();},delay);});});}
function audiovideo(){if($(".audio-video").length!=0){$('audio,video').mediaelementplayer();}}
function accordion(){var $acpanel=$(".iq-accordion .iq-ad-block > .ad-details"),$acsnav=$(".iq-accordion .iq-ad-block > .ad-title");$acpanel.hide().first().slideDown("easeOutExpo");$acsnav.first().addClass("iq-active");$acsnav.on('click',function(){var $this=$(this).next(".ad-details");$acsnav.parent().removeClass("iq-active");$(this).parent().addClass("iq-active");$acpanel.not($this).slideUp("easeInExpo");$(this).next().slideDown("easeOutExpo");return false;});}
function owlcarousel(){$(".owl-carousel").each(function(){var $this=$(this),$items=($this.data('items'))?$this.data('items'):1,$loop=($this.data('loop'))?$this.data('loop'):true,$navdots=($this.data('nav-dots'))?$this.data('nav-dots'):false,$navarrow=($this.data('nav-arrow'))?$this.data('nav-arrow'):false,$autoplay=($this.attr('data-autoplay'))?$this.data('autoplay'):true,$space=($this.attr('data-space'))?$this.data('space'):15;$(this).owlCarousel({loop:$loop,items:$items,responsive:{0:{items:$this.data('xx-items')?$this.data('xx-items'):1},600:{items:$this.data('xs-items')?$this.data('xs-items'):1},767:{items:$this.data('sm-items')?$this.data('sm-items'):2},992:{items:$this.data('md-items')?$this.data('md-items'):2},1190:{items:$this.data('lg-items')?$this.data('lg-items'):3},1200:{items:$items}},dots:$navdots,margin:$space,nav:$navarrow,navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],autoplay:$autoplay,autoplayHoverPause:true});});}
function wowanimation(){var wow=new WOW({boxClass:'wow',animateClass:'animated',offset:0,mobile:false,live:true});wow.init();}
function popupgallery(){$('.popup-gallery').magnificPopup({delegate:'a.popup-img',type:'image',tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:true,navigateByImgClick:true,preload:[0,1]},});$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});}
function typer(){var foo;var win=$(window),foo=$('#typer');if(foo!==undefined)
foo.typer(['<h6 class="iq-tw-6"><span class="iq-font-green">Web</span> Developer</h6>','<h6 class="iq-tw-6">Web <span class="iq-font-green">Designer</span></h6>','<h6 class="iq-tw-6"><span class="iq-font-green">Frontend</span> Developer</h6>']);}
function contactfrom(){$('#contact').submit(function(e){var flag=0;e.preventDefault();$('.require').each(function(){if($.trim($(this).val())==''){$(this).css("border","1px solid red");e.preventDefault();flag=1;}else{$(this).css("border","1px solid grey");flag=0;}});if(grecaptcha.getResponse()==""){flag=1;alert('Please verify Recaptch');}else{flag=0;}
if(flag==0){$.ajax({url:'contact-form.php',type:'POST',data:$("#contact").serialize()}).done(function(data){$("#result").html('Form was successfully submitted.');$('#contact')[0].reset();}).fail(function(){alert('Ajax Submit Failed ...');});}});}
$(document).ready(function(){megaMenu(),backtotop(),tooltip(),jarallax(),popupgallery(),searchstyle(),sidebar_menu(),counters(),countdownTimer(),wowanimation(),audiovideo(),accordion(),owlcarousel(),portfolio_move();});$(window).on('load',function(){preloader(),isotope(),masonry(),contactfrom(),progressBar(),typer();});

$(document).ready(function() {
	const $cont = $('.cont');
	const $slider = $('.slider');
	const $nav = $('.nav');
	const winW = $(window).width();
	const animSpd = 750; // Change also in CSS
	const distOfLetGo = winW * 0.2;
	let curSlide = 1;
	let animation = false;
	let diff = 0;
	
	// Generating slides
	let arrCities = ['Intertec', 'Rome', 'New—York', 'Singapore', 'Prague']; // Change number of slides in CSS also
	let numOfCities = arrCities.length;
	let arrCitiesDivided = [];

	arrCities.map((city) => {
		let length = city.length;
		let letters = Math.floor(length / 4);
		let exp = new RegExp(".{1," + letters + "}", "g");
		
		arrCitiesDivided.push(city.match(exp));
	});
	
	let generateSlide = function(city) {
		let frag1 = $(document.createDocumentFragment());
		let frag2 = $(document.createDocumentFragment());
		const numSlide = arrCities.indexOf(arrCities[city]) + 1;
		const firstLetter = arrCitiesDivided[city][0].charAt(0);

		const $slide =
					$(`<div data-target="${numSlide}" class="slide slide--${numSlide}">
							<div class="slide__darkbg slide--${numSlide}__darkbg"></div>
							<div class="slide__text-wrapper slide--${numSlide}__text-wrapper"></div>
						</div>`);

		const letter = 
					$(`<div class="slide__letter slide--${numSlide}__letter">
							${firstLetter}
						</div>`);

		for (let i = 0, length = arrCitiesDivided[city].length; i < length; i++) {
			const text = 
						$(`<div class="slide__text slide__text--${i + 1}">
								${arrCitiesDivided[city][i]}
							</div>`);
			frag1.append(text);
		}

		const navSlide = $(`<li data-target="${numSlide}" class="nav__slide nav__slide--${numSlide}"></li>`);
		frag2.append(navSlide);
		$nav.append(frag2);

		$slide.find(`.slide--${numSlide}__text-wrapper`).append(letter).append(frag1);
		$slider.append($slide);

		if (arrCities[city].length <= 4) {
			$('.slide--'+ numSlide).find('.slide__text').css("font-size", "12vw");
		}
	};

	for (let i = 0, length = numOfCities; i < length; i++) {
		generateSlide(i);
	}

	$('.nav__slide--1').addClass('nav-active');

	// Navigation
	function bullets(dir) {
		$('.nav__slide--' + curSlide).removeClass('nav-active');
		$('.nav__slide--' + dir).addClass('nav-active');
	}
	
	function timeout() {
		animation = false;
	}
	
	function pagination(direction) {
		animation = true;
		diff = 0;
		$slider.addClass('animation');
		$slider.css({
			'transform': 'translate3d(-' + ((curSlide - direction) * 100) + '%, 0, 0)'
		});
		
		$slider.find('.slide__darkbg').css({
				'transform': 'translate3d(' + ((curSlide - direction) * 50) + '%, 0, 0)'
		});
		
		$slider.find('.slide__letter').css({
				'transform': 'translate3d(0, 0, 0)',
		});
		
		$slider.find('.slide__text').css({
			'transform': 'translate3d(0, 0, 0)'
		});
	}
	
	function navigateRight() {
		if (curSlide >= numOfCities) return;
		pagination(0);
		setTimeout(timeout, animSpd);
		bullets(curSlide + 1);
		curSlide++;
	}

	function navigateLeft() {
		if (curSlide <= 1) return;
		pagination(2);
		setTimeout(timeout, animSpd);
		bullets(curSlide - 1);
		curSlide--;
	}

	function toDefault() {
		pagination(1);
		setTimeout(timeout, animSpd);
	}

	// Events
	$(document).on('mousedown touchstart', '.slide', function(e) {
		if (animation) return;
		let target = +$(this).attr('data-target');
		let startX = e.pageX || e.originalEvent.touches[0].pageX;
		$slider.removeClass('animation');
		
		$(document).on('mousemove touchmove', function(e) {
			let x = e.pageX || e.originalEvent.touches[0].pageX;
			diff = startX - x;
			if (target === 1 && diff < 0 || target === numOfCities && diff > 0) return;
			
			$slider.css({
				'transform': 'translate3d(-' + ((curSlide - 1) * 100 + (diff / 30)) + '%, 0, 0)'
			});
			
			$slider.find('.slide__darkbg').css({
				'transform': 'translate3d(' + ((curSlide - 1) * 50 + (diff / 60)) + '%, 0, 0)'
			});
			
			$slider.find('.slide__letter').css({
				'transform': 'translate3d(' +  (diff / 60) + 'vw, 0, 0)',
			});
			
			$slider.find('.slide__text').css({
				'transform': 'translate3d(' + (diff / 15) + 'px, 0, 0)'
			});
		})	
	})
	
	$(document).on('mouseup touchend', function(e) {
		$(document).off('mousemove touchmove');
		
		if (animation) return;
		
		if (diff >= distOfLetGo) {
			navigateRight();
		} else if (diff <= -distOfLetGo) {
			navigateLeft();
		} else {
			toDefault();
		}
	});
	
	$(document).on('click', '.nav__slide:not(.nav-active)', function() {
		let target = +$(this).attr('data-target');
		bullets(target);
		curSlide = target;
		pagination(1);
	});	
	
	$(document).on('click', '.side-nav', function() {
		let target = $(this).attr('data-target');
		
		if (target === 'right') navigateRight();
		if (target === 'left') navigateLeft();
	});
	
	$(document).on('keydown', function(e) {
		if (e.which === 39) navigateRight();
		if (e.which === 37) navigateLeft();
	});
	
	$(document).on('mousewheel DOMMouseScroll', function(e) {
		if (animation) return;
    let delta = e.originalEvent.wheelDelta;
		
    if (delta > 0 || e.originalEvent.detail < 0) navigateLeft();
	 	if (delta < 0 || e.originalEvent.detail > 0) navigateRight();
  });
});



//  Bussiness SLide

var $cont = document.querySelector('.cont');
var $elsArr = [].slice.call(document.querySelectorAll('.el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    this.classList.add('s--active');
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    document.querySelector('.el.s--active').classList.remove('s--active');
  });
});



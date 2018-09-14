<!DOCTYPE html>
<html lang="en" ng-app="Intertec">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="<?= asset('images/favicon.ico') ?>" rel="shortcut icon">

    <meta name="description" content="BurgerPedia">
    <meta name="author" content="Hilmy Syarif">

    <title>Intertec | Home</title>

  	<link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/ionicons.min.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/mega-menu/mega_menu.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/owl-carousel/owl.carousel.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/magnific-popup.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/animate.css" rel="stylesheet') ?>" type="text/css">
  	<link href="<?= asset('css/mediaelementplayer.min.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('revolution/css/settings.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('revolution/css/revolution.addon.particles.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/shortcodes.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/style.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/responsive.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?= asset('css/custom.css') ?>" rel="stylesheet" type="text/css">
  	<link data-style="styles" href="#" rel="stylesheet">
  	<link href="<?= asset('css/owl.css') ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="loading">
      <div id="loading-center"><img alt="loder" src="{!! asset('images/loader.png') !!}"></div>
    </div>

    <header class="header-01 white">
  		<nav class="mega-menu menuFullWidth" id="menu-1" style="display: block;">
  			<section class="menu-list-items">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col-sm-12">
  							<ul class="menu-logo">
  								<li class="">
  									<a href="{{ url ('/#/')}}"><img alt="logo" id="logo_img" src="images/logo.png"></a>
  									<div class="menu-mobile-collapse-trigger">
  										<span></span>
  									</div>
  								</li>
  							</ul>

  							<ul class="menu-sidebar pull-right">
  								<li>
  									<a href="#" id="btn-search"><i aria-hidden="true" class="fa fa-search"></i></a>
  								</li>
  							</ul>
  							<ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;" ng-controller="homeController">
  								<li class="active">
  									<a href="{{ url ('/#/')}}" ng-click="active($event)">Home</a>
  								</li>
  								<li class="">
  									<a href="{{ url ('/#/about-us')}}" ng-click="active($event)">About Us</a>
  								</li>
  								<li>
  									<a href="{{ url ('/#/enterprise')}}" ng-click="active($event)">Enterprise</a>
  								</li>
  								<li class="hoverTrigger">
  									<a href="{{ url ('/#/products')}}" ng-click="active($event)">Product
  									<div class="mobileTriggerButton"></div></a>
  									<div class="drop-down grid-col-12 effect-fade" style="transition: all 400ms ease 0s;">
  										<div class="grid-row">
  											<div class="grid-col-12">
  												<ul>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/home-router')}}"><img alt="" class="menu-svg" src="images/router.svg"> <span class="txt-menu">Home Router</span></a>
  													</li>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/mobile-wifi')}}"><img alt="" class="menu-svg" src="images/mobile-wifi.svg"> <span class="txt-menu">Mobile Wifi</span></a>
  													</li>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/power-bank')}}"><img alt="" class="menu-svg" src="images/power-bank.svg"> <span class="txt-menu">Power Bank</span></a>
  													</li>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/computer-accesories')}}"><img alt="" class="menu-svg" src="images/comp.svg"> <span class="txt-menu">Computer Accessories</span></a>
  													</li>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/camera')}}"><img alt="" class="menu-svg" src="images/camera.svg"> <span class="txt-menu">Camera</span></a>
  													</li>
  													<li class="grid-col-4">
  														<a href="{{ url ('/#/products/unified-communication')}}"><img alt="" class="menu-svg" src="images/communcation.svg"> <span class="txt-menu">Unified Communication</span></a>
  													</li>
  												</ul>
  											</div>
  										</div>
  									</div>
  								</li>
  								<li>
  									<a href="{{ url ('/#/contact')}}" ng-click="active($event)">Contact</a>
  								</li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</section>
  		</nav>
  	</header>


  	<div class="search">
  		<button aria-label="Close search form" class="btn btn--search-close" id="btn-search-close"><i aria-hidden="true" class="fa fa-close"></i></button>
  		<form class="search__form">
  			<input autocomplete="off" class="search__input" name="search" placeholder="Intertec Search" spellcheck="false" type="search"> <span class="search__info">Hit enter to search or ESC to close</span>
  		</form>
  		<div class="search__related">
  			<div class="search__suggestion iq-font-white">
  				<h3 class="iq-font-white iq-tw-6">May We Suggest?</h3>
  				<p>#MobileWifi #ComputerAccessories #HomeRouter #PowerBank #Camera #CCTV #IpCamera #CameraAction #huawei #UnifiedCommuncation</p>
  			</div>

  		</div>
  	</div>
    <!-- MAIN CONTENT AND INJECTED VIEWS -->
    <div id="main">
        <!-- this is where content will be injected -->
        <div ng-view></div>
    </div>

    <footer class="iq-footer1">
            <section class="iq-full-contact white-bg" id="contact-us">

                <div class="container">
                    <div class="row iq-ptb-40 text-center">
                        <div class="col-sm-12">
                            <ul class="menu">
                                <li class="d-inline-block">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="Enterprise.html">Enterprise</a>
                                </li>

                                <li class="d-inline-block">
                                    <a href="home-products.html">Product</a>
                                </li>

                                <li class="d-inline-block">
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="footer-bottom iq-ptb-20 iq-mt-30">
                            <div class="container">
                            <div class="row">
                            <div class="col-sm-12 text-center">
                            <div class="iq-copyright iq-mt-10">
                            Copyright
                            <span id="copyright">
                            <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                            </span>
                            <a class="iq-font-green" href="#">Intertec</a> All Rights Reserved
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>


                </div>
            </section>






    </footer>

    <div id="back-to-top">
  		<a class="top" href="#top" id="top"><i class="ion-ios-upload-outline"></i></a>
  	</div>

    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/popper.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="<?= asset('js/mega-menu/mega_menu.js') ?>"></script>
    <script src="<?= asset('js/main.js') ?>"></script>
    <script src="<?= asset('revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
    <script src="<?= asset('revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
    <script src="<?= asset('js/style-customizer.js') ?>"></script>
    <script src="<?= asset('js/script.js') ?>"></script>
    <script src="<?= asset('js/custom.js') ?>"></script>

    <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
  	<script src="<?= asset('js/angular/angular.min.js') ?>"></script>
  	<script src="<?= asset('js/angular/angular-route.min.js') ?>"></script>

  	<script>
  	   var revapi7,
  	       tpj = jQuery;
  	   tpj(document).ready(function() {
  	       if (tpj("#rev_slider_7_1").revolution == undefined) {
  	           revslider_showDoubleJqueryError("#rev_slider_7_1");
  	       } else {
  	           revapi7 = tpj("#rev_slider_7_1").show().revolution({
  	               sliderType: "standard",
  	               jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
  	               sliderLayout: "fullwidth",
  	               dottedOverlay: "none",
  	               delay: 9000,
  	               navigation: {
  	                   keyboardNavigation: "off",
  	                   keyboard_direction: "horizontal",
  	                   mouseScrollNavigation: "off",
  	                   mouseScrollReverse: "default",
  	                   onHoverStop: "off",
  	                   arrows: {
  	                       style: "hades",
  	                       enable: true,
  	                       hide_onmobile: false,
  	                       hide_onleave: false,
  	                       tmp: '<div class="tp-arr-allwrapper">    <div class="tp-arr-imgholder"><\/div><\/div>',
  	                       left: {
  	                           h_align: "left",
  	                           v_align: "center",
  	                           h_offset: 20,
  	                           v_offset: 0
  	                       },
  	                       right: {
  	                           h_align: "right",
  	                           v_align: "center",
  	                           h_offset: 20,
  	                           v_offset: 0
  	                       }
  	                   }
  	               },
  	               visibilityLevels: [1240, 1024, 778, 480],
  	               gridwidth: 1170,
  	               gridheight: 790,
  	               lazyType: "none",
  	               shadow: 0,
  	               spinner: "spinner0",
  	               stopLoop: "off",
  	               stopAfterLoops: -1,
  	               stopAtSlide: -1,
  	               shuffle: "off",
  	               autoHeight: "off",
  	               disableProgressBar: "on",
  	               hideThumbsOnMobile: "off",
  	               hideSliderAtLimit: 0,
  	               hideCaptionAtLimit: 0,
  	               hideAllCaptionAtLilmit: 0,
  	               debugMode: false,
  	               fallbacks: {
  	                   simplifyAll: "off",
  	                   nextSlideOnWindowFocus: "off",
  	                   disableFocusListener: false,
  	               }
  	           });
  	       }
  	   }); /*ready*/
  	</script><!-- Localized -->

  	<!-- AngularJS Application Scripts -->
  	<script src="<?= asset('app/app.module.js') ?>"></script>
  	<script src="<?= asset('app/home/home.controller.js') ?>"></script>
  	<script src="<?= asset('app/about/about.controller.js') ?>"></script>
  	<script src="<?= asset('app/enterprise/enterprise.controller.js') ?>"></script>
  </body>
</html>

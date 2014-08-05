<?php
	include("infodata.php");
?>

<!DOCTYPE html>
<html lang="en" class="no-js"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="Gading Serpong Olympics 8 - Afterglow by SMAK PENABUR GS"> 
    <meta name="author" content="Pixagraphica - SMAK GS"> <!-- Mostly by NathanChrs though :p -->
    <link rel="shortcut icon" href=""> <!-- TODO -->

    <title>GSO 8 [ Afterglow ]</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	
	
	<style>
		.no-js #loader {
			display:none;
		}
		.js #loader {
			display:block;
			position:fixed;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:9999;
			background-color:black;
		}
		.center-wrapper {
			position:absolute;
			top:50%;
			left:50%;
		}
		.center {
			margin-top:-50%;
			margin-left:-50%;
		}
		.js #loader img {
			width:300px;
		}
		body {
			background-color:black;
			margin:0px;
			color:white;
			font-family:audiowide,sans-serif;
			font-size:16px;
			overflow-x:hidden;
			
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
	</style>
	
	
	<script src="js/modernizr.custom.09683.js"></script>

	 <script>
	 
		this.featuresAvailable = false;
		
		var initialize = function(){
			
			var loader = document.getElementById('loader');
			window.setTimeout(function(){ loader.style.display='none';},1000);
			
			if(this.featuresAvailable){
				enquire.register("(min-width: 768px), (orientation: landscape)", { //TODO: check whether onResize is better
					match : function() {
						initCarousel();
					},  
					unmatch : function() {
						destroyCarousel();
					}
				});
			}			
		};
		
		
		//IE supports 3D transforms but not preserve3d
		Modernizr.addTest('csstransformspreserve3d', function () {

		  var prop, val, cssText, ret;

		  prop = 'transform-style';
		  if ('webkitTransformStyle' in document.documentElement.style) {
			prop = '-webkit-' + prop;
		  }
		  val = 'preserve-3d';
		  cssText = '#modernizr { ' + prop + ': ' + val + '; }';

		  Modernizr.testStyles(cssText, function (el, rule) {
			ret = window.getComputedStyle ? getComputedStyle(el, null).getPropertyValue(prop) : '';
		  });

		  return (ret === val);
		});
		
		
		//if features available then featuresAvailable = true;
		if(Modernizr.csstransforms3d && Modernizr.boxshadow && Modernizr.fontface && Modernizr.textshadow && Modernizr.cssanimations && Modernizr.csstransformspreserve3d){
			this.featuresAvailable = true;
			
			Modernizr.load({ 
				load: [  
					'css/afterglow.css',  
					'js/enquire.min.js',  
					'js/TweenMax.min.js', 
					'js/carousel.js',
					'js/hammer.min.js'
				],
				complete: initialize
			}); 
			
		} else {
			
			Modernizr.load({
				load: [  
					'css/afterglow-mobile.css',  
				],
				complete: initialize
			}); 
		}
	 
	 </script>

</head>

  
  
<body>

	<noscript>
		<style>
			@import url('css/afterglow-mobile.css');
		</style>
	</noscript>

  <div id="loader">
	<div class="center-wrapper">
		<img class="center" src="img/logo2.png">
	</div>
  </div>
  
  <div class="nofeatures-warning">
	Your browser is not compatible. Please use a HTML5 capable browser, such as <a href="http://www.mozilla.org/en-US/firefox/new/">Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a>. <br>
	Browser Anda tidak kompatibel. Gunakan browser terbaru, seperti <a href="http://www.mozilla.org/en-US/firefox/new/">Firefox</a> atau <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a>.
  </div>
 
  <div class="navbar neon-white"> <!-- TODO: check -->
	Gading Serpong Olympics VIII<span class="separator">|</span>
	<a href="proposal.pdf">Proposal</a> <span class="separator">|</span>
	<a href="kontak.html">Contact</a>
  </div>
  

  <div id="title-container">
	  <div class="title-img-container">
		<img class="title-img" src="img/logo.png">
		<img class="title-img first" src="img/circles1.png">
		<img class="title-img second" src="img/circles2.png">
		<img class="title-img third" src="img/circles3.png">
	  </div>
  </div>
  
  <div id="carousel-container">
	<div id="carousel">
		<!-- <a href="info.php?section=media" class="carousel-item">	<img src="img/trailer.png"> </a> -->
		<a href="info.php?section=basketball" class="carousel-item">	<img src="img/basketball.png"> </a>
		<a href="info.php?section=futsal" class="carousel-item">		<img src="img/futsal.png"> </a>
		<a href="info.php?section=paskibra" class="carousel-item">		<img src="img/paskibra.png"> </a>
		<a href="info.php?section=badminton" class="carousel-item">		<img src="img/badminton.png"> </a>
		<a href="info.php?section=bangfest" class="carousel-item">		<img src="img/bangfest.png"> </a>
		<a href="info.php?section=pmr" class="carousel-item">			<img src="img/pmr.png">	</a>
		<a href="info.php?section=movie" class="carousel-item">			<img src="img/movie.png"> </a>
		<a href="info.php?section=graffiti" class="carousel-item">		<img src="img/graffiti.png"> </a>
		<a href="info.php?section=dance" class="carousel-item">			<img src="img/dance.png"> </a>
		<a href="info.php?section=photography" class="carousel-item">	<img src="img/photography.png">	</a>		
	</div>
  </div>
  
  <div class="footer">
	<img class="aboutimg" src="img/pglogo.png">
	<div class="aboutdiv">Created by <span>Pixagraphica</span></div>
  </div>
  
</body></html>

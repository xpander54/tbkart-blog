<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">



	
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet"> 
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	


	<div id="page-wrap">

		<header class="main">
			<div class="container1 clear-fix">
				
				<div class="logo float-left">

					

					<img class="width-100" src="wp-content/themes/tbkart-theme/img/logo.png" alt="tb kart">

				</div>
				<aside class="search">
					<?php get_search_form(); ?>
				</aside>
	
			
				
				<nav class="main float-right">
					
					<?php wp_nav_menu(array('menu' =>'Menu 1')); ?>

				</nav>
				
			</div>
				
				
			
		</header>

		<section class="main slide-show">
			<div class="slide-container">
				
				<div class="slide">

					
					


					<!--Bootstrap-->
				
				
					<div id="myCarousel" class="carousel slide">

		              <ol class="carousel-indicators">

		                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		                <li data-target="#myCarousel" data-slide-to="1"></li>
		                <li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
		              </ol>

		              <!-- Carousel items -->
		              <div class="carousel-inner">

		                <div class="active item">
		                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide1.jpg" class="slide-img" alt="karts profecionales">
		                </div>
		                <div class="item">
		                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide2.jpg" class="slide-img" alt="kart">
		                </div>
		                <div class="item">
		                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide3.jpg" alt="karts" class="slide-img">
		                </div>
		                <div class="item">
		                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide4.jpg" alt="tb kart" class="slide-img">
		                </div>
		                <div class="item">
		                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide5.jpg" alt="tb kart" class="slide-img">
		                </div>


		              </div>
		              <!-- Carousel nav 
		              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		              
		              
		              -->
		            </div> 

					<!--/Bootstrap-->


				</div>

			</div>
		</section>

		<section class="main-cont main">
			
			<div class="container clear-fix">
				<h2>TB Kart <em>México</em></h2>
				<p>
				<h1>
					Somos líderes en venta de karts profecionales.
					
				</h1>
					
				</p>
				
					
					

			</div>
			
		</section>



		
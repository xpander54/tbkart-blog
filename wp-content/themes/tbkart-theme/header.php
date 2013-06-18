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
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	


	<div id="page-wrap">

		<nav class="menu-1">
			<div class="menu-btn1" onclick="clicked-menu(0);" style="margin: 20px 0px 0px 35px;"></div>
			<div class="menu-btn1" onclick="clicked-menu(1);" style="margin: 20px 0px 0px 195px;"></div>
			<div class="menu-btn1" onclick="clicked-menu(2);" style="margin: 20px 0px 0px 345px; width:140px;"></div>
			<div class="menu-btn1" onclick="clicked-menu(3);" style="margin: 20px 0px 0px 515px; width:130px;"></div>
			<div class="menu-btn1" onclick="clicked-menu(4);" style="margin: 20px 0px 0px 695px;"></div>


			<div class="menu-selector"></div>
		</nav>


		<div class="main-cont clear-fix">
				
			<section id="header" class="header">
			
				
				<div class="bnr-img">
					<!--<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>-->
					<div class="bnr-txt">
						<h1>Noticas de Salud </h1>
						<div class="description"><?php bloginfo('description'); ?></div>
					</div>

				</div>

			</section>



		
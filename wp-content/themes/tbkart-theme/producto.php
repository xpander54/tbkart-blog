<?php

/*
Template Name: Página Producto
*/

?>

<?php get_header(); the_post(); ?>

	<div class="archive-posts max-1280 center clear-fix">

		<div class="breadcrumb">
			<?php
				if (function_exists('bcn_display')) {
					bcn_display();
				}
			?>
		</div>
		<div class="product-cats">
			<?php 

				echo get_post_meta($post->ID, "desc_sidebar", true);

			?>
			
		</div>

		<div class="product-nfo">

			<?php the_content(); ?>
			
		</div>

	</div>

<?php get_footer(); ?>
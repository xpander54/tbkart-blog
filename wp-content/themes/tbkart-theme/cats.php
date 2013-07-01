<?php

/*
Template Name: Categorías
*/

?>

<?php get_header(); the_post(); ?>


	<div class="archive-posts max-1280 center clear-fix">

		

		<div class="cats center">


			<div class="breadcrumb">
				<?php
					if (function_exists('bcn_display')) {
						bcn_display();
					}
				?>
			</div>
	

	<?php
		
		$categoriesCF = get_post_meta($post->ID, "cats", true);
		// example value = "Sprockets|92,Sprunklers|94"
		
		$allCategories = explode(",", $categoriesCF);
		// $allCategories[0] = "Sprockets|92"
		// $allCategories[1] = "Sprunklers|94"
 
		foreach ($allCategories as $category) {

			$pieces = explode("|", $category);
			// $pieces[0] = "Sprockets"
			// $pieces[1] = 92
					
			$link = get_permalink($pieces[1]);
			echo "<div class='product-group group'>";
			echo "<h3><a href='$link'>" . $pieces[0] . "</a></h3>";

			query_posts("posts_per_page=-1&post_type=page&post_parent=$pieces[1]");

			while (have_posts()) : the_post(); ?>

			 <a href="<?php the_permalink(); ?>" class="product-jump" title="<?php echo "$" . get_post_meta($post->ID, "product_price", true); ?>" data-large="<?php get_post_meta($post->ID, "product_image", true); ?>">
			
				<div class="productos">
					

				     <?php 
				     	$upload_dir = wp_upload_dir(); 

				     	
				     	echo "<img src='" . $upload_dir['baseurl'] .'/' .get_post_meta($post->ID, "imagen_producto", true) . "' />"; 
				     	
						//echo 'upload dir = ' . $upload_dir['baseurl'];


				     ?>
				     <div class="product-title"><?php the_title(); ?></div>
			     	<!--<span class="product-code"><?php echo get_post_meta($post->ID, "product_code", true); ?></span>-->
				</div>
			     

			 </a>

			<?php endwhile; wp_reset_query();

			echo "</div>";

		};
	?>
  		        
	</div>

			<?php //the_content(); ?>
			
		</div>

	</div>

<?php get_footer(); ?>
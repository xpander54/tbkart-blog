<?php get_header(); ?>





		<section class="main slide-show">
			<div class="container">
				
				<div class="slide">

					<img class="width-100" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1/slide-show.jpg" alt="tb kart">
					
				</div>

			</div>
		</section>

		<section class="main-cont main clear-fix">
			
			<div class="container clear-fix">
				<h2>Lorem ipsum <em>dolor</em> sit amet</h2>
				<p>
					
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</p>
				
					
					

			</div>
			
		</section>





	<section class="main news">
		<div class="container clear-fix">

			<article class="nfo">
				<h2>Duis aute irure dolor</h2>
				Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</article>





	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div style="" class="nfo archive-posts">
		
			<a href="/index.php">&#8592; Atras</a>

			<!--<div <?php post_class() ?> id="post-<?php the_ID(); ?>">-->
			<div class="nfo archive-posts" id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php edit_post_link('Editar post','','.'); ?>
				
			</div>


	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

		

	</div>

</section>

<?php get_footer(); ?>


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
				<h2>TB Kart <em>México</em></h2>
				<p>
				<h1>
					Somos lideres en venta de karts profecionales.
					
				</h1>
					
				</p>
				
					
					

			</div>
			
		</section>



	<article class="archive-posts max-1280 center">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="nfo" id="post-<?php the_ID(); ?>">

				<h2><? //php the_title(); ?></h2>

				<?php  //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Páginas: ', 'next_or_number' => 'number')); ?>

				</div>

				<?php edit_post_link('Editar post.', '<p>', '</p>'); ?>

			</div>
			
			<?php  comments_template(); ?>

			<?php endwhile; endif; ?>

	</article>

<?php get_footer(); ?>
<?php get_header(); ?>





		





	<section class="main news">
		<div class="container clear-fix">
<!--
			<article class="nfo">
				<h2>Duis aute irure dolor</h2>
				Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</article>

-->



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


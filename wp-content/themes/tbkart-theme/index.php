<?php get_header(); ?>


	<article class="aside">
				
		<?php get_sidebar(); ?>
	
	</article>



	<article class="post posts">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<div class="post-separador"></div>
				
				<div class="txt-naranja">
					

					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					
				</div>

				<div class="entry">
					<?php the_content(); ?>
				</div>

				<div class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
					Publicado en <?php the_category(', ') ?> | 
					<?php comments_popup_link('Sin comentarios &#187;', '1 Comentario &#187;', '% Commentarios &#187;'); ?>
				</div>

				<div class="post-separador"></div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php else : ?>

			<h2>Sin Resultados</h2>

		<?php endif; ?>

	</article>
	




<?php get_footer(); ?>
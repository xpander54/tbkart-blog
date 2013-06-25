<?php get_header(); ?>


	



		
	


	<section class="main news">
			<div class="container clear-fix">

				<article class="nfo">
					<h2>Últimas Noticias</h2>
						Karts, eventos, galerias y publicaciones.
				</article>


				<?php// if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<article class="post" id="post-<?php the_ID(); ?>">
					<div class="producto-1">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/destacados/kart.png" alt="tb kart mexico">

					</div>

					<div class="post-title">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<h3>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							
							<?php// the_content(); ?>
							<?php the_excerpt(); ?> 


							<?php the_tags('Tags: ', ', ', '<br />'); ?>
						Publicado en <?php the_category(', ') ?> | 
						<?php comments_popup_link('Sin comentarios &#187;', '1 Comentario &#187;', '% Commentarios &#187;'); ?>
						</h3>
					</div>
				</article>

				<?php endwhile; ?>

				<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>

				<?php else : ?>

					<h2>Sin Resultados</h2>

				<?php endif; ?>


				
				
				
			

			</div>
			
	</section>

	
	




<?php get_footer(); ?>

<?php get_header(); ?>

		


	<section class="main news">
			<div class="container clear-fix">

				<article class="nfo">
					<h2>Archivo</h2>
					Aqui almacenamos todas nuestras publicaciones anteriores.
				</article>


				<?php if (have_posts()) : ?>

		 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h2>Archivo de la categoría&#8216;<?php single_cat_title(); ?>&#8217;</h2>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h2>Posts con el tag &#8216;<?php single_tag_title(); ?>&#8217;</h2>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h2>Archivo del día <?php the_time('F jS, Y'); ?></h2>

					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h2>Archivo del mes de <?php the_time('F, Y'); ?></h2>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h2>Archivo del año <?php the_time('Y'); ?></h2>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h2>Archivo del autor: </h2>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h2>Archivos del blog</h2>
					
					<?php } ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php while (have_posts()) : the_post(); ?>
					
						<!--<div <?php post_class() ?>>-->
							<div style="" class="nfo archive-posts">
						
							<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

							<div class="entry width-100">
								<?php //the_content(); ?>
								<?php the_excerpt(); ?> 

							</div>

						</div>

					<?php endwhile; ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
					
					<?php else : ?>

						<h2>No hay resultados.</h2>

					<?php endif; ?>


			</div>

	</section>



<?php get_footer(); ?>
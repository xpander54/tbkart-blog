<?php get_header(); ?>




	

	<section class="main-cont main">
		
		<div class="container clear-fix">
			<h2>TB Kart <em>México</em></h2>
			
			<h1>
				Somos líderes en venta de karts profecionales.
				
			</h1>

		</div>
		
	</section>

	<section class="main news">
		<div class="container clear-fix">

			<br><br>


			<h2>Resultados de búsqueda</h2>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			
			<div style="" class="nfo archive-posts">
				
				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<ul>
					    <!--<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>-->
					    <li id="post-<?php the_ID(); ?>"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
						<li><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></li>
					    <li><?php the_excerpt(); ?></li>
					</ul>
					<div class="post-separador"></div>


				<?php endwhile; ?>
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				<?php else : ?>
					<h2>No hay Resultados.</h2>

				<?php endif; ?>

			</div>

		</div>
			
	</section>






<?php get_footer(); ?>
<?php 

/*
Template Name: Archives
*/

 ?>


<?php get_header(); ?>

		


	<section class="main news">
			<div class="container clear-fix">

				<article class="nfo">
					<h2>Archivo</h2>
					las últimas publicaciones de los profecionales.
				</article>

				
					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<div style="" class="nfo archive-posts">
					     <ul>
						    <?php $the_query = new WP_Query( 'showposts=5' ); ?>

						    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						    <!--<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>-->
						    <li><h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
							<li><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></li>
						    <li><?php the_excerpt(); ?></li>

							<div class="post-separador"></div>

						    <?php endwhile;?>

					    </ul>
					</div>


				
			</div>

	</section>



<?php get_footer(); ?>
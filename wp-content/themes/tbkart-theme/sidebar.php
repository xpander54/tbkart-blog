<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
  
    	<?php get_search_form(); ?>
        <!--
        
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
        -->
<br>

        <h2>Categorías</h2>
        <ul>
           <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<h2>Archivo</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Usuarios</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscripción</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Posts (RSS)</a></li>
    		<!--<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>-->
    	</ul>
	
	<?php endif; ?>

</aside>
<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <!--
    	<?php get_search_form(); ?>
        
        
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
        -->
<br>

        
        
        <ul class="menu-admin-ul">
            <li class="float-left aside-sidebar">

                <h2>Categorías</h2>
                <ul class="menu-admin-links-ul">
                   <?php wp_list_categories('show_count=1&title_li='); ?>
                </ul>

            </li>
            <li class="float-left aside-sidebar">

                <h2>Archivo</h2>
                <ul class="menu-admin-links-ul">
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>

            </li>
            <!--<li class="float-left aside-sidebar">

            <h2>Links Recomendados</h2>
            <?php wp_list_bookmarks(); ?>

            </li>
            -->
            <li class="float-left aside-sidebar">

                <h2>Usuarios</h2>
                <ul class="menu-admin-links-ul">
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    
                    <?php wp_meta(); ?>
                </ul>

            </li>
            <li class="float-left aside-sidebar">
                

                <h2>Subscripción</h2>
                <ul class="menu-admin-links-ul">
                    <li><a href="<?php bloginfo('rss2_url'); ?>">Posts (RSS)</a></li>
                    <!--<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>-->
                </ul>

            </li>
        </ul>


        
        
    	
        
    	
    
    	
    	
    	
	
	<?php endif; ?>

</aside>
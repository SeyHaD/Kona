<html>
    <html <?php language_attributes(); ?> class="no-js">
        <title>Kona</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />  
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="sidebar-menu">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="homepage-link">
                    <?php bloginfo( 'name' ); ?>
                </a>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
			    ) );  
            ?>
        </div>
        <div id="page">
            
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
            
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
        
        <?php wp_footer(); ?>
    </body>
</html>
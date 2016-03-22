<!DOCTYPE html>
<html>
    <html <?php language_attributes(); ?> class="no-js">
        <title>Kona</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />  
        <?php wp_head(); ?>
    </head>
    <body>
        <?php get_template_part('header'); ?>
				
		<!-- Main -->
				<section id="main" class="container">
				    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                    
                        <?php get_template_part('content'); ?>
                    
                        <?php endwhile; ?>
                        
                        <?php the_posts_pagination(); ?>
                    <?php endif; ?>
					
				</section>

        <?php get_template_part('footer'); ?>
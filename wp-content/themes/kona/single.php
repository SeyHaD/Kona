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
				    <?php if ( have_posts() ) : the_post(); ?>
                        
                        <header>
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>
                        
                        
                        <div class="box">
                            <span class="image featured">
                                <?php the_post_thumbnail(); ?>
                            </span>
                            
                            <?php the_content(); ?>
                            
                        </div>
                        
                        
                        
                        <?php
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                        ?>
                        
                        <?php the_posts_pagination(); ?>
                    <?php endif; ?>
					
				</section>

        <?php get_template_part('footer'); ?>

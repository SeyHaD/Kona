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
                            // get more posts
                            $category_ID = get_the_category()[0]->ID;
                            $post_ID = get_the_ID();
                            
                            $args = array(
                                'posts_per_page'   => 4,
                                'category' => $category_ID,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'exclude' => $post_ID,
                            );                       
                            
                            $category_posts = get_posts( $args );
                        ?>
                        
                        <div class="row">
                            <?php foreach ( $category_posts as $post ): setup_postdata( $post ); ?>
                                <div class="6u 12u(narrower)">
                                    <section class="box special">
        								<a href="<?php the_permalink(); ?>" class="image featured">
        								    <?php the_post_thumbnail(); ?>
        								</a>
        								<h3><?php the_title(); ?></h3>
        								<p><?php the_excerpt(); ?></p>
        								<ul class="actions">
        									<li><a href="<?php the_permalink(); ?>" class="button alt">Read More</a></li>
        								</ul>
        							</section>
                                </div>
                            <?php endforeach; wp_reset_postdata(); ?>
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

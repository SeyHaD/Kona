<!DOCTYPE html>
<html>
    <html <?php language_attributes(); ?> class="no-js">
        <title>Kona</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />  
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="page-wrapper">
            <!-- Header -->
				<header id="header">
					<span class="logo">
					    <a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">Alpha</a> by HTML5 UP
					</span>
					<?php
                      wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container' => 'nav',
                        'container-id' => 'nav'
        			    ) );  
                    ?>
				</header>
				
		<!-- Main -->
				<section id="main" class="container">
				    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                    
                        <header>
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>
                        
                        
                        <div class="box">
                            <span class="image featured">
                                <?php the_post_thumbnail(); ?>
                            </span>
                            
                            <?php the_content(); ?>
                            
    						<h3>This is a subheading</h3>
    						<p>Cep risus aliquam gravida cep ut lacus amet. Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae ante vestibulum ante. Blandit. Ante accumsan nisi eu placerat gravida placerat adipiscing in risus fusce vitae ac mi accumsan nunc in accumsan tempor blandit aliquet aliquet lobortis. Ultricies blandit lobortis praesent turpis. Adipiscing accumsan adipiscing adipiscing ac lacinia cep. Orci blandit a iaculis adipiscing ac. Vivamus ornare laoreet odio vis praesent nunc lorem mi. Erat. Tempus sem faucibus ac id. Vis in blandit. Nascetur ultricies blandit ac. Arcu aliquam. Accumsan mi eget adipiscing nulla. Non vestibulum ac interdum condimentum semper commodo massa arcu.</p>
    						<div class="row">
    							<div class="6u 12u(mobilep)">
    								<h3>And now a subheading</h3>
    								<p>Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae lorem ipsum adipiscing ac. Vivamus ornare laoreet odio vis praesent.</p>
    							</div>
    							<div class="6u 12u(mobilep)">
    								<h3>And another subheading</h3>
    								<p>Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae lorem ipsum adipiscing ac. Vivamus ornare laoreet odio vis praesent.</p>
    							</div>
    						</div>
                        </div>
                        
                        
                        
                        <?php
                        if ( comments_open() || get_comments_number() ) {
        				    comments_template();
        			    }
        			    ?>
                    
                        <?php endwhile; ?>
                        
                        <?php the_posts_pagination(); ?>
                    <?php endif; ?>
                    
					
				</section>
        
        <!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; ConPanna. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				<li>Photos: <a href="https://unsplash.com">Unsplash</a></li>
				<li>Code: <a href="http://conpanna.net">ConPanna.</a></li>
			</ul>
		</footer>
        <?php wp_footer(); ?>
    </body>
</html>
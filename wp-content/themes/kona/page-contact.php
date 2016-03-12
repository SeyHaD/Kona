<?php
/*
    Template Name: Contact Page
*/
?>

<?php
    function debug($text){
        echo '<pre>';
        printf($text);
        echo '</pre>';
    }

    if (isset($_POST['contactForm'])){
        
        // set the variables
        $name = $_POST['contactForm']['name'];
        $email = $_POST['contactForm']['email'];
        $message = $_POST['contactForm']['message'];
        
        // validate the variables
        
        // send the email
        exit();
        
    }
?>

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
            
            <?php
                wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu',
			    ) );
            ?>
        </div>
        <div id="page">
            
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
            
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                
                <?php the_content(); ?>
                
                
                <form action="<?php the_permalink() ?>" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label for="name">Name</label>
                            <div class="control">
                                <input type="text" id="name" name="contactForm[name]" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email">Email</label>
                            <div class="control">
                                <input type="email" id="email" name="contactForm[email]" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="message">Message</label>
                            <div class="control">
                                <textarea id="message" name="contactForm[message]"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="actions">
                        <input type="submit" value="Send" />
                    </div>
                </form>
            
                <?php endwhile; ?>
            <?php endif; ?>
            
            
        </div>
        
        <?php wp_footer(); ?>
    </body>
</html>
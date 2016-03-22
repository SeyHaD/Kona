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
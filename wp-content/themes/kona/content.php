<header>
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</header>


<div class="box">
    <span class="image featured">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </span>
    
    <?php the_excerpt(); ?>
    
</div>



<?php
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
?>
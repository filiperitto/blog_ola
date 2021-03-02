<section class="recents-box">
    <h3 class="title">Posts Recentes</h3>
    <div class="wrap-post-recent">
        
        <?php // WP_Query arguments
        $args = array (
            'post_type'              => array( 'post' ),
            'posts_per_page'         => '4',
            'paged'                  => $paged,
        );

        // The Query
        $query = new WP_Query( $args );
        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>
<?php get_template_part('inc/post-recents', get_post_format()); ?>
<?php }
        }

        // Restore original Post Data
        wp_reset_postdata();

        ?>
    </div>
</section>
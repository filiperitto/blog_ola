<article>
    <div class="header-card">
        <h5><?php the_category(''); ?></h5>
    </div>
    <div class="thumb-cover"
        style="background: url(<?php echo the_post_thumbnail_url('recents-thumbnails')?>) no-repeat top center;">
        <a href="<?php the_permalink(); ?>" style="width: 100%; height: 100%; display: block;"></a>

    </div>
    <div class="title-box">
        <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
        <span class="date"><?php the_time('j'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span>
    </div>
</article>


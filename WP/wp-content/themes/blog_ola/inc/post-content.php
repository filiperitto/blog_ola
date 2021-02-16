<?php

/*
@package Bravus
---Default Post Format - Post

*/
?>
<article>
    <div class="wrap-post">
        <div class="thumb">
            <?php echo the_post_thumbnail('home-thumbnails')?>
        </div>
        <div class="content-box">
            <div class="data-tag">
                <span class="tag"><?php the_category(''); ?></span>
                <span class="date"><?php the_time('j'); ?>/<?php the_time('m'); ?>/<?php the_time('Y'); ?></span>
            </div>

            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>

            <div class="intro"><?php the_excerpt(); ?></div>

            <p class="autor">Por <?php the_author(); ?></p>
        </div>
    </div>
</article>
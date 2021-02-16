<?php get_header(); ?>

<body id="body" class="blog-loop">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php get_template_part('inc/page-header');?>
    <div class="main">
        <?php get_template_part('inc/page-sidebar');?>

        

        <div id="content-container" class="content-container scrollhere">
            <section class="blog-loop">
                <div class="wrap-blog">
                    <div class="module-title">
                        <h2>Blog | Ola Podcasts</h2>
                        <p>Nossas ultimas novidades no mundo da podosfera</p>
                    </div>

                    <div class="loop">
                
                        <?php if (have_posts()) : ?>

                            <?php while (have_posts()) : the_post(); ?>
                            
                            <?php get_template_part('inc/post-content', get_post_format()); ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                        
                        <?php wp_pagenavi(); ?>
                        
                    </div>
                </div>

            </section>

            <?php get_template_part('inc/footer');?>
        </div>
        
    </div>

    <?php get_footer(); ?>
    
</body>

</html>
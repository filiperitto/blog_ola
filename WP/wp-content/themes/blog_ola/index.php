<?php get_header(); ?>

<body id="body" class="blog-loop">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php get_template_part('inc/page-header');?>
    <div class="main">
        <?php get_template_part('inc/page-sidebar');?>

        

        <div id="content-container" class="content-container scrollhere">
            <div class="module-title-divisor">
                <div class="mask"></div>
                <div class="wrap">
                    <div class="titlesvg">
                        <svg width="194" height="96" viewBox="0 0 194 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M118.361 53.7062H113.863C111.2 53.7062 109.038 51.5934 109.038 48.9858V65.4843C109.038 68.0918 111.2 70.2046 113.863 70.2046H118.361C121.025 70.2046 123.182 68.0918 123.187 65.4898V48.9917C123.182 51.5937 121.025 53.7062 118.361 53.7062Z" fill="#00AEDF"/>
                            <path d="M118.361 25.71H113.863C111.2 25.71 109.038 27.8228 109.038 30.4303V36.179V48.9859C109.038 51.5934 111.2 53.7062 113.863 53.7062H118.361C121.025 53.7062 123.182 51.5934 123.187 48.9914V36.179V30.4303C123.187 27.8228 121.025 25.71 118.361 25.71Z" fill="#66429A"/>
                            <path d="M140.127 40.6275H135.569C132.922 40.6275 130.776 38.4813 130.776 35.835V27.084C130.776 24.4374 132.922 22.2915 135.569 22.2915H140.127C142.774 22.2915 144.92 24.4377 144.92 27.084V35.835C144.92 38.4816 142.774 40.6275 140.127 40.6275Z" fill="#C21E8E"/>
                            <path d="M9.35134 40.6275H4.79248C2.14592 40.6275 0 38.4813 0 35.835V27.084C0 24.4374 2.14592 22.2915 4.79248 22.2915H9.35134C11.9979 22.2915 14.1438 24.4377 14.1438 27.084V35.835C14.1438 38.4816 11.9976 40.6275 9.35134 40.6275Z" fill="#00AE4D"/>
                            <path d="M97.1397 11H91.6077C89.2281 11 87.2988 12.907 87.2988 15.2587V34.8284C87.2988 32.4767 89.2281 30.5697 91.6077 30.5697H97.1397C99.5192 30.5697 101.449 32.4767 101.449 34.8284V15.2587C101.449 12.9067 99.5192 11 97.1397 11Z" fill="#F57E20"/>
                            <path d="M97.1397 30.5698H91.6077C89.2281 30.5698 87.2988 32.4768 87.2988 34.8285V46.7294V80.7361C87.2988 83.0878 89.2281 84.9948 91.6077 84.9948H97.1397C99.5192 84.9948 101.449 83.0933 101.449 80.7416V46.735V34.8285C101.449 32.4768 99.5192 30.5698 97.1397 30.5698Z" fill="#FFCB05"/>
                            <path d="M31.6458 11H26.1138C23.7342 11 21.8049 12.5289 21.8049 14.4081V34.868C21.8049 32.9888 23.7342 31.4599 26.1138 31.4599H31.6458C34.0253 31.4599 35.9546 32.9833 35.9546 34.868V14.4081C35.9546 12.5233 34.0253 11 31.6458 11Z" fill="#1B4178"/>
                            <path d="M31.6458 31.4595H26.1138C23.7342 31.4595 21.8049 32.9884 21.8049 34.8676V64.1008V66.7972C21.8049 68.6819 23.7342 70.2053 26.1138 70.2053H31.6458C34.0253 70.2053 35.9546 68.6819 35.9546 66.8027V64.1064V34.8676C35.9546 32.9831 34.0253 31.4595 31.6458 31.4595Z" fill="#0073BC"/>
                            <path d="M52.9398 57.0212H48.4419C45.7786 57.0212 43.616 54.9084 43.616 52.3008V65.4911C43.616 68.0987 45.7786 70.2115 48.4419 70.2115H52.9398C55.603 70.2115 57.7656 68.0987 57.7656 65.4911V52.3008C57.7656 54.9084 55.603 57.0212 52.9398 57.0212Z" fill="#00AE4D"/>
                            <path d="M52.9398 25.71H48.4419C45.7733 25.71 43.616 27.8228 43.616 30.4303V34.2409V52.2999C43.616 54.9074 45.7786 57.0202 48.4419 57.0202H52.9398C55.603 57.0202 57.7656 54.9074 57.7656 52.2999V34.2409V30.4303C57.7656 27.8228 55.603 25.71 52.9398 25.71Z" fill="#7BC143"/>
                            <path d="M75.3264 65.0678H69.7944C67.4149 65.0678 65.4856 63.1608 65.4856 60.8091V80.7411C65.4856 83.0928 67.4149 84.9998 69.7944 84.9998H75.3264C77.706 84.9998 79.6353 83.0928 79.6353 80.7411V60.8091C79.6353 63.1608 77.706 65.0678 75.3264 65.0678Z" fill="#ED1C24"/>
                            <path d="M75.3264 11H69.7944C67.4149 11 65.4856 12.907 65.4856 15.2587V22.5585V60.8092C65.4856 63.1609 67.4149 65.0679 69.7944 65.0679H75.3264C77.706 65.0679 79.6353 63.1609 79.6353 60.8092V22.5585V15.2587C79.6353 12.9067 77.706 11 75.3264 11Z" fill="#E9477A"/>
                            <line x1="189.5" y1="1.96701e-07" x2="189.5" y2="96" stroke="white" stroke-width="9"/>
                        </svg>
                        <h1>Blog</h1>
                    </div>
                    <div class="info-left">
                        <h3>Olá! Bem-vindo ao Blog da OLA Podcasts!</h3>
                        <p>Descubra mais sobre o universo dos podcasts aqui! </p>
                    </div>
                    
                </div>
            </div>
            <section class="blog-loop">

                <div class="wrap-blog">

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

            <?php get_template_part('inc/newsletter-box-section');?>

            <?php get_template_part('inc/recents-box-section');?>

            <?php get_template_part('inc/footer');?>
        </div>
        
    </div>

    <?php get_footer(); ?>
    
</body>

</html>
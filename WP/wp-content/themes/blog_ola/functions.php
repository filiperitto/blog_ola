<?php

//require get_template_directory() . '/includes/function-admin.php';

add_action('after_setup_theme', 'custom_setup');

function custom_setup() {

    // Oculta a barra de admin no front
    add_filter('show_admin_bar', '__return_false');

    /* Carrega scripts e estilos personalizados */
    add_action('wp_enqueue_scripts', 'custom_formats');

    // Caso seja uma versão anterior ou igual ao 5.0 beta
    add_filter('gutenberg_can_edit_post', '__return_false', 5);

    // Caso seja a versão posterior à 5.0
    add_filter('use_block_editor_for_post', '__return_false', 5);

    // Insere a opção de imagens destacadas
    add_theme_support('post-thumbnails');
    add_image_size('home-thumbnails', 660, 360, array('center'));
    add_image_size('recents-thumbnails', 322, 128, array('center'));
}

function custom_formats() {

    wp_register_style('style', PW_THEME_URL . 'assets/css/style.css', null, null, 'all');

    wp_register_script('esc-jquery', PW_THEME_URL . 'assets/js/vendor/jquery-3.5.1.min.js', null, null, true);
    wp_register_script('lazysizes', PW_THEME_URL . 'assets/js/lazysizes.min.js', array('esc-jquery'), null, true);
    wp_register_script('main', PW_THEME_URL . 'assets/js/main.js', array('jquery'), null, true);


    wp_enqueue_style('style');


    wp_enqueue_script('esc-jquery');
    wp_enqueue_script('lazysizes');
    wp_enqueue_script('main');


}
/* Carrega scripts e estilos personalizados */
add_action('wp_enqueue_scripts', 'custom_formats');

// Logo login page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(wp-content/themes/blog_ola/assets/img/svg/logo.svg);
		height:52px;
		width:190px;
		background-size: auto;
		background-repeat: no-repeat;
        background-size: 190px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


define('PW_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('PW_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('PW_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('PW_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */


//blog stats
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

function widget_setup() {

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Categorias',
            'before_widget' => '<li class="catego-li-widget">',
            'before_title' => '<h5>',
            'after_title' => '</h5><div class="wrappe-menu add-menu">',
            'after_widget' => '</div></li>'
        )
    );

}
add_action('widgets_init','widget_setup');

function cat_edit( $links ) {

	$links = str_replace('</a> (', '<span>', $links);
	$links = str_replace(')', '</span> </a>', $links);

	return $links;

}
add_filter( 'wp_list_categories', 'cat_edit' );


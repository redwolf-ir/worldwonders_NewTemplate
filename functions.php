<?php
function Red_Wolf()
{
  wp_enqueue_style('mainStyle', get_stylesheet_uri());
  wp_enqueue_style('Less-Style', get_template_directory_uri() . '/style/asli.less');
  // wp_enqueue_style('owl.carousel-Style', get_template_directory_uri() . '/style/owl.carousel.min.css');
  // wp_enqueue_style('owl.carouse.default-Style', get_template_directory_uri() . '/style/owl.theme.default.min.css');
  wp_enqueue_script('Jquery-min', get_template_directory_uri() . '/redwolf_js/jquery.min.js');
  // wp_enqueue_script('slick-min', get_template_directory_uri() . '/redwolf_js/slick.min.js');
  // wp_enqueue_script('slick-min', get_template_directory_uri() . '/redwolf_js/owl.carousel.min.js');
  wp_enqueue_script('TabsLet-min', get_template_directory_uri() . '/redwolf_js/jquery.tabslet.min.js');
  wp_enqueue_script('jquery_Headroom', get_template_directory_uri() . '/redwolf_js/headroom.min.js');
  wp_enqueue_script('Default-JS', get_template_directory_uri() . '/redwolf_js/redwolf.js');
}
add_action('wp_enqueue_scripts', 'Red_Wolf');
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
add_theme_support('post-thumbnails');
if (function_exists('add_theme_support')) {
  add_image_size('thumb1', 250, 200, true);
  add_image_size('thumb2', 800, 400, true);
  add_image_size('thumb3', 400, 200, true);
  add_image_size('thumb4', 150, 110, true);
}
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
add_theme_support('post-formats', array(
  'gallery',
  'status',)
);
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
function wp_pagination()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

?>

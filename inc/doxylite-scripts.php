<?php
function doxy_scripts()
{

    //Google Fonts
    wp_enqueue_style('google-font-1', '//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600&display=swap');

    //====================ALL CSS FILE HERE=====================================//

    wp_enqueue_style('bootstrap', DOXY_CSS_URL . '/bootstrap.min.css', array(), 'v4.1.3', 'all');

    wp_enqueue_style('owl-carousel', DOXY_CSS_URL . '/owl.carousel.min.css', array(), 'v2.3.4', 'all');

    wp_enqueue_style('slimmenu', DOXY_CSS_URL . '/slimmenu.min.css', array(), 'v1.0', 'all');

    wp_enqueue_style('font-awesome', DOXY_CSS_URL . '/font-awesome.min.css', array(), 'v4.7.0 ', 'all');

    wp_enqueue_style('superfish', DOXY_CSS_URL . '/superfish.css', array(), 'v1.0', 'screen');

    wp_enqueue_style('prism', DOXY_CSS_URL . '/prism.css', array(), 'v1.0', 'all');

    wp_enqueue_style('animate', DOXY_CSS_URL . '/animate.min.css', array(), 'v3.5.2', 'all');

    wp_enqueue_style('doxylite-main', DOXY_CSS_URL . '/main.css', array(), 'v1.0', 'all');

    wp_enqueue_style('doxylite-print', DOXY_CSS_URL . '/print.css', array(), 'v1.0', 'print');

    wp_enqueue_style('doxylite-style', get_stylesheet_uri());


    //-- ====================ALL JS FILE HERE===================================== -//

    wp_enqueue_script('bootstrap', DOXY_JS_URL . '/bootstrap.min.js', array('jquery'), 'v4.1.3', true);

    wp_enqueue_script('owl-carousel', DOXY_JS_URL . '/owl.carousel.min.js', array('jquery'), 'v2.3.4', true);

    wp_enqueue_script('popper', DOXY_JS_URL . '/popper.min.js', array('jquery'), 'v1.0.0', true);

    wp_enqueue_script('jquery-slimmenu', DOXY_JS_URL . '/jquery.slimmenu.min.js', array('jquery'), 'v1.0.0', true);

    wp_enqueue_script('wow', DOXY_JS_URL . '/wow.min.js', array('jquery'), 'v3.5.2', true);

    wp_enqueue_script('prism', DOXY_JS_URL . '/prism.js', array('jquery'), 'v1.0.0', true);

    wp_enqueue_script('hoverIntent', DOXY_JS_URL . '/hoverIntent.js', array('jquery'), 'v1.7.10', true);

    wp_enqueue_script('superfish', DOXY_JS_URL . '/superfish.js', array('jquery'), 'v1.7.10', true);

    wp_enqueue_script('supposition', DOXY_JS_URL . '/supposition.js', array('jquery'), 'v1.7.10', true);

    wp_enqueue_script('doxylite-skip-link-focus-fix', DOXY_JS_URL . '/skip-link-focus-fix.js', array(), '20151215', true);

    wp_enqueue_script('smooth-scroll', DOXY_JS_URL . '/smooth-scroll.polyfills.min.js', array(), '2015121', true);

    wp_enqueue_script('doxylite-custom', DOXY_JS_URL . '/custom.js', array('jquery'), 'v1.0', true);

    
    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'doxy_scripts');


function doxy_admin_style()
{
    wp_enqueue_style('admin-style', DOXY_CSS_URL . '/admin.css');
}
add_action('admin_enqueue_scripts', 'doxy_admin_style');

<?php
if (!defined('DOXY_THEME_URI')) {
    define('DOXY_THEME_URI', get_template_directory_uri());
}
define('GIT', 'https://raw.githubusercontent.com/mDAAKASH/doxylite1.0.5/master/demo-');
define('DOXY_THEME_DIR', get_template_directory());
define('DOXY_CSS_URL', get_template_directory_uri() . '/assets/css');
define('DOXY_JS_URL', get_template_directory_uri() . '/assets/js');
define('DOXY_IMG_URL', DOXY_THEME_URI . '/assets/images');
define('DOXY_INC_DIR', DOXY_THEME_DIR . '/inc');
define('DOXY_THEME', true);
define('A', 'content.xml');
define('B', 'widget.wie');
define('C', 'customization.dat');

function doxy_setup()
{
    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
    	 * Make theme available for translation.
    	 * Translations can be filed in the /languages/ directory.
    	 * If you're building a theme based on Laundry, use a find and replace
    	 * to change 'laundry' to the name of your theme in all the template files.
    	 */
    load_theme_textdomain('doxylite', get_template_directory() . '/languages');

    // Set the default content width.
    $GLOBALS['content_width'] = 900;

    //Support Automatic Feed Links 
    add_theme_support('automatic-feed-links');

    //Support Post-Thumbnails
    add_theme_support('post-thumbnails');

    //Support Titile Tag
    add_theme_support('title-tag');

    //Add Image Size
    add_image_size('doxy-featured-image', 730, 430, false);

    // Load regular editor styles into the new block-based editor.
    add_theme_support('editor-styles');

    //enqueue editor style
    add_editor_style('style-editor.css');

    add_editor_style('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    // Load default block styles.
    add_theme_support('wp-block-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    //Custom Logo
    add_theme_support('custom-logo');

    //Custom Header
    add_theme_support('custom-header');

    //Custom Background
    add_theme_support("custom-background");
}
add_action('after_setup_theme', 'doxy_setup');

//Doxy enqueue Scripts
include_once('inc/doxylite-scripts.php');


//Doxy TGM Plugin Activation
require_once('inc/tgm/class-tgm-plugin-activation.php');
require_once('inc/tgm/recommended-plugins.php');


//Doxy ACF Fields
include_once('inc/acf-fields.php');

//custom comments form label
function doxy_comment_form_text($fields)
{
    $fields['label_submit'] = esc_html__('Add Comment', 'doxylite');
    $fields['title_reply'] = esc_html__('Leave a Comment', 'doxylite');

    return $fields;
}
add_filter('comment_form_defaults', 'doxy_comment_form_text');



//Doxy Nav Menus
function doxy_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' =>  esc_html__('Primary Menu', 'doxylite'),
        'footer_menu' =>  esc_html__('Footer Menu', 'doxylite'),
    ));
}
add_action('init', 'doxy_nav_menus');

//Doxy Sidebar
function doxy_sidebar()
{
    register_sidebar(array(
        'name' => esc_html__('Doxy Sidebar', 'doxylite'),
        'id'  => 'doxy-sidebar',
        'description' =>  esc_html__('Doxy sidebar', 'doxylite'),
        'before_title' => '<h5 class="sidebar-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'doxylite'),
        'id'  => 'footer1',
        'description' =>  esc_html__('Use this sidebar for footer one.', 'doxylite'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'doxylite'),
        'id'  => 'footer2',
        'description' =>  esc_html__('Use this sidebar for footer two.', 'doxylite'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'doxylite'),
        'id'  => 'footer3',
        'description' =>  esc_html__('Use this sidebar for footer three.', 'doxylite'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Four', 'doxylite'),
        'id'  => 'footer4',
        'description' =>  esc_html__('Use this sidebar for footer four.', 'doxylite'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'doxy_sidebar');


//Doxy excerpt
function doxy_excerpt($limits = 25)
{
    $limits = $limits + 1;
    $content = strip_tags(get_the_content());
    $make_index = explode(' ', $content, $limits);
    if (count($make_index) <= $limits) {
        array_pop($make_index);
    }
    $excerpt = implode(' ', $make_index);
    return $excerpt;
}

//Add class in menu item
function doxy_nav_class($classes, $item)
{
    $classes[] = 'nav-item delay-1';
    return $classes;
}
add_filter('nav_menu_css_class', 'doxy_nav_class', 10, 2);


function doxy_add_span($links)
{
    $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}
add_filter('wp_list_categories', 'doxy_add_span');

function doxy_add_span_in_archive($links)
{
    $links = str_replace('</a>&nbsp;(', '</a><span class="archive-count">', $links);
    $links = str_replace(')</li>', '</span></li>', $links);
    return $links;
}
add_filter('get_archives_link', 'doxy_add_span_in_archive');


// Comments Layout
function doxy_comments($comment, $args, $depth)
{

    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

        <div class="doxy-comment">

            <div class="author-img">
                <?php echo get_avatar($comment, $args['avatar_size']); ?>
            </div>

            <div class="comment-meta">
                <h6 class="author">
                    <?php echo get_comment_author_link(); ?>
                    <span class="reply-link">
                        <?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__('Reply', 'doxylite'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                    </span>
                </h6>

                <div class="date-and-edit"><span class="date"><?php echo get_comment_date(); ?></span></div>

                <?php if ($comment->comment_approved == '0') : ?>
                    <em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'doxylite'); ?></em>
                    <br />
                <?php endif; ?>
                <div class="comment-text">
                    <?php comment_text(); ?>
                </div>

            </div>

        </div>


    </li>

<?php
}

function doxy_custom_body_class($classes)
{
    $classes[] = 'body';
    return $classes;
}
add_filter('body_class', 'doxy_custom_body_class');

function doxy_custom_post_class($classes)
{
    if (is_single()) {
        $classes[] = 'single-post';
    } else {
        $classes[] = 'blog-post blog-spacing';
    }
    return $classes;
}
add_filter('post_class', 'doxy_custom_post_class');


//Doxy customizer
require get_template_directory() . '/inc/customizer/class-customizer.php';

//Doxy theme info
require get_template_directory() . '/inc/welcome-page.php';

//Doxy customizer
require get_template_directory() . '/inc/doxylite-inline-style.php';

//Doxy modal search form
    function doxy_modal_search_form()
    { ?>
        <form class="modal-search-form" method="get" action="<?php echo esc_url(home_url()); ?>">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="<?php esc_attr_e('Search', 'doxylite'); ?>" name="s" required>
                <span class="input-group-btn">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    <?php
        }
    


//Doxy import demo content
function doxy_import_demo_content()
{
    return array(
        array(
            'import_file_name'           => esc_html__('Doxylite Demo', 'doxylite'),
            'import_file_url'            => esc_url(GIT . A),
            'import_widget_file_url'     => esc_url(GIT . B),
            'import_customizer_file_url' => esc_url(GIT . B),
            'import_notice'              => esc_html__('Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'doxylite'),
        ),
    );
}
add_filter('pt-ocdi/import_files', 'doxy_import_demo_content');

function doxy_import_after_menu()
{
    $themex_main_menu = get_term_by('name', 'primary menu', 'nav_menu');
    set_theme_mod('nav_menu_locations', array(
        'primary_menu' => $themex_main_menu->term_id,
    ));
}
add_action('pt-ocdi/after_import', 'doxy_import_after_menu');
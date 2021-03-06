<?php
/**
 * Theme Customizer
 * @package themeix
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function doxy_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// Panels Re-Assign
	$wp_customize->get_section( 'title_tagline' )->panel = 'header_options';		
	$wp_customize->get_section( 'colors' )->panel = 'color_options';
	$wp_customize->get_section( 'background_image' )->panel = 'general_options';
    $wp_customize->get_section( 'static_front_page' )->panel = 'general_options';
    $wp_customize->get_section( 'header_image' )->panel = 'header_options';
 

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'doxy_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'doxy_customize_partial_blogdescription',
        ) );
    }
    
    // Require upsell customizer section class.
	require get_template_directory() . '/inc/customizer/class-customizer-upsell.php';
	$wp_customize->register_section_type( 'doxy_customize_section_upsell' );
    $wp_customize->add_section( new doxy_customize_section_upsell(
        $wp_customize,
            'theme_upsell',
            array(
                'title'    => esc_html__( 'Need More Features?', 'doxylite' ),
                'pro_url'  => 'https://themeix.com/product/doxy-responsive-wordpress-theme/',
                'priority'  => 160,
            )
        )
    );
}
add_action( 'customize_register', 'doxy_customize_register' );

/*------------------------------------------
 =>  Render the site title for the selective refresh partial.
------------------------------------------*/ 

function doxy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/*------------------------------------------
 =>  Render the site tagline for the selective refresh partial.
------------------------------------------*/ 

function doxy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
 

/*------------------------------------------
 =>  Enqueue scripts/styles for customizer panel
------------------------------------------*/ 

function doxy_customize_backend_scripts() {

    wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/assets/css/customizer-style.css', array(), 'all' );
     
    wp_enqueue_script( 'doxy-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls.js', array(), '20151215', false );
}
add_action( 'customize_controls_enqueue_scripts', 'doxy_customize_backend_scripts', 10 );

/*------------------------------------------
 => Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
------------------------------------------*/

function doxy_customize_preview_js() {

	wp_enqueue_script( 'doxy-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );

}
add_action( 'customize_preview_init', 'doxy_customize_preview_js' );

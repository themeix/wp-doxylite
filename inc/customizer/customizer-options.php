<?php if( ! defined( 'ABSPATH' ) ) exit;
/**
 * Customizer panels.
 *
 * @since 1.0.0
 */
 
/*------------------------------------------
 => Panel 
------------------------------------------*/


Kirki::add_panel( 'general_options', array(
    'priority'    => 5,
    'title'       => esc_html__( 'General', 'doxylite' ),
) );

Kirki::add_panel( 'header_options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header', 'doxylite' ),
) ); 

Kirki::add_panel( 'blog_options', array(
    'priority'    => 15,
    'title'       => esc_html__( 'Blog', 'doxylite' ),
) ); 

Kirki::add_panel( 'typography', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Typograhy', 'doxylite' ),
) ); 

Kirki::add_panel( 'color_options', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Color', 'doxylite' ),
) ); 

/*------------------------------------------
 => Sections 
------------------------------------------*/

Kirki::add_section('back_to_top', array(
	'title'       => esc_html__('Scroll Back to Top', 'doxylite'),
	'priority'    => 600,
	'panel'       => 'general_options',
));
Kirki::add_section('read_more', array(
	'title'       => esc_html__('Read More', 'doxylite'),
	'priority'    => 10,
	'panel'       => 'blog_options',
));
Kirki::add_section('excerpt_limit', array(
	'title'       => esc_html__('Excerpt Limit', 'doxylite'),
	'priority'    => 15,
	'panel'       => 'blog_options',
));
Kirki::add_section('site_brand', array(
	'title'       => esc_html__('Site Brand', 'doxylite'),
	'priority'    => 5,
	'panel'       => 'header_options',
));

Kirki::add_section('body', array(
	'title'       => esc_html__('Body', 'doxylite'),
	'priority'    => 5,
	'panel'       => 'typography',
));
Kirki::add_section('color_options_section', array(
	'title'       => esc_html__('Footer', 'doxylite'),
	'priority'    => 5,
	'panel'       => 'color_options',
));


/*------------------------------------------
 => Fields 
------------------------------------------*/
 
Kirki::add_field( 	'doxy_config', array(
	'type'        => 'switch',
	'settings'    => 'back_to_top',
	'label'       => esc_html__('Enable/Disable Scroll Back to Top', 'doxylite'),
	'section'     => 'back_to_top',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__('Enable', 'doxylite'),
		'off' => esc_html__('Disable', 'doxylite'),
	),
)
);

Kirki::add_field( 	'doxy_config', array(
	'type'     => 'text',
	'settings' => 'post_excerpt_limit',
	'label'    => esc_html__('Post Excerpt Limit', 'doxylite'),
	'section'  => 'excerpt_limit',
	'default'  => 25,
	'priority' => 10,
)
);
Kirki::add_field( 	'doxy_config', array(
	'type'        => 'slider',
	'settings'    => 'brand',
	'label'       => esc_html__('Logo Brand Width(px)', 'doxylite'),
	'description'       => esc_html__('You can set your header logo image width', 'doxylite'),
	'section'     => 'site_brand',
	'default'     => 115,
	'choices'     => array(
		'min'  => 1,
		'max'  => 200,
		'step' => 1,
	)
	)
);


Kirki::add_field( 	'doxy_config', array(
	'type'        => 'typography',
	'settings'    => 'bodytypography',
	'label'       => esc_html__('Body Typography', 'doxylite'),
	'section'     => 'body',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Open Sans',
		'variant'        => 'regular',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => 'none',
		'text-align'     => '',
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
	)

);

Kirki::add_field( 	'doxy_config', array(
	'type'        => 'color',
	'settings'    => 'theme_primary_color',
	'label'       => esc_html__('Theme Color', 'doxylite'),
	'section'     => 'colors',
	'priority'    => 1,	
	'default'     => '#280636',
	)
);

 

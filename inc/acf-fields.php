<?php
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_5cf9ee2ec7618',
		'title' => esc_html__('Page Metabox', 'doxylite' ),
		'fields' => array(
			array(
				'key' => 'field_5cf9f0c54d0c8',
				'label' => esc_html__( 'Page title background', 'doxylite' ),
				'name' => 'page_bg',
				'type' => 'button_group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'image' => 'Image',
					'color' => 'Color',
				),
				'allow_null' => 0,
				'default_value' => 'image',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
			array(
				'key' => 'field_5cf9ef24664ea',
				'label' => esc_html__( 'Color', 'doxylite' ),
				'name' => 'doxy_page_title_bg_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5cf9f0c54d0c8',
							'operator' => '==',
							'value' => 'Color',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
			array(
				'key' => 'field_5cf9fc7349d9b',
				'label' => esc_html__( 'Image', 'doxylite' ),
				'name' => 'doxy_page_title_bg',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5cf9f0c54d0c8',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5cfa82eac89e3',
		'title' => esc_html__('Post Metabox', 'doxylite' ),
		'fields' => array(
			array(
				'key' => 'field_5cfa82ea7000b',
				'label' => esc_html__( 'Post title background', 'doxylite' ),
				'name' => 'post_bg',
				'type' => 'button_group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'image' => 'Image',
					'color' => 'Color',
				),
				'allow_null' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
			array(
				'key' => 'field_5cfa8c737000c',
				'label' => esc_html__( 'Image', 'doxylite' ),
				'name' => 'doxy_post_title_bg',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5cfa82ea7000b',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5cfa8cb87000d',
				'label' => esc_html__( 'Color', 'doxylite' ),
				'name' => 'doxy_post_title_bg_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5cfa82ea7000b',
							'operator' => '==',
							'value' => 'color',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;

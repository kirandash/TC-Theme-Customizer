<?php

function tctheme_customizer_live_preview(){
	wp_enqueue_script(
		'tctheme-theme-customizer',
		get_template_directory_uri().'/js/theme-customizer.js',
		array('jquery','customize-preview'),
		'1.0.0',
		true
	);
}

add_action('customize_preview_init','tctheme_customizer_live_preview');

function tctheme_customizer_css(){
	?>
    <style type="text/css">
		a{
			color: <?php echo get_theme_mod('tctheme_link_color'); ?>;
		}
		<?php if(false === get_theme_mod('tctheme_display_header')): ?>
		#header {
			display: none;
		}
		<?php endif; ?>
		<?php if('' != get_theme_mod('tctheme_background_image')): ?>
		body {
			background-image: url(<?php echo get_theme_mod('tctheme_background_image'); ?>);
		}
		<?php endif; ?>
	</style>
    <?php
}

add_action('wp_head','tctheme_customizer_css');

function tctheme_register_theme_customizer($wp_customizer){
	
	$wp_customizer->add_section(
		'tctheme_display_options',
		array(
			'title' => 'Display Options',
			'priority' => 200
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_link_color',
		array(
			'default' => '#000000',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		/*'tctheme_link_color',
		array(
			'section' => 'tctheme_display_options',
			'label' => 'Link Color',
			'type' => 'text'
		)*/
		
		new WP_Customize_Color_Control(
			$wp_customizer,
			'tctheme_link_color',
			array(
				'label' => 'Link Color',
				'section' => 'tctheme_display_options',
				'settings' => 'tctheme_link_color'
			)
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_display_header',
		array(
			'default' => 'true',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		'tctheme_display_header',
		array(
			'section' => 'tctheme_display_options',
			'label' => 'Display Header?',
			'type' => 'checkbox'
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_background_image',
		array(
			'default' => '',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		new WP_Customize_Image_Control(
			$wp_customizer,
			'tctheme_background_image',
			array(
				'section' => 'tctheme_display_options',
				'label' => 'Background Image',
				'settings' => 'tctheme_background_image'
			)
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_demo_file',
		array(
			'default' => '',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		new WP_Customize_Upload_Control(
			$wp_customizer,
			'tctheme_demo_file',
			array(
				'label' => 'Sample File',
				'section' => 'tctheme_display_options',
				'settings' => 'tctheme_demo_file'
			)
		)
	);
	
	$wp_customizer->add_section(
		'tctheme_footer_options',
		array(
			'title' => 'Footer Options',
			'priority' => '201'
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_footer_message',
		array(
			'default' => 'Copyright 2016 All rights reserved.',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		'tctheme_footer_message',
		array(
			'section' => 'tctheme_footer_options',
			'label' => 'Footer Message',
			'type' => 'text'
		)
	);
	
	$wp_customizer->add_setting(
		'tctheme_display_footer_title',
		array(
			'default' => 'always',
			'transport' => 'postMessage'
		)
	);
	
	$wp_customizer->add_control(
		'tctheme_display_footer_title',
		array(
			'section' => 'tctheme_footer_options',
			'label' => 'Display Footer Title',
			'type' => 'select',
			'choices' => array(
				'always' => 'Always',
				'never' => 'Never'
			)
		)
	);
}

add_action('customize_register','tctheme_register_theme_customizer');

?>
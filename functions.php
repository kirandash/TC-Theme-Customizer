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
		'tctheme_link_color',
		array(
			'section' => 'tctheme_display_options',
			'label' => 'Link Color',
			'type' => 'text'
		)
	);
}

add_action('customize_register','tctheme_register_theme_customizer');

?>
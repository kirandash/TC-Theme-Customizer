<?php get_header(); ?>

	<div id="content" class="site-content">
    	<p>This is site content.<a href="#">This is an anchor</a> so that we can tell the Theme Customizer is working.</p>
    </div><!-- #content -->
    
    <div id="sample-file">
        <?php 
		if('' != get_theme_mod('tctheme_demo_file')): 
		echo get_theme_mod('tctheme_demo_file'); 
		else:
		echo 'There is no Sample file to display.';
		endif;
		?>
    </div>
    
<?php get_footer(); ?>
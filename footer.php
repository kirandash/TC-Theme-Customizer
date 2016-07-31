        
        <div id="footer">
        	<?php echo get_theme_mod('tctheme_footer_message'); ?>
            <?php if('always' === get_theme_mod('tctheme_display_footer_title')): ?>
            <div id="footer-title">
            	<?php bloginfo('title'); ?>
            </div><!--#footer-title-->
            <?php endif; ?>
        </div><!--#footer-->
        
    </div><!-- #page -->
    <?php wp_footer(); ?>
    </body>
</html>    
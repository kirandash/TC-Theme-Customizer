(function($){
	$(function(){
		
		wp.customize('tctheme_link_color', function(value){
			value.bind(function(to){
				$('a').css('color', to);
			});
		});
		
		wp.customize('tctheme_display_header',function(value){
			value.bind(function(to){
				false === to ? $('#header').hide() : $('#header').show();
			});
		});
		
		wp.customize('tctheme_footer_message', function(value){
			value.bind(function(to){
				$('#footer').text(to);
			});
		});
		
		wp.customize('tctheme_display_footer_title', function(value){
			value.bind(function(to){
				'never' === to ? $('#footer-title').hide() : $('#footer-title').show();
			});
		});
		
		wp.customize('tctheme_background_image', function(value){
			value.bind(function(to){
				$('body').css('background-image','url('+to+')');
			});
		});
		
		wp.customize('tctheme_demo_file', function(value){
			value.bind(function(to){
				'' === to ? $('#sample-file').hide() : $('#sample-file').show();
			});
		});
		
	});	
}(jQuery));
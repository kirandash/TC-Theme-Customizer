(function($){
	$(function(){
		
		wp.customize('tctheme_link_color', function(value){
			value.bind(function(to){
				$('a').css('color', to);
			});
		});
		
	});	
}(jQuery));
$(document).ready(function() {
	
	$(function(H) 
	    {
		
		$('.overlay-container').fadeIn(function() {
			
			window.setTimeout(function(){
				$('.window-container.zoomin').addClass('window-container-visible');
			}, 100);
			
		});
	});
	
	$('.close').click(function() {
		$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
	});
	
});
$(document).ready(function() {
	
	fadeImages();
	
	$('#body').infinitescroll({
		navSelector: "#pager",
		// selector for the paged navigation (it will be hidden)
		
		nextSelector: "#pager #next-link a",    
		// selector for the NEXT link (to page 2)
		
		itemSelector: "#body div.post, #body div.post-archive ",
		loadingImg: "/wp-content/themes/colt-rane-v3/images/ajax-loader.gif",
		// loading image.

		loadingText: "",
		// text accompanying loading image
		
		animate: true,
		// boolean, if the page will do an animated scroll when new content loads
		// default: false

		}, function(arrayOfNewElems){
			fadeImages();
	});
	
	$('#utility').click(function() { 
		$('html, body').animate({scrollTop : 0},'slow'); 
	});
	
	// Tooltip configuration
	$('.tip').tipTip();
	
});

function fadeImages(){
	$("img").lazyload({ 
		placeholder : "/wp-content/themes/colt-rane-v3/images/placeholder.gif",
		effect : "fadeIn"
	});
};
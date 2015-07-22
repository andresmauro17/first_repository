$(document).ready(function(e) {
	
	var startX, curX, startY, curY; // Variables
	var newXScroll, newYScroll, genXScroll; // More Variables!
	
	// Change the height of the sidebar, as well as a few things to do with the main content area, so the user
	// can actually scroll in the content area.
	function sideBarHeight() { 
	
		var docHeight = $(document).height();
		var winHeight = $(window).height();
		
		$('.slide-in').height(winHeight);
		$('#main-container').height(winHeight);
		$('#sub-container').height($('#sub-container').height());
	} 
	
	sideBarHeight();
	
	var outIn = 'in';
	
	Hammer(document.getElementById('main-container')).on('swiperight', function(e) {
			$('.slide-in').toggleClass('on');		
			$('#main-container').toggleClass('on');
			outIn = 'out';
			
	});
	
	Hammer(document.getElementById('main-container')).on('swipeleft', function(e) {
			$('.slide-in').toggleClass('on');	
			$('#main-container').toggleClass('on');
			outIn = 'in';
	});
	
	
	function runAnimation() {
	
		if(outIn == 'out') {
			
			$('.slide-in').toggleClass('on');
			$('#main-container').toggleClass('on');	
			outIn = 'in';
			
		} else if(outIn == 'in') {
		
			$('.slide-in').toggleClass('on');	
			$('#main-container').toggleClass('on');	
			outIn = 'out';
			
		}
	
	}
	
	$('.menu-icon')[0].addEventListener('touchend', function(e) {
		$('.slide-in').toggleClass('on');		
		$('#main-container').toggleClass('on');
	});
	
	$('.menu-icon').click(function() {
		$('.slide-in').toggleClass('on');		
		$('#main-container').toggleClass('on');
	});
	
	

});
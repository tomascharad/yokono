

// FANCYBOX===============================================================================
$(document).ready(function() {
			
$("a.box").fancybox({
				'titleShow'		: true,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic',
				'titlePosition'	: 'over',
				 'overlayOpacity': '0.8',
				 'padding': 2, // optional
				  'overlayColor': '#000'
			});
			
			
			
			$("a[rel=group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
	
	
		    
	jQuery(document).ready(function($) {


// Hover for homepage client-banner project list
var fancyHover = {
	init: function() {
		var project = $('#project-banner li');
			
		project.hover(
			function () { 
				$(this).children('.hover').removeClass('offscreen'); 
				$(this).children('.project-info').css( 'background-color' , '#44423e' );
			}, 
			function () { 
				$(this).children('.hover').addClass('offscreen');
				$(this).children('.project-info').css( 'background-color' , '#161616' );
			}
		);
		
	}
};
fancyHover.init();


// Hover for homepage client-banner project list
var hoverAnim = {
	init: function() {
		var project = $('#project-banner li');
		var projectTxt = project.children('.hover');
		var projectInfo = project.children('.project-info');
		var originalBG = "#161616"; 
		var fadeColor = "#44423e";
		
		project.children('.hover').css({left: '0px'})
 		project.children().children('.hover-bg').fadeTo(1, 0.0)
		project.children().children('.hover-content').css({left: '-350px'})
 			
		project.hover(
			function () {
				$(this).children().children('.hover-content').css({left: '-350px'});
				$(this).children().children('.hover-bg').stop().fadeTo(600, 0.70);
				$(this).children().children('.hover-content').stop().animate({left: '0px'} , { queue: false, duration: 450, easing: 'easeOutQuint' });
				$(this).children('.project-info').stop().animate({backgroundColor:fadeColor}, 750);
			}, 
			function () {
				$(this).children().children('.hover-bg').stop().fadeTo(800 , 0.0);
				$(this).children().children('.hover-content').stop().animate({left: '290px'} , { queue: false, duration: 300, easing: 'easeOutQuint' });
				$(this).children('.project-info').stop().animate({backgroundColor:originalBG},850);
			}
		);
		
	}
};
hoverAnim.init();

// menu===============================================================================
});
	// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});
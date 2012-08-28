// Custom Javascript

jQuery(document).ready(function() {
	
	// Secondary Navigation
	jQuery("ul.sf-menu").superfish({
		delay: 500,
		animation: {opacity:'show'},
		speed: 200,
		autoArrows: false,
		dropShadows: false
	}); 
	
	// Main Navigation
	jQuery('#nav ul.sf-menu').superfish({ 
		delay: 200,
		animation: {opacity:'show', height:'show'},
		speed: 'fast',
		autoArrows: false,
		dropShadows: false
	});
	
	//latest posts
    jQuery('#slider').cycle({
		fx: 'fade',
		timeout: 0,
		pager: '#slider_nav ul', 
		pagerAnchorBuilder: function(idx, slide) { 
        	return '<li><a href="#"><img src="' + $(slide).find(".image a img").eq(0).attr("src") + '" width="78" height="65" /></a></li>';
    	} 
	});

	jQuery( 'ul.sf-menu .popup-trigger').on( 'mousein', function() {
		$( this ).next( '.popup' ).eq( 0 ).show();
	})
	jQuery( 'ul.sf-menu .popup-trigger').on( 'mouseout', function() {
		$( this ).next( '.popup' ).eq( 0 ).hide();
	})
	
	// Submit buttons
	jQuery('#featured').not('#featured_slider_prev, #featured_slider_next').hover( 
		function () {
			jQuery('#featured_slider_prev, #featured_slider_next').stop().show().animate({ opacity: 1 },200);
		}, function () {
			jQuery('#featured_slider_prev, #featured_slider_next').stop().animate({ opacity: 0 },200, function() {
				jQuery(this).hide();
			});
		}
	);
	
	//featured slider
	jQuery('#featured_slider').cycle({
		fx: 'scrollHorz',
		speed: 800,
		timeout: 0,
		easing: 'easeInOutQuint',
		next: '#featured_slider_next',
		prev: '#featured_slider_prev'
	});
	
	// Tab Widget
	jQuery(".tabs").tabs({ 
		fx: { opacity: 'toggle' } 
	});
	
	// Input focus css change
	jQuery('input, textarea').focus( 
		function () {
			jQuery(this).css('border', '1px solid #d2d2d2');
			jQuery(this).css('color', '#444444');
		}
	);
	
	// Input blur css change
	jQuery('input, textarea').blur( 
		function () {
			jQuery(this).css({
				border: '1px solid #e0e0e0',
				color: '#999999'
			});
		}
	);
	
	// Submit buttons
	jQuery('#respond input.btn, #respond button').hover( 
		function () {
			jQuery(this).css({background: 'url(images/duplex_comment_btn_bg_hover.png) repeat-x'});
			jQuery('#respond p.submit span.left_side').css({backgroundImage: 'url(images/duplex_comment_btn_left_hover.png)'});
			jQuery('#respond p.submit span.right_side').css({backgroundImage: 'url(images/duplex_comment_btn_right_hover.png)'});
		}, function () {
			jQuery(this).css({background: 'url(images/duplex_comment_btn_bg.png) repeat-x'});
			jQuery('#respond p.submit span.left_side').css({backgroundImage: 'url(images/duplex_comment_btn_left.png)'});
			jQuery('#respond p.submit span.right_side').css({backgroundImage: 'url(images/duplex_comment_btn_right.png)'});
		}
	);
	
	// flickr
	jQuery('.flickr a').hover( 
		function () {
			jQuery(this).stop().animate({ opacity: 0.5 },200);
		}, function () {
			jQuery(this).stop().animate({ opacity: 1 },200);
		}
	);
	
	//back to top
	$('#back_to_top a').click(function(){
		
		$('html, body').animate({scrollTop: '0px'}, 1000);
		
		return false;
	});
	
	//search field text
	jQuery('.s').each(
    
    	function() {
        	
            if(jQuery(this).val() === '' || jQuery(this).val() === 'to search, type and hit enter')
            {
                jQuery(this).val('to search, type and hit enter');
        
                jQuery(this).blur( 
                    function () {
                       jQuery(this).val('to search, type and hit enter');
                    });
                    
                jQuery(this).focus( 
                    function () {
                       jQuery(this).val('');
                    });
            }
            
        }
        
    );

}); 
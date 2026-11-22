jQuery(function() {

	jQuery('.box-sidebar').each( function() {
		var widget_ID = jQuery(this).attr('id');
		if (jQuery.cookie(widget_ID) == 'open') {
			jQuery(this).find('.totoggle').show();
			jQuery(this).find('h3').addClass("toggle-close");
		} else {
			jQuery(this).find('.totoggle').hide();
			jQuery(this).find('h3').addClass("toggle-open");
		}
	});
	
	jQuery(".box-sidebar h3").click(function(){
	
		if (jQuery(this).next('div.totoggle').is(":hidden")) {
    	    jQuery(this).next('div.totoggle').slideDown("slow");
    	    jQuery(this).removeClass("toggle-open");
			jQuery(this).addClass("toggle-close");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'open',{ path: '/' });
			return false;
    	} else {
    		jQuery(this).next('div.totoggle').slideUp("slow");
    		jQuery(this).removeClass("toggle-close");
			jQuery(this).addClass("toggle-open");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'closed',{ path: '/' });
			return false;
    	}
      
     });

jQuery('.box-sidebar').each( function() {
		var widget_ID = jQuery(this).attr('id');
		if (jQuery.cookie(widget_ID) == 'open') {
			jQuery(this).find('.totogglee').show();
			jQuery(this).find('h3').addClass("togglee-close");
		} else {
			jQuery(this).find('.totogglee').hide();
			jQuery(this).find('h3').addClass("togglee-open");
		}
	});
	
	jQuery(".box-sidebar h3").click(function(){
	
		if (jQuery(this).next('div.totogglee').is(":hidden")) {
    	    jQuery(this).next('div.totogglee').slideDown("slow");
    	    jQuery(this).removeClass("togglee-open");
			jQuery(this).addClass("togglee-close");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'open',{ path: '/' });
			return false;
    	} else {
    		jQuery(this).next('div.totogglee').slideUp("slow");
    		jQuery(this).removeClass("togglee-close");
			jQuery(this).addClass("toggle-open");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'closed',{ path: '/' });
			return false;
    	}
      
     });

})
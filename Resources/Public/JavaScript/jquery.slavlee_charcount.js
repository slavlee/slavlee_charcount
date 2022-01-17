/**
 * @package TYPO3 Extension
 * @project slavlee_charcount
 * @author Kevin Chileong Lee
 * @copyright (c) 2021 Kevin Chileong Lee. All rights reserved.
 */

(function( $ ) {
 
    $.fn.slavlee_charcount = function( options ) {
		return $(this).each(function(){
			this.opts = $.extend( {}, $.fn.slavlee_charcount.defaults, options );
			init(this);
		});
    };
    
    function init(cObj)
    {
    	$(cObj).find("textarea").on("keyup", function(){
			let value = $(this).val();
			let counter = $(cObj).find("." + cObj.opts.classes.counter);
			
			if (value != "")
			{
				// count chars
	    		$(counter.get(1)).text(value.split('').length);
	    		
	    		// count words
	    		$(counter.get(2)).text(value.replace(/([A-z]),([A-z])/g, "$1, $2").split(' ').length);
	    		
	    		// count paragraphs	    		
	    		$(counter.get(3)).text(value.split('.').length-1);
			}else
			{
				// count chars
	    		$(counter.get(1)).text("0");
	    		
	    		// count words
	    		$(counter.get(2)).text("0");
	    		
	    		// count paragraphs
	    		$(counter.get(3)).text("0");	
			}
			
    	});
    }
    
    $.fn.slavlee_charcount.defaults = {
	    classes: {
	    	counter: "slavlee-counter"
	    }
	};
 
    $(document).ready(function(){
    	$(".tx_slavlee_charcounter").slavlee_charcount();
    });
})( jQuery );
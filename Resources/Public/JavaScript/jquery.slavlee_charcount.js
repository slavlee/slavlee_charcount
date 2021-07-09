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
    		$(cObj).find("." + cObj.opts.classes.counter).text($(this).val().length);
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
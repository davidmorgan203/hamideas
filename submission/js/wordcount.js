/**
 * jQuery.textareaCounter
 * Version 1.0
 * Copyright (c) 2011 c.bavota - http://bavotasan.com
 * Dual licensed under MIT and GPL.
 * Date: 10/20/2011
**/
(function($){
	$.fn.textareaCounter = function(options) {
		// setting the defaults
		// $("textarea").textareaCounter({ limit: 100 });
		var defaults = {
			limit: 100
		};	
		var options = $.extend(defaults, options);
 
		// and the plugin begins
		return this.each(function() {
			var obj, text, wordcount, limited;
 
			obj = $(this);
 
			obj.keyup(function() {
			    text = obj.val();
			    if(text === "") {
			    	wordcount = 0;
			    } else {
				    wordcount = $.trim(text).split(/[\s\.\?]+/).length;
				}
			    if(wordcount >= options.limit) {
			        obj.next().html('0 words left');
			        limited = $.trim(text).split(" ", options.limit);
					limited = limited.join(" ");
					$(this).val(limited);
			    } else {
			        obj.next().html((options.limit - wordcount)+' words left');
			    } 
			});
			
			obj.trigger('keyup');
			
		});
	};
})(jQuery);
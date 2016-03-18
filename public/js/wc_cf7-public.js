(function( $ ) {
	'use strict';
	 $(".jjk_product_name").val(script_vars.title);
	 
	// DOM Ready
	$(function() {
		// Binding a click event
		// From jQuery v.1.7.0 use .on() instead of .bind()
		$('#show_jjk').bind('click', function(e) {
			// Prevents the default action to be triggered. 
			e.preventDefault();
			// Triggering bPopup when click event is fired
			$('#element_to_pop_up').bPopup();
		});
	});
	
})( jQuery );

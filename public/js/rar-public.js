(function( $ ) {
	'use strict';

	$(document).ready(function() {
		$("input[name$='locationRadio']").click(function() {
			var location = $(this).val();
	
			$("div.hidden").hide();
			$("#location" + location).show();
		});
	});

})( jQuery );
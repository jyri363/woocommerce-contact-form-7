<?php 
function jjk_default_css() {
	$css = '
#element_to_pop_up { 
	background-color:#fff;
	border-radius:15px;
	color:#000;
	display:none; 
	padding:20px;
	min-width:1000px;
	min-height: 180px;
}
.b-close {
	background-color: #2b91af;
	color: #fff;
	cursor: pointer;
	display: inline-block;
	border-radius: 7px 7px 7px 7px;
	box-shadow: none;
	font: bold 131% sans-serif;
	padding: 0 6px 2px;
	position: absolute;
	right: -7px;
	top: -7px;
	text-align: center;
	text-decoration: none;
}
/* */
@media screen and (max-width : 1024px) {
	#element_to_pop_up { 
		min-width:400px;
	}
}
/* */
@media screen and (max-width : 600px) {
	#element_to_pop_up { 
		padding: 6px;	
		min-width:200px;
	}
}
/* */
@media screen and (max-width : 480px) {
	#element_to_pop_up { 
		padding: 4px;
		min-width:200px;
			left: 1px !important;
	}
	.b-close {
		right:0px;
		top:0px;
	}
}';
	return $css;

}
function jjk_default_js() {
	$js = "
(function( $ ) {
	'use strict';
	$('.jjk_product_name').val(script_vars.title); 
	$(function() {
		$('#show_jjk').bind('click', function(e) {
			e.preventDefault();
			$('#element_to_pop_up').bPopup();
		});
	});
})( jQuery );";
	return $js;
}
?>
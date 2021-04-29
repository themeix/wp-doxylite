window.CMB2 = (function(window, document, $, undefined){
	'use strict';
	$(".cmb2-disable").click(function(){
        var parent = $(this).parents('.cmb2-switch');
        $('.cmb2-enable',parent).removeClass('selected');
        $(this).addClass('selected');
    });
	$(".cmb2-enable").click(function(){
        var parent = $(this).parents('.cmb2-switch');
        $('.cmb2-disable',parent).removeClass('selected');
        $(this).addClass('selected');        
    });
    
})(window, document, jQuery);

jQuery(document).ready(function() {
    jQuery('.cmb2-enable').on('click', function(){
        jQuery('.cmb2-id-doxy-post-title-bg,.cmb2-id-doxy-post-title-bg-overlay-color,.cmb2-id-bg-overlay-opacity').addClass('show-metabox');
        jQuery('.cmb2-id-doxy-post-title-bg-color').removeClass('show-metabox');
    });
    
     
    jQuery('.cmb2-disable').on('click', function(){
        jQuery('.cmb2-id-doxy-post-title-bg-color').addClass('show-metabox');
        jQuery('.cmb2-id-doxy-post-title-bg,.cmb2-id-doxy-post-title-bg-overlay-color,.cmb2-id-bg-overlay-opacity').removeClass('show-metabox');
    });

});
jQuery(document).ready(function() {
    jQuery('.cmb2-enable').on('click', function(){
        jQuery('.cmb2-id-doxy-page-title-bg,.cmb2-id-doxy-page-title-bg-overlay-color,.cmb2-id-bg-overlay-opacity').addClass('show-metabox');
        jQuery('.cmb2-id-doxy-page-title-bg-color').removeClass('show-metabox');
    });
    
     
    jQuery('.cmb2-disable').on('click', function(){
        jQuery('.cmb2-id-doxy-page-title-bg-color').addClass('show-metabox');
        jQuery('.cmb2-id-doxy-page-title-bg,.cmb2-id-doxy-page-title-bg-overlay-color,.cmb2-id-bg-overlay-opacity').removeClass('show-metabox');
    });

});
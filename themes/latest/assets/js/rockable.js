Cufon.replace('ul.sf-menu > li > a, .statement, ul.columns li h2, .entry h1, .entry h2, .entry h3, .entry h4, #comments h2, .user_info h3, .list_items h2, #sidebar h2', {
	hover: true
});

		jQuery(function(){
			jQuery('ul.sf-menu').superfish({
				dropShadows: false,
				delay: 0
			});
			
			jQuery("#tabs").tabs();
			
			jQuery('#slider').jcarousel();
			
			jQuery('ul.columns li:last-child').addClass('last');
			
			jQuery('#commentform').submit(function(){
			
				var form_name = document.getElementById('comment_name');
				var form_email = document.getElementById('comment_email');
				var form_url = document.getElementById('comment_url');
				var form_comment = document.getElementById('comment');
				
				if(form_name && form_name.value == form_name.defaultValue)
					form_name.value = '';
				
				if(form_email && form_email.value == form_email.defaultValue)
					form_email.value = '';
				
				if(form_url && form_url.value == form_url.defaultValue)
					form_url.value = '';
				
				if(form_comment && form_comment.value == form_comment.defaultValue)
					form_comment.value = '';
				
			
			});
			
		});
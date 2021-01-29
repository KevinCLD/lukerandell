		<div class="js-popup popup" id="downloadPopup">
			
			<a class="js-close-popup closebtn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cancel.svg"></a>
	
			<?php gravity_form('Download', true, true, false, '', true); ?>
			
			<p style="color: grey; text-align: center; font-size: 12px; margin-top: 16px; margin-bottom: 0;">Your email is safe with me, I don't spam</p>
			
		</div>
		
		<div class="js-popup popup" id="bookPopup">
			
			<a class="js-close-popup closebtn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cancel.svg"></a>
			
			<?php gravity_form('Book Now', true, true, false, '', true); ?>
			
			<p style="color: grey; text-align: center; font-size: 12px; margin-top: 16px; margin-bottom: 0;">Your email is safe with me, I don't spam</p>	
				
		</div>
		
		
		<footer class="block block--footer" data-id="contact">
			
			<div class="block__inner" style="background-image: url(<?php echo wp_get_attachment_image_url(get_field('contact_image'), 'full'); ?>)">
				
				<div class="contact-details">
					
					<h3 style="text-transform: uppercase; color: white">contact</h3>
						
					<h6 style="text-transform: uppercase; color: white">email</h6>

					<a class="proxima-nova-bold" href="mailto:<?php the_field('email'); ?>" style="text-transform: uppercase;"><?php the_field('email'); ?></a>
					
					<h6 style="text-transform: uppercase; color: white; padding-top: 20px">phone</h6>
					
					<a class="proxima-nova-bold" href="tel:<?php the_field('phone'); ?>" style="text-transform: uppercase;"><?php the_field('phone'); ?></a>
					
					<h6 style="text-transform: uppercase; color: white; padding-top: 20px">address</h6> 
					
					<a class="proxima-nova-bold" style="text-transform: uppercase" href="<?php the_field('address_link'); ?>" target="_blank"><?php the_field('address'); ?></a>
						
					<h6 style="text-transform: uppercase; color: white; padding-top: 60px">FOLLOW</h6> 
				
					<div class="socialmedia">
										
						<a class="facebookicon" style="padding-right: 40px; color: #da232e" href="https://www.facebook.com/LukeRandallFitness/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-letter-logo.svg"></a>
				
						<a class="instagramicon" href="https://www.instagram.com/lukerandallfitness/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg"></a>							
							
					</div>
				
				</div>

				<nav class="main-nav text-color--red underlined--white hidden--s hidden--m">
					
					<?php wp_nav_menu(['menu' => 'Nav']); ?>
					
				</nav>

			</div>
			
	  </footer> 
	
      <?php wp_footer(); ?>
		
      <script type = "text/javascript" language = "javascript">

		jQuery(".js-close-popup").click(function(e) {
			e.preventDefault();
			var popups = jQuery('.js-popup');
			popups.removeClass('visible');
		});
		
		jQuery(".js-play").click(function(e) {
			e.preventDefault();
			
			if(jQuery(window).width() >= 1024) {
				jQuery('#testimVidIframe').attr('src', jQuery(this).attr('href'));
				jQuery('#testimVid').addClass('visible'); 
			} else {
				var parts = jQuery(this).attr('href').split('/');
				var videoSlice = parts[parts.length-1];
				var videoParts = videoSlice.split('?');
				var videoId = videoParts[0];
				var done = false;
				var maybeHideTestimonialVideo = function() {
					var isFullScreen = (document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen || document.msFullscreenElement);
					if(!isFullScreen) {
						jQuery('#mobileTestimVid').hide();
						player.stopVideo();
						player.destroy();
						document.removeEventListener('fullscreenchange', maybeHideTestimonialVideo, false);
						document.removeEventListener('webkitfullscreenchange', maybeHideTestimonialVideo, false);
						document.removeEventListener('mozfullscreenchange', maybeHideTestimonialVideo, false);
					}
				}
			    var player = new YT.Player('mobileTestimVid', {
					height: '720',
					width: '1280',
					videoId: videoId,
					playerVars: {
						autoplay: 1
					},
					events: {
						onReady: function(event) {
							jQuery('#mobileTestimVid').show();
							event.target.playVideo();
							document.addEventListener('fullscreenchange', maybeHideTestimonialVideo, false);
							document.addEventListener('webkitfullscreenchange', maybeHideTestimonialVideo, false);
							document.addEventListener('mozfullscreenchange', maybeHideTestimonialVideo, false);
						},
						onStateChange: function(event) {
							if(event.data == 2) {
								maybeHideTestimonialVideo();
							}
						}
					}
	            });
		    }
		});
		
		jQuery("#testimVid").click(function(e) {
			e.preventDefault();
			jQuery('#testimVid').removeClass('visible');
			jQuery('#testimVidIframe').attr('src', '');
		}); 
	
	
		jQuery('.js-toggle-popup').click(function(e) {
			e.preventDefault()
			var popup = jQuery(jQuery(this).attr('href'))
			popup.removeClass('shake').find('input[type="text"]').eq(0).focus();
			if(!popup.hasClass('visible')) {
				var popups = jQuery('.js-popup.visible')
				if(popups.length) {
					popups.removeClass('visible');
					setTimeout(function() {
						popup.addClass('visible')
					}, 500);
					
				} else {
					 
					popup.addClass('visible')
					
					
				}		
				
			} else {
				popup.addClass('shake')
			}
								
		});
		
		jQuery('.js-toggle-sidemenu, .js-sidemenu a').click(function(e) {
			e.preventDefault();
			jQuery('.js-sidemenu').toggleClass('visible');
		});
		
		jQuery(document).ready(function($) {
			
			if( jQuery(window).width() >= 1024 ) {
				
				jQuery('.js-popup').eq(0).addClass('visible');
				
			}
			
		});
	
	</script>
	
	</body>
	
</html>
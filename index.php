<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<section data-id="about" class="fullpage-section block block--about chapter" style="z-index: 1">
		
		<div class="chapter__title" style="z-index: 1">
			
			<div class="vertical-align-helper text-align--s-center background-color--red h-100-lp">
				
				<div class="vertical-align--s-middle">
					
					<h2 class="text-color--white subtitled uppercase">ABOUT ME</h2>
					
				</div>
				
			</div>
	
			<nav class="main-nav text-color--grey-dark hidden--s hidden--m underlined--white">
				
				<?php wp_nav_menu(array('menu' => 'Nav')); ?>
	
			</nav>
	
			<img class="portrait responsive hidden--s hidden--m" src="<?php the_field('about_image'); ?>"/>
	
		</div>
			
		<div class="chapter__content">
	
			<div class="row padding--s-2 padding--m-4 padding--xl-8">
				
				<div class="column--s-12 padding--s-1 padding--m-2">
					
					<?php if (get_field('about_title')): ?>
					
						<p class="proxima-nova-bold"><?php the_field('about_title'); ?></p>
					
					<?php endif; ?>
					
					<?php if (get_field('about_content')): ?>
					
						<p><?php the_field('about_content'); ?></p>
						
					<?php endif; ?>
					
				</div>
				
				<div class="column--s-12">
	
					<div class="row">
						
						<div class="column--s-12 padding--s-1 padding--m-2">
							
							<a class="js-toggle-popup button"  href="#bookPopup"><?php the_field('about_booking_link'); ?></a>
	
						</div>
					
						<div class="column--s-12 padding--s-1 padding--m-2">
		
							<?php if (get_field('about_content_second')): ?>
								
								<p><?php the_field('about_content_second'); ?></p>
							
							<?php endif; ?>
							
						</div>
						
					</div>
					
				</div>	
				
			</div>
			
		</div>									
			
	</section>
	
	<section data-id="testimonials" class="fullpage-section block block--work chapter chapter--projects" data-id="work">
		
		<div class="chapter__title">
			
			<div class="vertical-align-helper text-align--s-center background-color--white h-100-lp">
				
				<div class="vertical-align--s-middle">
					
					<h2 class="text-color--black uppercase">TESTIMONIALS</h2>
					
					<nav class="project-nav">
						
						<ul>
							
							<?php if (have_rows('testimonials')): $i = 0; while (have_rows('testimonials')): the_row(); ?>
						    
			    				<?php if (get_sub_field('name')): ?>
									
									<li class="project-nav"><a href="#testimonial<?php echo $i; ?>"><?php the_sub_field('name'); ?></a></li>
								
								<?php endif; ?>
									
							<?php $i++; endwhile; endif; ?>	
										
						</ul>
						
					</nav>
					
				</div>
				
			</div>
	
			<nav class="main-nav text-color--grey-dark hidden--s hidden--m underlined--dark-grey">
				
				<?php wp_nav_menu(array('menu' => 'Nav')); ?>
	
			</nav>
	
		</div>
		
		<div class="chapter__content">
			
			<nav>
				
				<ul>
					
					<?php if (have_rows('testimonials')): $i = 0; while (have_rows('testimonials')): the_row(); ?>
		
						<li data-id="testimonial<?=$i; ?>">
							
							<div class="vertical-align--s-middle">
								
								<a class="testim js-play" href="<?php the_sub_field('testim_youtube_video'); ?>">
									
									<div class="testim__image" style="background-image: url(<?php echo wp_get_attachment_image_url(get_sub_field('test_image'), 'large'); ?>)"></div>
									
									<div class="testim__content">
														
										<h5 class="namme header__title subtitled text-color--white uppercase"><?php the_sub_field('name'); ?></h5>
											
										<h6 class="header__subtitle text-color--white proxima-nova-regular uppercase">View Testimonial Video</h6>
										
											
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-button.svg">
										
									</div>	
								
								</a>
										
							</div>
							
						</li>
						
					<?php $i++;  endwhile; endif; ?>
	
				</ul>
					
			</nav>
			
		</div>
		
		
	</section>
	
	<section data-id="services"class=" services fullpage-section block block--about chapter">
		
		<div class="chapter__title">
			
			<div class="vertical-align-helper text-align--s-center background-color--dark-grey h-100-lp">
				
				<div class="vertical-align--s-middle">
					
					<h2 class="text-color--white subtitled uppercase">SERVICES</h2>
				
					<nav class="project-nav">
						
						<ul class="project-nav text-red">
							
						<?php if (have_rows('services')): $i = 0; while (have_rows('services')): the_row(); ?>
					    
			    			<?php if (get_sub_field('service')): ?>
			    			
								<li class="project-nav"><a href="#service<?php echo $i; ?>"><?php the_sub_field('service'); ?></a></li>											
							<?php endif; ?>
											
						<?php $i++; endwhile; endif; ?>
						
						</ul>
						
					</nav>
					
				</div>
				
			</div>
			
			<nav class="main-nav text-color--red hidden--s hidden--m underlined--white">
				
				<?php wp_nav_menu(array('menu' => 'Nav')); ?>
				
			</nav>
			
		</div>
	
		<div class="chapter__content">
				
			<div class="row padding--s-2 padding--m-4 padding--xl-8">
				
				<div class="column--s-12 padding--s-1 padding--m-2">
															
					<div class="vertical-align--s-middle">
																				
						<?php if (have_rows('services')): $i = 0; while (have_rows('services')): the_row(); ?>
				
							<div class="project" data-id="service<?php echo $i; ?>">
										
								<?php if (get_sub_field('service')): ?>
									
									<p class="proxima-nova-bold " style="color: black; display: none"><?php the_sub_field('service'); ?></p>
								
								<?php endif; ?>
										
								<?php if (get_sub_field('service_content')): ?>
									
									<?php the_sub_field('service_content'); ?>
										
								<?php endif; ?>
										
								<?php if (get_sub_field('book_now_link')): ?>
									
									<a class="js-toggle-popup button" href="#bookPopup"><?php the_sub_field('book_now_link'); ?></a>
											
								<?php endif; ?>
										
							</div>
											
						<?php $i++; endwhile; endif; ?> 
										
					</div>
					
				</div>
				
			</div>
			
		</div>												
			
	</section>
	
	<section data-id="nutrition" class="fullpage-section block block--about chapter">
		
		<div class="chapter__title">
			
			<div class="vertical-align-helper text-align--s-center background-color--red h-100-lp">
				
				<div class="vertical-align--s-middle">
					
					<h2 class="text-color--white subtitled uppercase">NUTRITION</h2>
				
					<nav class="project-nav">
						
						<ul class="project-nav text-black">
							
							<?php if (have_rows('nut')): $i = 0; while (have_rows('nut')): the_row(); ?>
									
								<?php if (get_sub_field('nuttitle')): ?>
								
									<li class="project-nav"><a href="#nutrition<?php echo $i; ?>"><?php the_sub_field('nuttitle'); ?></a></li>									
								<?php endif; ?>
							
							<?php $i++; endwhile; endif; ?>
							
						</ul>
						
					</nav>
				
				</div>
				
			</div>
	
			<nav class="main-nav text-color--grey-dark hidden--s hidden--m underlined--white">
				
				<?php wp_nav_menu(array('menu' => 'Nav')); ?>
				
			</nav>
			
		</div>
	
		<div class="chapter__content">
	
			<div class="row padding--s-2 padding--m-4 padding--xl-8">
				
				<div class="column--s-12 padding--s-1 padding--m-2">
					
					<?php if (have_rows('nut')): $i = 0; while (have_rows('nut')):the_row(); ?>
			
						<div class="project" data-id="nutrition<?php echo $i; ?>">
							
							<?php if (get_sub_field('nuttitle')): ?>
								
								<p class="proxima-nova-bold " style="text-transform: uppercase; color: black; display: none">
									<?php the_sub_field('nuttitle'); ?>
								
								</p>
								
							<?php endif; ?>
								
							<?php if (get_sub_field('nutinfo')): ?>
							
								<?php the_sub_field('nutinfo'); ?>
								
							<?php endif; ?>
								
							<?php if (get_sub_field('download_text')): ?>
								
								<a class="js-toggle-popup button" href="#downloadPopup"><?php the_sub_field('download_text'); ?></a>
							
							<?php endif; ?>
							
						</div>
										
					<?php $i++; endwhile; endif; ?> 
					
					<?php if (have_rows('logos')): ?>
					
						<ul class="logos-list">
		
							<?php while (have_rows('logos')): the_row(); ?>
		
								<li>
								
									<a href="<?php the_sub_field('pdf'); ?>" target="_blank">
										
										<img src="<?php echo wp_get_attachment_image_url(get_sub_field('logo'), 'logo'); ?>" />
										
									</a>
									
								</li>
									
							<?php endwhile; ?>
					
						</ul>
					
					<?php endif; ?> 			
								
				</div>
			
			</div>	
			
		</div>									
			
	</section>
	
	<div class="testim__vid" id="testimVid">
		
		<iframe width="800" height="450" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="testimVidIframe"></iframe>
		
	</div>
	
	<div id="mobileTestimVid"></div>

<?php endwhile; endif; ?>	

<?php get_footer(); ?>

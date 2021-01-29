<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<html>
	<head>
		<title><?php wp_title(); ?></title>

		<!-- META DATA -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="personal trainer based in bracknell."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/faviconapple-icon-144x144.png.html">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<?php wp_head(); ?>

	</head>
	
	<body class="loading">
		
		<aside class="sidebar-menu js-sidemenu">
			
			<a href="#" class="menu-icon menu-icon--close js-toggle-sidemenu">
							
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
				
			</a>
			
			<?php wp_nav_menu(array('menu' => 'Nav')); ?>
			
		</aside>
		
		<div class="site-wrapper">

			<div class="site-main fullpage">
										
				<?php $is_hero = get_field('full_size_header'); ?>
		
				<section class="fullpage-section block <?php echo $is_hero ? 'block--hero' : ''; ?>">
					
					<div class="block__inner" data-parallax="scroll" data-image-src="<?php echo wp_get_attachment_image_url(get_field('header_image'), 'full'); ?>">
						
						<a href="#" class="menu-icon hidden--l js-toggle-sidemenu">
							
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" />
							
						</a>
			
	
						<nav class="main-nav text-color--red underlined--white hidden--s hidden--m">
						
						<?php wp_nav_menu(array('menu' => 'Nav')); ?>
						
						</nav>

					<div>	

						<img class="logo" src="http://lukerandallfitness.co.uk/wp-content/uploads/2021/01/LR-Logo-04-e1610465395118.png" alt="Luke Randell Fitness Logo" />
					
					</div>
						
						<div class="block__content">
							
							<a class="chevron" href="#about">
								  
								  <div class="chevron__dot"></div>
								  <div class="chevron__dot"></div>
								  <div class="chevron__dot"></div>
							
							</a>
							
							<h1 class="block__title as-h6 proxima-nova-bold uppercase text-align--s-center text-color--red subtitled padding--horizontal--l-8 padding--vertical--s-3"><?php the_field('header_sub_title'); ?></h1>
							
						</div>
			
					</div>

				</section>
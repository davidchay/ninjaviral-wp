<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title();?></title>

	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<!-- fuentes -->
	<link rel="stylesheet" href="<?php echo DIRECTORIO; ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo DIRECTORIO; ?>/css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo DIRECTORIO; ?>/css/main.css">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,900italic,900,300italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="aplication/rss+xml" title="rss 2.0" href="<?php bloginfo('rss2_url'); ?>">
 	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
 	<link rel="shortcut icon" href="<?php echo DIRECTORIO; ?>/favicon.ico">
 	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIRECTORIO; ?>/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo DIRECTORIO; ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo DIRECTORIO; ?>/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo DIRECTORIO; ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo DIRECTORIO; ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?PHP echo DIRECTORIO; ?>/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
 	<?php wp_head(); ?>
</head>
<body >
	<header class="header">
		<div class="top_social">
			<div class="container text-right ">
				<div class="search-box">
						<a href="#"class="search-top icon-lupa"></a>
						<div id="show-search-box">
							<span class="conito"></span>
							<div class="search-content">
								<form type="get" action="<?php bloginfo('url'); ?>" >
									<input type="search" value="<?php echo wp_specialchars($s,
1); ?>" name="s" class="input-search" id="search-top" placeholder="&#59782; Para buscar, presione enter">	
								</form>
	

							</div>
						</div>
				</div>
				<ul class="menu">
					<li class="social-item">
						<a href="#"class="bg-twitter icon-twitter"></a>
					</li>
					<li class="social-item">
						<a href="#"class="bg-facebook icon-facebook"></a>
					</li>
					<li class="social-item">
						<a href="#"class="bg-linkedin icon-linkedin"></a>
					</li>
					<li class="social-item">
						<a href="#"class="bg-pinterest icon-pinterest"></a>
					</li>
					<li class="social-item">
						<a href="#"class="bg-rss icon-rss"></a>
					</li>
				</ul>
				

			</div>
		</div>
		<div id="header-wrap" class="container relative margin-v">
			<a href="#" class="show-menu"></a>
			<div class="anuncio-top desktop">
				<img src="http://dummyimage.com/721x90/e84b6f/fff&text=Anuncio" alt="ANUNCIO 721 x 90">	
			</div>
			<div class="logo">
				<?php if(is_home()): ?>
				<h1><a href="<?php bloginfo('url'); ?>">
				  <img src="<?php echo IMAGENES; ?>/logo-ninja.jpg" class="logo-image" alt="NinjaViral">
					</a>
				</h1>
				<?php else: ?>
					<a href="<?php bloginfo('url'); ?>">
				 	 <img src="<?php echo IMAGENES; ?>/logo-ninja.jpg" class="logo-image" alt="NinjaViral">
					</a>
				<?php endif; ?>	

			</div>
			<nav class="nav_principal">
			<?php 
			$menu = array( 
				'theme_location' => 'principal-menu',
				'container'       => false, 
				'items_wrap' => '<ul class="menu menu-principal">%3$s</ul>'
				);
			wp_nav_menu($menu); ?>
			</nav>
		</div>
	</header>
	

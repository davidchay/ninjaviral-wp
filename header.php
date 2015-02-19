<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- Agrega la id application facebook-->
	<meta property="fb:app_id" content="{YOUR_APPLICATION_ID}">
	<!-- Agrega la id de usuarios administradores -->
	<meta property="fb:admins" content="{YOUR_FACEBOOK_USER_ID}"/>
	
	<title><?php bloginfo('name'); ?><?php wp_title();?></title>

	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	
	<link rel="alternate" type="aplication/rss+xml" title="rss 2.0" href="<?php bloginfo('rss2_url'); ?>">
 	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
 	<!-- Agrega los favicons-->
 	<?php include(INCLUYE.'favicons.php'); ?>
 	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class();?>>
	<?php if(is_single() ||is_page()){ ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<?php } ?>
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
			<nav class="nav-principal">
				<?php 
					$menu = array( 
						'theme_location' => 'principal-menu',
						'container'       => false, 
						'items_wrap' => '<ul class="menu menu-principal">%3$s</ul>',
						'fallback_cb' => false
					);
					wp_nav_menu($menu); 
				?>
			</nav>
		</div>
	</header>
	

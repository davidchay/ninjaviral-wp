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
					<?php $url_twitter=of_get_option('url_twitter','');
					?>
					<?php if($url_twitter){?>
					<li class="social-item">
						<a href="<?php echo $url_twitter; ?>" target="_blank" class="bg-twitter icon-twitter"></a>
					</li>
					<?php } ?>
					<?php $url_facebook=of_get_option('url_facebook',''); ?>
					<?php if($url_facebook){ ?>
					<li class="social-item">
						<a href="<?php echo $url_facebook; ?>" target="_blank" class="bg-facebook icon-facebook"></a>
					</li>
					<?php } ?>
					<?php $url_linkedin=of_get_option('url_linkedin',''); ?>
					<?php if($url_linkedin){ ?>
					<li class="social-item">
						<a href="<?php echo $url_linkedin; ?>" target="_blank" class="bg-linkedin icon-linkedin"></a>
					</li>
					<?php } ?>
					<?php $url_pinterest=of_get_option('url_pinterest',''); ?>
					<?php if($url_pinterest){ ?>
					<li class="social-item">
						<a href="<?php echo $url_pinterest; ?>" target="_blank" class="bg-pinterest icon-pinterest"></a>
					</li>
					<?php } ?>
					<?php $url_rss=of_get_option('url_rss',''); ?>
					<?php if($url_rss){ ?>
					<li class="social-item">
						<a href="<?php echo $url_rss; ?>" target="_blank" class="bg-rss icon-rss"></a>
					</li>
					<?php }else{ ?>
					<li class="social-item">
						<a href="<?php bloginfo('rss2_url'); ?>" target="_blank" class="bg-rss icon-rss"></a>
					</li>
					<?php } ?>
				</ul>
				

			</div>
		</div>
		<div id="header-wrap" class="container relative margin-v">
			<a href="#" class="show-menu"></a>
			<div class="anuncio-top desktop">
				<?php $adsense_codigo= of_get_option('anuncio_970x90'); 
						echo $adsense_codigo;
				?>

			</div>
			<div class="logo">
				<?php $logo_uploader=of_get_option('logo_uploader', get_bloginfo('stylesheet_directory').'/image/logo-ninja.jpg'); ?>
				<?php if(is_home()): ?>
				<h1><a href="<?php bloginfo('url'); ?>">
						<?php if($logo_uploader){?>
							<img src="<?php echo $logo_uploader; ?>" class="logo-image" alt="NinjaViral">
						<?php }else{?>
							<img src="<?php echo IMAGENES; ?>/logo-ninja.jpg" class="logo-image" alt="NinjaViral">
						<?php }?>
					</a>
				</h1>
				<?php else: ?>
					<a href="<?php bloginfo('url'); ?>">
				 	 	<?php if($logo_uploader){?>
							<img src="<?php echo $logo_uploader; ?>" class="logo-image" alt="NinjaViral">
						}else{?>
							<img src="<?php echo IMAGENES; ?>/logo-ninja.jpg" class="logo-image" alt="NinjaViral">
						<?php }?>
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
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<!-- Agrega la id de usuarios administradores -->
	<?php $id_facebook_1=of_get_option('id_facebook_1',''); 
	if($id_facebook_1){ ?>
	<meta property="fb:admins" content="<?php echo $id_facebook_1; ?>"/>
	<?php } ?>
	<?php $id_facebook_2=of_get_option('id_facebook_2',''); 
	if($id_facebook_2){ ?>
	<meta property="fb:admins" content="<?php echo $id_facebook_2; ?>"/>
	<?php } ?>
	
	<?php $id_facebook_3=of_get_option('id_facebook_3',''); 
	if($id_facebook_3){ ?>
	<meta property="fb:admins" content="<?php echo $id_facebook_3; ?>"/>
	<?php } ?>
	
	<?php $id_facebook_4=of_get_option('id_facebook_4',''); 
	if($id_facebook_4){ ?>
	<meta property="fb:admins" content="<?php echo $id_facebook_4; ?>"/>
	<?php } ?>
	
	<?php $id_facebook_5=of_get_option('id_facebook_5',''); 
	if($id_facebook_5){ ?>
	<meta property="fb:admins" content="<?php echo $id_facebook_5; ?>"/>
	<?php } ?>
	
	<!-- Agrega la id application facebook-->
	<?php $aplication_id=of_get_option('aplication_id',''); 
		if($aplication_id){ ?>
		<?php echo $application_id;?>
	<meta property="fb:app_id" content="<?php echo $aplication_id; ?>">
	<?php } ?> 
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
	<?php if(is_single() || is_page()){ ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=1591466181090634&version=v2.0";
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
							<img src="<?php echo IMAGENES; ?>logo-ninja.jpg" class="logo-image" alt="NinjaViral">
						<?php }?>
					</a>
				</h1>
				<?php else: ?>
					<a href="<?php bloginfo('url'); ?>">
				 	 	<?php if($logo_uploader){?>
							<img src="<?php echo $logo_uploader; ?>" class="logo-image" alt="NinjaViral">
						<?php }else{?>
							<img src="<?php echo IMAGENES; ?>logo-ninja.jpg" class="logo-image" alt="NinjaViral">
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
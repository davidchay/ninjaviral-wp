<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="WordPress <?php
bloginfo('version'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title();?></title>

	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<!-- fuentes -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,900italic,900,300italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.css">
 	<link rel="alternate" type="aplication/rss+xml" title="rss 2.0" href="<?php bloginfo('rss2_url'); ?>">
 	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
 	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
 	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
 	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="top_social">
			<div class="container text-right ">
				<div class="search-box">
						<a href="#"class="search-top icon-lupa"></a>
						<div id="show-search-box">
							<span class="conito"></span>
							<div class="search-content">
								<form action="" type="get">
									<input type="search" name="search" class="input-search" id="search-top" placeholder="&#59782; Para buscar, presione enter">	
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
				<h1><a href="#">
				  <img src="<?php bloginfo('template_directory'); ?>/images/logo-ninja.jpg" class="logo-image" alt="NinjaViral">
					</a>
				</h1>
			</div>
			<nav class="nav-principal">
				<ul class="menu menu-principal">
					<li class="menu-op here">
						<a href="">
							<span class="icon-inicio"></span>
						</a>
					</li>
					<li class="menu-op">
						<a href="#">Cosas que inspiran</a>
					</li>
					<li class="menu-op">
						<a href="#">Animales</a>
					</li>
					<li class="menu-op">
						<a href="#">Salud</a>
					</li>
					<li class="menu-op">
						<a href="#">Arquitectura</a>
					</li>
					<li class="menu-op">
						<a href="#">Economia</a>
					</li>
					<li class="menu-op">
						<a href="#">DIY</a>
					</li>
					<li class="menu-op">
						<a href="#">Entretenimiento</a>
					</li>
				</ul>
			</nav>

		</div>
	</header>
	<div class="container tablet">
		<div id="destacados-wraper" class="text-left">
			<div id="content-owl">
				<div id="owl-slider" class="owl-carousel owl-theme ">
					<div class="item">
						<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/contents/slider-1.jpg" alt="The Last of us">
						<h2>Esto es un ejemplo del titulo </h2>
						</a>
					</div>
					<div class="item">
						<a href="">
						<img src="images/contents/slider-2.jpg" alt="GTA V">
						<h2>Velit nesciunt quibusdam eligendi. Odit itaque beatae sed debitis tempora?</h2>
						</a>
					</div>
					<div class="item">
						<a href="">
						<img src="images/contents/slider-3.jpg" alt="Mirror Edge">
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
						</a>
					</div>
				</div>
				<span class="prev icon-izquierda slider-nav"></span>
				<span class="next icon-derecha slider-nav"></span>
			</div>
			<div id="sidebar-baner">
				<div class="post-destacado">
					<a href="#">
						<img src="images/contents/recomedado_1.jpg" alt="">
						<h2>Esta mujer pensó que su perro estaba muriendo. Lo que sucedió después la impactó profundamente y le salvó la vida</h2>
					</a>
				</div>
				<div class="post-destacado">
					<a href="#">
						<img src="images/contents/recomedado_2.jpg" alt="">
						<h2>Titulo de la entrad del post destacado</h2>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="container-post-home" class="container margin-v text-left">
		
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_a.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet">
				<a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada, y es un titulo muy muy muy largo</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_b.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_c.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_d.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_e.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_f.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_a.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_b.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_c.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_d.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_e.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
		<div class="post_home">
			<a href="#" title="Titulo de la entrada">
				<figure>
					<img src="images/contents/entrada_f.jpg" alt="titutlo del articulo">
				</figure>
			</a>
			<span class="info-post tablet"><a href="#" class="link_tag_">Etiqueta</a><span class="desktop"> | POR <a href="#" class="link_autor">Nombre</a></span> | <span class="icon-ojo"></span> 12878</span>
			<h2 class="titulo_post"><a href="#" title="Titulo de la entrada">Titulo de la entrada</a></h2>
		</div>
	</div><!--  finaliza articulos home -->
	<footer class="footer text-center">
		Historias que inspiran diariamente <br>
		<span class="icon-logo ninja"></span>
		<span class="icon-ninjaviral ninjaviral"></span>
		<br>&copy; Copyright 2015	
	</footer>
	<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
	<!-- Include js plugin -->
	<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
</body>
</html>
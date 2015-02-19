<?php get_header(); ?>
	<div class="page container margin-v text-left">
		<div class="page-post">
			<article>	
				<?php 
					if(have_posts()):
						while(have_posts()):
							setPostViews(get_the_ID());
							the_post();
				?>
				<div class="etiquetas tablet mayus">
					<?php $category=get_the_category( $post_id ); ?>
					<a href="<?php echo get_category_link($category[0]->term_id); ?>" class="link_cat_<?php echo $category[0]->term_id;?> ctegory"><?php echo $category[0]->name;?></a>
				</div>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="post-meta">
					<span class="float-left by">
						Por <?php the_author_posts_link(); ?>.
					</span>
					<span class="date">
						<?php the_time(' j F , Y'); ?>
					</span>	
					<span class="float-right views">
						<span class="icon-ojo"></span>  <?php echo getPostViews(get_the_ID()); ?>
					</span>
				</div>
				<?php the_content(); ?>
				
				
				<div class="sharebuttons">
					<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="btn btn-facebook">Compartir</a>
					<a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=<?php the_permalink(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="btn btn-twitter"> Twittear</a>
				</div>
				

			
				<?php 
					endwhile;
					else: ?>
					<h2>Lo sentimos pero no se encntro ninguna entrada</h2>
				<?php
					endif;
				?>

			</article>
			<div class="post-sugeridos">
				<?php include(INCLUYE.'post-relacionados.php'); ?>
			</div>
			<h3>Escribe un commentario</h3>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5" data-colorscheme="light">
			</div>

		</div>
		<?php get_sidebar(); ?>
		
	</div><!--  finaliza articulos home -->
<?php get_footer(); ?>
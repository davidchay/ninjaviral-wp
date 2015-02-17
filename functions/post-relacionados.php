<?php
//for use in the loop, list 5 post titles related to first tag on
//current post
$tags =  get_the_category( $post->ID );
if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  $args=array(
    'tag_in' => $tag_ids,
    'post_not_in' => array($post->ID),
    'showposts'=>6,
    'ignore_sticky_posts'=>1
   );

  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="post-suggest">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" >
            <figure>
              <?php 
                  if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('home_thumb'); 
                  }else{?>
                    <img src="<?php echo IMAGENES; ?>/thumnail.jpg"  alt="<?php the_title(); ?>">
                <?php } ?>
            </figure>
          </a>
          <h2 class="titulo_post">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
      </div>
      
      <?php
    endwhile;
  }
}
?>
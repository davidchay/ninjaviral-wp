<?php
//for use in the loop, list 5 post titles related to first tag on
//current post
$tags =  get_the_category( $post->ID );
if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

  echo 'Related Posts';
  
  $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'showposts'=>5,
    'ignore_sticky_posts'=>1
   );

  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <p><a href="<?php the_permalink() ?>" rel="bookmark" title="
      <?php the_title_attribute(); ?>">
      <?php the_title(); ?></a></p>
      <?php
    endwhile;
  }
}
?>
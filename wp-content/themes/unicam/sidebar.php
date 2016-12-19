<?php $args = array(
    'posts_per_page' => 3,
    'post__not_in' => array( $post->ID )
);
$the_query = new WP_Query($args);
?>
<div class="more-news-wrapper">
  <h2 class="title">
    További híreink
  </h2>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
  <div class="more-news">
    <h3 class="title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h3>
    <div class="description">
      <?php echo get_excerpt(); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>

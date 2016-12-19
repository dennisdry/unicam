<?php get_header(); ?>

<section class="list page">
  <div class="container">
    <div class="row list-row">

      <?php
      $term = get_queried_object();

      $children = get_terms( $term->taxonomy, array(
      'parent'    => $term->term_id,
      'hide_empty' => true
    ) ); ?>

      <?php if($children): ?>

      <?php $current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<?php
global $post;
$args = array(
  'child_of' => $current_term->term_id,
  'taxonomy' => $current_term->taxonomy,
'hide_empty' => 0,
'hierarchical' => true,
'depth'  => 1,
'title_li' => ''
  ); ?>




    <?php
    $categories = get_categories($args); ?>
      <?php foreach ($categories as $cat): ?>

        <div class="col-lg-3 col-md-3 list-card">
          <div class="list-inside">
            <div class="image visible-lg visible-md">
                <a href="<?php echo get_term_link($cat); ?>">
                  <?php
                  $args = array(
                  'post_type' => 'termekeink',
                  'posts_per_page' => 1,
                  'meta_key'			=> 'termek_sorszama',
                	'orderby'			=> 'meta_value_num',
                	'order'				=> 'ASC',
                  'tax_query' => array(
                      array(
                      'taxonomy' => 'termekek',
                      'field' => 'slug',
                      'terms' => $cat->name
                       )
                    )
                  );
                  $query = new WP_Query( $args ); ?>
                  <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <?php the_post_thumbnail(); ?>
                  <?php endwhile; ?>
                </a>
            </div>
            <div class="title-wrapper dark">
              <h2 class="title">
                <a href="<?php echo get_term_link($cat); ?>">
                  <?php echo $cat->name; ?>
                </a>
              </h2>
            </div>
          </div>
        </div>


    <?php endforeach; ?>

      <!--
    <?php else: ?>
        <?php
        $args = array(
        'post_type' => 'termekeink',
        'posts_per_page' => -1,
        'meta_key'			=> 'termek_sorszama',
        'orderby'			=> 'meta_value_num',
        'order'				=> 'ASC',
        );
        $organiziation = get_posts_related_by_taxonomy($post->ID,'termekek',$args);?>
<div class="container">

    <?php while ($organiziation->have_posts()): $organiziation->the_post(); ?>
      <?php setup_postdata($post); ?>
      <div class="col-lg-3 col-md-3 list-card">
        <div class="list-inside">
          <div class="image visible-lg visible-md">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
          </div>
          <div class="title-wrapper dark">
            <h2 class="title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
          </div>
        </div>
      </div -->


    <?php endwhile; ?>

      <?php endif; ?>
</div>



    </div>
  </div>
</section>

<?php get_footer(); ?>

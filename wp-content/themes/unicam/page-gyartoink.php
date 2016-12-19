<?php
/*
Template Name: Gyártók
*/
?>

<?php get_header(); ?>



<section class="list page">
  <div class="container">
    <div class="row list-row">
      <div class="container">
        <h1 class="pagetitle visible-sm visible-xs">
          Gyártók
        </h1>
        <div class="row list-row">
        <?php $args = array(
            'post_type' => 'gyartoink',
            'posts_per_page' => -1,
            'meta_key'			=> 'gyarto_sorszama',
            'orderby'			=> 'meta_value_num',
            'order'				=> 'ASC',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="col-lg-3 col-md-3 list-card list-card-manufacturers">
          <div class="list-inside">
            <div class="image visible-lg visible-md">
              <?php
              $image = get_field('gyarto_kepe');
              if (!empty($image)): ?>
                  <a href="<?php the_permalink(); ?>">
                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
            </div>
            <div class="title-wrapper dark">
              <h2 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php
/*
Template Name: Hírek
*/
?>

<?php get_header(); ?>

<section class="events-list page">
    <div class="container">
      <div class="row list-row">
        <h1 class="pagetitle visible-sm visible-xs">
          Hírek
        </h1>
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <article class="single-event">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 left">
                <header>
                  <h2 class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                </header>
              </div>
              <div class="col-lg-8 col-md-8 right">
                <?php echo get_excerpt(); ?>
                <div class="more-link">
                  <a href="<?php the_permalink(); ?>">
                    Tovább a hírhez >
                  </a>
                </div>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      </div>
    </div>
</section>

<?php get_footer(); ?>

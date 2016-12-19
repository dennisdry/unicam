<?php get_header(); ?>

<div class="row search-top">
  <div class="container">
    <div class="col-lg-12 col-md-12">
      <h2 class="subtitle">Találatok a következő kifejezésre: <i><?php echo get_search_query(); ?></i></h2>
    </div>
  </div>
</div>

<section class="list page">
  <div class="container-fluid">
    <div class="row list-row">
      <div class="container">
        <?php
        $args = array(
          'post_type'=> 'termekeink',
          'numberposts' => -1,
          's' => $s
        );?>
        <?php $products = get_posts( $args ); ?>
        <?php foreach( $products as $post ) : setup_postdata($post); ?>
        <div class="col-lg-3 col-md-3 list-card">
          <div class="list-inside">
            <div class="image">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('product-list', array( 'class'	=> "img-responsive")); ?>
              </a>
            </div>
            <div class="title-wrapper dark">
              <h2 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="list page">
  <div class="container-fluid">
    <div class="row list-row persons-workers workers-search">
      <div class="container">
        <?php
        $args = array(
          'post_type'=> 'munkatarsak',
          'numberposts' => -1,
          's' => $s
        );?>

        <?php $products = get_posts( $args ); ?>
        <?php foreach( $products as $post ) : setup_postdata($post); ?>
          <div class="col-lg-3 col-md-3 person-card">
            <div class="inside">
              <div class="image">
                <a href="<?php the_permalink(); ?>">
                  <?php $image = get_field('munkatars_fenykepe');
                  if (!empty($image)): ?>
                      <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </a>
                <h3 class="name">
                  <?php the_title(); ?>
                </h3>
                <h4 class="position">
                  <?php if( get_post_type() == 'munkatarsak' ) {
                      the_field('munkatars_titulusa');
                  } ?>
                </h4>
              </div>
              <div class="text">
                <div class="tel">
                  <a href="tel: <?php if( get_post_type() == 'munkatarsak' ) {
                      the_field('munkatars_telefonszama');
                  } ?>">
                  Tel:
                    <?php if( get_post_type() == 'munkatarsak' ) {
                        the_field('munkatars_telefonszama');
                    } ?>
                  </a>
                </div>
                <div class="email">
                  <a href="mailto: <?php if( get_post_type() == 'munkatarsak' ) {
                      the_field('munkatars_e-mail_cime');
                  } ?>">
                    E-mail:
                    <?php if( get_post_type() == 'munkatarsak' ) {
                        the_field('munkatars_e-mail_cime');
                    } ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>

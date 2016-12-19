<?php
/*
Template Name: Termékek
*/
?>

<?php get_header(); ?>
<section class="list page">
    <div class="container">
      <div class="row list-row">
    <?php $hiterms = get_terms("termekek", array("orderby" => "slug", "parent" => 0)); ?>
    <?php $imageterms = get_terms("termekek", array("orderby" => "slug", "parent" => 0)); ?>
    <?php foreach($hiterms as $key => $hiterm) : ?>
      <div class="visible-lg visible-md col-lg-3 col-md-3 list-card list-card-products">
        <div class="list-inside">
          <div class="image visible-lg visible-md">

          <?php
          $args = array(
          'post_type' => 'termekeink',
          'posts_per_page' => 1,
          'orderby' => 'title',
          'order' => 'ASC',
          'tax_query' => array(
              array(
              'taxonomy' => 'termekek',
              'field' => 'id',
              'terms' => $hiterm->term_id
               )
            )
          );
          $query = new WP_Query( $args ); ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          <a href="<?php echo get_term_link($hiterm); ?>">
            <?php
            $image = get_field('kategoria_kepe',$hiterm);
            if (!empty($image)): ?>
                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php else: ?>
                <?php the_post_thumbnail('product-list', array( 'class'	=> "img-responsive")); ?>
            <?php endif; ?>
          </a>
          <?php endwhile; ?>
          </div>


          <div class="title-wrapper dark">
            <h2 class="title">

              <a href="<?php echo get_term_link($hiterm); ?>">
                <?php echo $hiterm->name; ?>
              </a>
            </h2>
          </div>
          <!-- <div class="other">
            <?php $loterms = get_terms("termekek", array("orderby" => "slug", "parent" => $hiterm->term_id)); ?>
            <?php if($loterms) : ?>
            <ul class="list-unstyled other-list">
              <?php foreach($loterms as $key => $loterm) : ?>
                  <li>
                    <a href="<?php echo get_term_link($loterm); ?>">
                      <?php echo $loterm->name; ?>
                    </a>
                  </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div> -->
        </div>
      </div>
      <?php endforeach; ?>
      <h1 class="pagetitle visible-sm visible-xs">
        Termékek
      </h1>
      <div class="visible-sm visible-xs mobile-accordion dark">
        <ul class="list-unstyled accordion-list accordion-list-products">
          <?php foreach($hiterms as $key => $hiterm) : ?>
          <?php
          $args = array(
          'post_type' => 'termekeink',
          'posts_per_page' => 1,
          'orderby' => 'title',
          'order' => 'ASC',
          'tax_query' => array(
              array(
              'taxonomy' => 'termekek',
              'field' => 'id',
              'terms' => $hiterm->term_id
               )
            )
          );
          $loterms = get_terms("termekek", array("orderby" => "slug", "parent" => $hiterm->term_id));
          $query = new WP_Query( $args ); ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          <li class="accordion-item">
            <div class="inside-item inside-item-about">
                <h3 class="title">
                  <?php if($loterms) : ?>
                    <?php echo $hiterm->name; ?>
                  <?php else: ?>
                      <a href="<?php echo get_term_link($hiterm); ?>">
                        <?php echo $hiterm->name; ?>
                      </a>
                  <?php endif; ?>
                </h3>
                <?php if($loterms) : ?>
                  <span class="icon plus-icon pull-right">
                      <span class="accordionbutton"></span>
                  </span>
                <?php else: ?>
                  <a href="<?php echo get_term_link($hiterm); ?>">
                    <span class="icon plus-icon pull-right">
                      <span class="accordionlink">
                        <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                        </svg>
                      </span>
                    </span>
                  </a>
                <?php endif; ?>
            </div>
            <?php if($loterms) : ?>
            <ul class="accordion-open list-unstyled">
              <?php foreach($loterms as $key => $loterm) : ?>
                <li class="accordion-open-item">
                  <a href="<?php echo get_term_link($loterm); ?>">
                    <?php echo $loterm->name; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </li>
          <?php endwhile; ?>
          <?php endforeach; ?>
        </ul>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>

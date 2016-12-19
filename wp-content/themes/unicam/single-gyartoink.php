<?php get_header(); ?>

<section class="list page">
  <div class="container-fluid">
    <div class="row list-row">
      <div class="container">
        <?php
        global $post;
         $manufacturers = get_posts(array(
                     'post_type' => 'termekeink',
                     'posts_per_page' => -1,
                     'meta_key'			=> 'termek_sorszama',
                     'orderby'			=> 'meta_value_num',
                     'order'				=> 'ASC',
                     'meta_query' => array(
                      array(
                          'key' => 'relation_manufacturer', // name of custom field
                          'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                          'compare' => 'LIKE'
                              )
                          )
                        ));

                        ?>
          <?php if( $manufacturers ): ?>
            <div class="manufacturer-logospace col-lg-12 col-md-12">
              <div class="visible-lg visible-md">
                Forgalmazott
              </div>
              <?php
              $image = get_field('gyarto_kepe');
              if (!empty($image)): ?>
                  <div class="logo">
                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div>
              <?php endif; ?>
              <div class="visible-lg visible-md">
                termékek
              </div>
            </div>
             <?php foreach( $manufacturers as $manufacturer ): ?>
               <?php setup_postdata($post); ?>
               <div class="col-lg-3 col-md-3 list-card">
                 <div class="list-inside">
                   <div class="image">
                       <a href="<?php echo get_permalink( $manufacturer->ID ); ?>">
                         <?php echo get_the_post_thumbnail( $manufacturer->ID,'product-list', array( 'class' => 'img-responsive' ) ); ?>
                       </a>
                   </div>
                   <div class="title-wrapper dark">
                     <h2 class="title">
                       <a href="<?php echo get_permalink( $manufacturer->ID ); ?>">
                         <?php echo get_the_title( $manufacturer->ID ); ?>
                       </a>
                     </h2>
                   </div>
                 </div>
               </div>
             <?php endforeach; ?>
             <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>

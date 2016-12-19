<?php get_header('clean'); ?>
<section class="container-slider">
    <div class="row">
        <div class="slider">
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs slider-arrow-left" id="slide-back">
              <svg version="1.1" id="slider-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-274 382.9 46 76" style="enable-background:new -274 382.9 46 76;" xml:space="preserve">
                <g id="Symbols">
              	<g id="ARROW">
              		<path id="Shape" class="st0" d="M-231.2,458.2c-0.7,0-1.4-0.2-1.9-0.7l-39.7-35.2c-1-0.9-1-2.4,0-3.3l39.7-35.2
              			c1-0.9,2.7-0.9,3.7,0c1,0.9,1,2.4,0,3.3l-37.8,33.5l37.8,33.5c1,0.9,1,2.4,0,3.3C-229.9,457.9-230.6,458.2-231.2,458.2z"/>
              	</g>
              </g>
              </svg>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 slider-content">
              <div class="containerslide">


              <div class="cycle-slideshow"
                data-cycle-fx="fade"
                data-cycle-slides="> div"
                data-cycle-timeout="10000"
                data-cycle-center-horz=true
                data-cycle-center-vert=true
                data-cycle-prev="#slide-back"
                data-cycle-next="#slide-forward"
                data-cycle-pager=".slider-pager"
                data-cycle-pager-template="<span><a href=#> {{slideNum}} </a></span>"
                >
                <?php $args = array(
                    'post_type' => 'termekeink',
                    'posts_per_page' => '5',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'kiemelt',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="row slide-object">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slider-content-left">
                        <article class="article-slide">
                            <header>
                                <h1 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h1>
                                <div class="lead visible-lg">
                                  <?php
                                  if( get_post_type() == 'termekeink' ) {
                                      the_field('lapozo_rovid_leirasa');
                                  }
                                  ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="visible-lg">
                                  <button class="button-main fullheight">
                                      Tovább
                                      <span class="icon" title="Olvasom"><svg viewBox="0 0 24 24"><use xlink:href="#next-button"></use></span>
                                  </button>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slider-content-right">
                      <?php
                      $image = get_field('lapozo_kepe');
                      if (!empty($image)): ?>
                          <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php else: ?>
                          <?php the_post_thumbnail('full', array( 'class'	=> "img-responsive")); ?>
                      <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
</div>
          </div>
          <div class="slider-pager"></div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs slider-arrow-right" id="slide-forward">
              <svg version="1.1" id="slider-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-274 382.9 46 76" style="enable-background:new -274 382.9 46 76;" xml:space="preserve">
              <g id="Symbols">
              	<g id="ARROW">
              		<path id="Shape" class="st0" d="M-272.8,457.5c-1-0.9-1-2.4,0-3.3l37.8-33.5l-37.8-33.5c-1-0.9-1-2.4,0-3.3c1-0.9,2.7-0.9,3.7,0
              			l39.7,35.2c1,0.9,1,2.4,0,3.3l-39.7,35.2c-0.5,0.5-1.2,0.7-1.9,0.7C-271.6,458.2-272.3,457.9-272.8,457.5z"/>
              	</g>
              </g>
              </svg>
            </div>

        </div>
    </div>
</section>

<section class="news-events dark visible-lg visible-md">
  <div class="container">
    <div class="row">
      <div class="inside">
        <div class="col-lg-6 col-md-6">
          <div class="section-header">
            <div class="icon">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="#ffffff" d="M20,11H4V8H20M20,15H13V13H20M20,19H13V17H20M11,19H4V13H11M20.33,4.67L18.67,3L17,4.67L15.33,3L13.67,4.67L12,3L10.33,4.67L8.67,3L7,4.67L5.33,3L3.67,4.67L2,3V19A2,2 0 0,0 4,21H20A2,2 0 0,0 22,19V3L20.33,4.67Z" />
              </svg>
            </div>
            <h2 class="title">
              Hírek
            </h2>
          </div>
          <div class="news-list">
            <?php
            $query = new WP_Query( 'post_per_page=3' );
            if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <article class="news">
                <header>
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                </header>
                <div class="more-link">
                  <a href="<?php the_permalink(); ?>">
                    Tovább >
                  </a>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <br />
          <div class="more-link">
            <a href="<?php echo site_url(); ?>/hirek/">Tovabbi hírek ></a>
          </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="section-header">
            <div class="icon">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="#ffffff" d="M14,14H7V16H14M19,19H5V8H19M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M17,10H7V12H17V10Z" />
              </svg>
            </div>
            <h2 class="title">
              Események
            </h2>
          </div>
          <div class="events-list">
            <?php $args = array(
                'post_type' => 'esemenyek',
                'posts_per_page' => '3'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="event">
              <div class="row">
                <div class="date col-lg-3 col-md-3">
                  <span class="year">
                    <?php
                    $date = get_field('esemeny_datuma', false, false);
                    $date = new DateTime($date);
                    ?>
                    <?php echo $date->format('Y'); ?>
                  </span>
                  <date datetime="<?php echo $date->format('Y-m-d'); ?>" class="day">
                    <?php
                    $date = get_field('esemeny_datuma', false, false);
                    $date = new DateTime($date);
                    ?>
                    <?php echo $date->format('m.d'); ?>
                    -
                    <?php
                    $date = get_field('esemeny_vege', false, false);
                    $date = new DateTime($date);
                    ?>
                    <?php echo $date->format('m.d'); ?>
                  </date>
                </div>
                <div class="content col-lg-9 col-md-9">
                  <header>
                    <h3>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                  </header>
                  <div class="description">
                    <?php
                    if( get_post_type() == 'esemenyek' ) {
                        the_field('esemeny_helyszine_szoveggel');
                    }
                    ?>
                  </div>
                </div>
              </div>
            </article>
            <?php endwhile; ?>
            <div class="more-link">
              <a href="<?php echo site_url(); ?>/esemenyek/">Tovabbi események ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mobile-accordion visible-sm visible-xs dark">
  <ul class="list-unstyled accordion-list">
    <li class="accordion-item">
      <div class="inside-item">
        <span class="icon item-icon home-icon">
          <svg style="width:20px;height:20px" viewBox="0 0 24 24">
              <path d="M20,11H4V8H20M20,15H13V13H20M20,19H13V17H20M11,19H4V13H11M20.33,4.67L18.67,3L17,4.67L15.33,3L13.67,4.67L12,3L10.33,4.67L8.67,3L7,4.67L5.33,3L3.67,4.67L2,3V19A2,2 0 0,0 4,21H20A2,2 0 0,0 22,19V3L20.33,4.67Z" />
          </svg>
        </span>
        <h3 class="title">
          Hírek
        </h3>
        <span class="icon plus-icon pull-right">
          <span class="accordionbutton"></span>
        </span>
      </div>
      <ul class="accordion-open list-unstyled">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => '5'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="accordion-open-item">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
        <?php endwhile; ?>
      </ul>
    </li>
    <li class="accordion-item">
      <div class="inside-item">
        <span class="icon item-icon home-icon">
          <svg style="width:20px;height:20px" viewBox="0 0 24 24">
              <path d="M14,14H7V16H14M19,19H5V8H19M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M17,10H7V12H17V10Z" />
          </svg>
        </span>
        <h3 class="title">
          Események
        </h3>
        <span class="icon plus-icon pull-right">
          <span class="accordionbutton"></span>
        </span>
      </div>
      <ul class="accordion-open list-unstyled">
        <?php $args = array(
            'post_type' => 'esemenyek',
            'posts_per_page' => '5'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
          <li class="accordion-open-item">
            <?php the_title(); ?>
            <div class="mobile-event-meta">
              <span class="year">
                <?php
                $date = get_field('esemeny_datuma', false, false);
                $date = new DateTime($date);
                ?>
                <?php echo $date->format('Y.m.d.'); ?>
              </span>
              <br />
              <span class="description">
                <?php
                if( get_post_type() == 'esemenyek' ) {
                    the_field('esemeny_helyszine_szoveggel');
                }
                ?>
              </span>
            </div>
          </li>
          </a>
        <?php endwhile; ?>
      </ul>
    </li>
  </ul>
</section>
<section class="newsletter-subscribe solidgrey">
  <div class="container">
    <div class="section-title-small">
      <h2 class="title">
        Ne maradjon le újdonságainkról, iratkozzon fel hírlevelünkre!
      </h2>
    </div>
    <button class="button-main subscribe-trigger">
        <span class="text-on-button">
          Feliratkozom a hírlevélre
        </span>
        <span class="icon arrow-down" title="Olvasom"></span>
    </button>
  </div>
  <div class="container newsletter-container">
    <!-- form action="" class="newsletter">
      <input placeholder="E-mail" type="email"></input>
      <input type="submit" class="submit-button" value="Feliratkozom"></button>
    </form -->
    <?php echo do_shortcode('[mc4wp_form id="93"]'); ?>
  </div>
</section>
<section class="manufacturers visible-lg visible-md">
  <div class="container-fluid">
    <div class="row main-manufacturers">
      <div class="container">
        <div class="section-title-small">
          <h2 class="title">
            Forgalmazott termékek gyártói
          </h2>
        </div>

        <?php $args = array(
            'post_type' => 'gyartoink',
            'posts_per_page' => '4',
            'meta_key'			=> 'gyarto_sorszama',
            'orderby'			=> 'meta_value_num',
            'order'				=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'gyarto-kategoria',
                    'field' => 'slug',
                    'terms' => 'kiemelt-gyarto',
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="manufacturer-logo">

            <?php
            $image = get_field('gyarto_kepe');
            if (!empty($image)): ?>
            <a href="<?php echo($field = get_field('gyarto_linkje')); ?>" target="_blank">
                  <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <hr />
    <div class="row secondary-manufacturers">
      <div class="container">
        <?php $args = array(
            'post_type' => 'gyartoink',
            'posts_per_page' => '-1',
            'meta_key'			=> 'gyarto_sorszama',
            'orderby'			=> 'meta_value_num',
            'order'				=> 'ASC',
            'tax_query'	=> array(
                array(
                    'taxonomy'  => 'gyarto-kategoria',
                    'field'     => 'slug',
                    'terms'     => 'kiemelt-gyarto', // exclude media posts in the news-cat custom taxonomy
                    'operator'  => 'NOT IN')
                    ),
               );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="col-lg-2 col-md-2 manufacturer-logo">
          <?php
          $image = get_field('gyarto_kepe');
          if (!empty($image)): ?>
          <a href="<?php echo($field = get_field('gyarto_linkje')); ?>" target="_blank">
              <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

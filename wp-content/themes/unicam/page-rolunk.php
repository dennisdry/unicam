<?php
/*
Template Name: Rólunk
*/
?>

<?php get_header(); ?>


<section class="aboutus">
  <div class="container-fluid dark about-info">
    <div class="about-info">
      <div class="container">
        <h1 class="pagetitle pagetitle-mobilewhite visible-sm visible-xs">
          Rólunk
        </h1>
        <div class="row">
        <div class="intro-text col-lg-12 col-md-12">
          <p>
            Cégünk analitikai műszerek és képalkotó eszközök széles választékát, valamint teljes körű szervizszolgáltatást kínál a legkülönbözőbb felhasználási területek feladatainak magas szintű ellátására.
          </p>
        </div>
        <div class="col-lg-4 col-md-4 text">
          <div class="info" style="font-size: 18px;">
            UNICAM Magyarország Kft.
          </div>
          <div class="info">
            Telefon: <a href="tel: 1-2215536">1-2215536</a>
          </div>
          <div class="info">
            Fax: 1-2215543
          </div>
          <div class="info">
            E-mail: <a href="mailto: unicam@unicam.hu">unicam@unicam.hu</a>
          </div>
          <div class="info">
            Címünk: <a href="https://goo.gl/maps/7P1pvKNYxF92">1144 Budapest, Kőszeg u. 27</a>
          </div>
          <div class="info">
            Cégjegyzékszám: 01 09 265080
          </div>
          <div class="info">
            Cég ISO minősítése: <a href="#" data-toggle="modal" data-target="#isoModal">ISO 9001</a>
          </div>
        </div>
        <div id="canvas1" class="col-lg-8 col-md-8 map">
          <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.0966997086834!2d19.137286315627087!3d47.507507979178264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741db5425bf4339%3A0xc9f1878597f5823d!2sBudapest%2C+K%C5%91szeg+u.+27%2C+1144+Magyarorsz%C3%A1g!5e0!3m2!1shu!2srs!4v1466878338015" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="container namelist">
    <h1 class="title">
      Munkatársaink
    </h1>
    <div class="row persons-workers visible-lg visible-md">
      <?php
      $hiterms = get_terms(array(
        'taxonomy' => 'divizio',
        'orderby' => 'term_order',
        'order' => 'ASC'
      )); ?>
      <?php foreach($hiterms as $key => $hiterm) : ?>
      <?php $args = array(
          'post_type' => 'munkatarsak',
          'posts_per_page' => '-1',
          'meta_key'			=> 'munkatars_sorszama',
          'orderby'			=> 'meta_value_num',
          'order'				=> 'ASC',
          'tax_query' => array(
              array(
                  'taxonomy' => 'divizio',
                  'field' => 'id',
                  'terms' => $hiterm->term_id
              ),
          ),
      );
      $the_query = new WP_Query($args);
      ?>
      <div class="col-lg-12 col-md-12 division-title">
        <h2 class="subtitle">
          <?php echo $hiterm->name; ?>

        </h2>
      </div>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="col-lg-3 col-md-3 person-card <?php if( has_term( 'rejtett', 'divizio' ) ) {
    echo 'hidden';
} ?> <?php if( get_field('teljes_sor_rejtese') ) {
echo 'hiddenwholerow';
} ?>">
        <div class="inside">
          <div class="image">
            <?php $image = get_field('munkatars_fenykepe');
            if (!empty($image)): ?>
                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
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
                <?php if( get_post_type() == 'munkatarsak' ) {
                    the_field('munkatars_telefonszama');
                } ?>
              </a>
            </div>
            <div class="email">
              <a href="mailto: <?php if( get_post_type() == 'munkatarsak' ) {
                  the_field('munkatars_e-mail_cime');
              } ?>">
                <?php if( get_post_type() == 'munkatarsak' ) {
                    the_field('munkatars_e-mail_cime');
                } ?>
              </a>
            </div>
          </div>

          <!-- div
          class=
          "sendmail
          <?php
          if( get_field('kuldheto_neki_uzenet') )
          {
             echo 'invisible';
          }
          ?>
          ">
            <button class="button-main" data-toggle="modal" data-target="#munkatarsFormRolunk">
              Üzenetet írok!
            </button>
          </div -->

        </div>
      </div>
    <?php endwhile; ?>
    <?php endforeach ?>
    </div>
    <!-- <div class="row persons-workers">
      <div class="col-lg-12 col-md-12">
        <h2 class="subtitle">
          Mikroszkópia
        </h2>
      </div>
      <?php $args = array(
          'post_type' => 'munkatarsak',
          'posts_per_page' => '-1',
          'tax_query' => array(
              array(
                  'taxonomy' => 'divizio',
                  'field' => 'slug',
                  'terms' => 'mikroszkopia',
              ),
          ),
      );
      $the_query = new WP_Query($args);
      ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="col-lg-3 col-md-3 person-card">
        <div class="inside">
          <div class="image">
            <?php $image = get_field('munkatars_fenykepe');
            if (!empty($image)): ?>
                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
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
                <?php if( get_post_type() == 'munkatarsak' ) {
                    the_field('munkatars_telefonszama');
                } ?>
              </a>
            </div>
            <div class="email">
              <a href="mailto: <?php if( get_post_type() == 'munkatarsak' ) {
                  the_field('munkatars_e-mail_cime');
              } ?>">
                <?php if( get_post_type() == 'munkatarsak' ) {
                    the_field('munkatars_e-mail_cime');
                } ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div> -->


  </div>

  <div class="visible-sm visible-xs mobile-accordion dark mobile-workers-accordion">
    <ul class="list-unstyled accordion-list accordion-list-products">
      <?php
      $hiterms = get_terms(array(
        'taxonomy' => 'divizio',
        'orderby' => 'term_order',
        'order' => 'ASC'
      )); ?>
      <?php foreach($hiterms as $key => $hiterm) : ?>
      <?php $args = array(
          'post_type' => 'munkatarsak',
          'posts_per_page' => '-1',
          'meta_key'			=> 'munkatars_sorszama',
          'orderby'			=> 'meta_value_num',
          'order'				=> 'ASC',
          'tax_query' => array(
              array(
                  'taxonomy' => 'divizio',
                  'field' => 'id',
                  'terms' => $hiterm->term_id
              ),
          ),
      );
      $the_query = new WP_Query($args);
      ?>

      <li class="accordion-item listcat-<?php echo $hiterm->name; ?>">
        <div class="inside-item inside-item-about">
            <h3 class="title">
              <?php echo $hiterm->name; ?>
            </h3>
            <span class="icon plus-icon pull-right">
                <span class="accordionbutton"></span>
            </span>
        </div>
        <ul class="accordion-open list-unstyled">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="accordion-open-item <?php if( has_term( 'rejtett', 'divizio' ) ) {
          echo 'hiddenlistitem';
      } ?>">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <?php $image = get_field('munkatars_fenykepe');
                  if (!empty($image)): ?>
                      <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <h3 class="name">
                    <?php the_title(); ?>
                  </h3>
                  <h4 class="position">
                    <?php if( get_post_type() == 'munkatarsak' ) {
                        the_field('munkatars_titulusa');
                    } ?>
                  </h4>
                  <div class="text">
                    <div class="tel">
                      <a href="tel: <?php if( get_post_type() == 'munkatarsak' ) {
                          the_field('munkatars_telefonszama');
                      } ?>">
                        <?php if( get_post_type() == 'munkatarsak' ) {
                            the_field('munkatars_telefonszama');
                        } ?>
                      </a>
                    </div>
                    <div class="email">
                      <a href="mailto: <?php if( get_post_type() == 'munkatarsak' ) {
                          the_field('munkatars_e-mail_cime');
                      } ?>">
                        <?php if( get_post_type() == 'munkatarsak' ) {
                            the_field('munkatars_e-mail_cime');
                        } ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
        </ul>
      </li>

      <?php endforeach; ?>
    </ul>
    </div>
</section>

<?php get_footer(); ?>

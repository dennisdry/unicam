<?php
/*
Template Name: English
*/
?>

<?php get_header('english'); ?>


<section class="aboutus">
  <div class="container-fluid dark about-info-wrapper">
    <div class="row about-info">
      <div class="container">
        <h1 class="pagetitle visible-sm visible-xs">
          About Us
        </h1>
        <div class="intro-text col-lg-12 col-md-12">
          <p>
            <?php $args = array(
                'post_type' => 'english_aboutus',
                'posts_per_page' => '1',
            );
            $the_query = new WP_Query($args); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php
              if( get_post_type() == 'english_aboutus' ) : ?>
                  <?php echo the_field('about_us'); ?>
              <?php else : ?>
                Cégünk analitikai műszerek és mikroszkópok széles választékát, és teljes körű szervizszolgáltatást kínál a legkülönbözőbb felhasználási területek feladatainak magas szintű ellátására.
              <?php endif; ?>
            <?php endwhile; ?>
          </p>
        </div>
        <div class="col-lg-4 col-md-4 text">
          <div class="info" style="font-size: 18px;">
            UNICAM Hungary Ltd.
          </div>
          <div class="info">
            Phone: <a href="tel: 1-2215536">1-2215536</a>
          </div>
          <div class="info">
            Fax: 1-2215543
          </div>
          <div class="info">
            E-mail: <a href="mailto: unicam@unicam.hu">unicam@unicam.hu</a>
          </div>
          <div class="info">
            Address: <a href="https://goo.gl/maps/7P1pvKNYxF92">1144 Budapest, Kőszeg u. 27</a>
          </div>
          <div class="info">
            Company registration number: 12345-543-21
          </div>
          <div class="info">
            ISO qualification: <a href="#" data-toggle="modal" data-target="#isoModalEn">ISO 9001</a>
          </div>
        </div>
        <div id="canvas1" class="col-lg-8 col-md-8 map">
          <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.0966997086834!2d19.137286315627087!3d47.507507979178264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741db5425bf4339%3A0xc9f1878597f5823d!2sBudapest%2C+K%C5%91szeg+u.+27%2C+1144+Magyarorsz%C3%A1g!5e0!3m2!1shu!2srs!4v1466878338015" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <br />
    <div class="continue-text">
      <p>
        <?php $args = array(
            'post_type' => 'english_aboutus',
            'posts_per_page' => '1',
        );
        $the_query = new WP_Query($args); ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php
          if( get_post_type() == 'english_aboutus' ) : ?>
              <?php echo the_field('bevezeto_alatt'); ?>
          <?php endif; ?>
        <?php endwhile; ?>
      </p>
    </div>
  </div>
</section>

<?php get_footer(); ?>

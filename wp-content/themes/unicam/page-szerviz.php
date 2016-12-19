<?php
/*
Template Name: Szerviz
*/
?>

<?php get_header(); ?>

<section class="service page">
  <div class="container">
    <h1 class="pagetitle visible-sm visible-xs">
      Szerviz
    </h1>
    <div class="page-lead">
      <p style="font-size: 16px;">
        A Unicam Magyarország Kft. teljes körű szerviz szolgáltatást (beüzemelés, betanítás, javítás, karbantartás, validálás) nyújt az általa forgalmazott valamennyi berendezéshez.
      </p>
    </div>
    <div class="row service-divisions">
      <div class="col-lg-6 col-md-6 one-division">
        <h2 class="subtitle">
          Analitikai műszerek szervize
        </h2>
        <div class="contact">
          <div class="tel">
            <a href="tel: 1-2215536">+36-1-468-2003</a>
          </div>
          <div class="email">
            <a href="mailto: unicam@unicam.hu">szerviz@unicam.hu</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 one-division">
        <h2 class="subtitle">
          Mikroszkópok és kamerák szervize
        </h2>
        <div class="contact">
          <div class="tel">
            <a href="tel: 1-2215536">+36-1-221-4962 </a>
          </div>
          <div class="email">
            <a href="mailto: unicam@unicam.hu">kepalkotas@unicam.hu</a>
          </div>
        </div>
      </div>
    </div>
    <div class="service-errorsubmit row">
      <div class="top col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <button class="button-main errorsubmit-trigger errorsubmit-trigger-analitika">
            Hibabejelentés
            <span class="icon arrow-down" title="Olvasom"></span>
        </button>
      </div>
      <div class="top col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <button class="button-main errorsubmit-trigger errorsubmit-trigger-mikroszkop">
            Hibabejelentés
            <span class="icon arrow-down" title="Olvasom"></span>
        </button>
      </div>
      <div class="service-form-wrapper service-form-wrapper-analitika">
        <?php echo do_shortcode('[contact-form-7 id="1127" title="Hibabejelentő - Analitika"]'); ?>
      </div>
      <div class="service-form-wrapper service-form-wrapper-mikroszkopia">
        <?php echo do_shortcode('[contact-form-7 id="2305" title="Hibabejelentő - Mikroszkópia"]'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>

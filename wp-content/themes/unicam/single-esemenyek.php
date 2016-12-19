<?php get_header(); ?>
<?php
$datestarting = get_field('esemeny_datuma', false, false);
$datestarting = new DateTime($datestarting);
$dasta = $datestarting->format('Ymd');

$dateending = get_field('esemeny_vege', false, false);
$dateending = new DateTime($dateending);

$timestarting = get_field('esemeny_kezdetenek_idopontja', false, false);
$timestarting = new DateTime($timestarting);
$dates = $timestarting->format('Hi');

$timeending = get_field('esemeny_vegenek_idopontja', false, false);
$timeending = new DateTime($timeending);
$datend = $timeending->format('Hi');

$evpc = get_field('esemeny_helyszine_szoveggel');
$excrpt = get_excerpt();

?>

<section class="event-page">
  <div class="container">
    <article class="row">
        <div class="event-header">
          <div class="col-lg-5 col-md-5 left">
            <header>
              <h2 class="title">
                <?php the_title(); ?>
              </h2>
            </header>
          <div class="date">
            <?php
            $date = get_field('esemeny_datuma', false, false);
            $date = new DateTime($date);
            ?>
            <?php echo $date->format('Y'); ?>

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
            <div class="place">
              <?php
              if( get_post_type() == 'esemenyek' ) {
                  the_field('hely_megnevezese');
              }
              ?>
            </div>
            <div class="address">
              Cím: <?php
              if( get_post_type() == 'esemenyek' ) {
                  the_field('esemeny_helyszine_szoveggel');
              }
              ?>
            </div>
            <div class="add-calendar">
              <a href="<?php echo site_url(); ?>/ical.php?date=<?php echo $dasta; ?>&amp;startTime=<?php echo $dates; ?>&amp;endTime=<?php echo $datend; ?>&amp;subject=<?php the_title(); ?>&amp;location=<?php echo $evpc; ?>&amp;desc=<?php echo $excrpt; ?>" title="Add to Calendar" class="addcalen">
                <span class="icon">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path d="M19,19V7H5V19H19M16,1H18V3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H6V1H8V3H16V1M11,9H13V12H16V14H13V17H11V14H8V12H11V9Z" />
                  </svg>
                </span>
                Hozzáadás a naptárhoz
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 right">
            <address class="event-map">
              <?php
              if( get_post_type() == 'esemenyek' ) {
                  the_field('esemeny_helyszine_szoveggel');
              } ?>
            </address>
          </div>
        </div>
        <div class="clearfix"></div>
        <hr />
        <div class="container">
          <div class="event-body">
            <h2 class="subtitle">
              A programról
            </h2>
            <div class="content">
              <?php the_content(); ?>
            </div>
            <?php if( get_field('letoltheto_program') ): ?>
            <div class="event-download">
              <a target="_blank" href="<?php
              if( get_post_type() == 'esemenyek' ) {
                  the_field('letoltheto_program');
              }
              ?>" download="unicam-<?php the_title(); ?>">
                Részletes program letöltése
                <span class="icon">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
                  </svg>
                </span>
              </a>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="event-downloads-wrapper">
          <?php
            // check if the repeater field has rows of data
            if( have_rows('esemeny_letoltesei') ): ?>
          <div class="product-accordion">
            <ul class="list-unstyled accordion-list desktop-accordion">
              <li class="accordion-item">
                <div class="inside-item">
                  <h3 class="title">
                    További letöltések
                  </h3>
                  <span class="icon plus-icon pull-right">
                    <span class="accordionbutton"></span>
                  </span>
                </div>
                <ul class="accordion-open list-unstyled">

                      <?php while ( have_rows('esemeny_letoltesei') ) : the_row(); ?>

                        <?php
                        $download = get_sub_field('esemeny_letoltes');
                        $filename = basename($download);
                        ?>


                        <li class="accordion-open-item">
                          <span class="link">
                            <a href="<?php echo $download; ?>" download>
                              <?php echo $filename; ?>
                            </a>
                          </span>
                          <span class="icon">
                            <a href="<?php echo $download; ?>" download>
                              <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                  <path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
                              </svg>
                            </a>
                          </span>
                        </li>
                      <?php endwhile; ?>
                </ul>
              </li>
            </ul>
          </div>
          <?php endif; ?>
        </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>

<?php get_header(); ?>

<section class="productpage page">
  <div class="container">

    <div class="row">
    <article>
      <div class="col-lg-7 col-md-7 left">
        <div class="product">
          <div class="row product-header">
            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-7 title-wrapper">
              <header>
                <h1 class="title">
                  <?php
                  the_title();
                  ?>
                </h1>
                <script>
                $(document).ready(function(){
                  var datatitle = $(this).attr('dataTitle');
                    $("#modaltriggerworker").click(function(){
                        $("input#termekneve").val('<?php echo do_shortcode('[postthistitle]'); ?>');
                    });
                });
                </script>
                <div class="share-wrapper visible-lg visible-md">
                  <span class="print icon">
                    <a onclick="printing()">
                      <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                          <path d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z" />
                      </svg>
                    </a>
                  </span>
                  <span class="mail icon">
                    <a href="mailto:?subject=<?php the_title(); ?> - Unicam Magyarország Kft.&body=<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">
                      <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                          <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                      </svg>
                    </a>
                  </span>
                  <span class="facebook icon">
                    <a id="fbsend">
                      <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                          <path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" />
                      </svg>
                    </a>
                  </span>
                </div>
              </header>
            </div>
            <div class="col-lg-3 col-md-3 manufacturer-logo visible-lg visible-md">

                <figure class="manufacturer-logo-wrapper">
                  <?php

     $posts = get_field('relation_manufacturer');

     if( $posts ): ?>

     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
       <?php $image = get_field('gyarto_kepe');
       if (!empty($image)): ?>
           <a href="<?php the_permalink(); ?>">
             <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
       <?php endif; ?>
     <?php endforeach; ?>

     <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
     <?php endif; ?>
                </figure>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 manufacturer-logo visible-sm visible-xs">
              <a href="#">
                <button class="button-main pull-right" data-toggle="modal" data-target="#munkatarsForm">
                  Ajánlatot kérek!
                </button>
              </a>
            </div>
          </div>
          <div class="product-content">
            <div class="product-slider row">
              <div class="col-lg-1 col-md-1 visible-lg visible-md arrow-wrapper">
                <div id="product-arrow-left" class="arrow arrow-left">
                  <svg version="1.1" id="product-slide-back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="-274 382.9 46 76" style="enable-background:new -274 382.9 46 76;" xml:space="preserve">
                  <g id="Symbols">
                  	<g id="ARROW">
                  		<path id="Shape" class="st0" d="M-231.2,458.2c-0.7,0-1.4-0.2-1.9-0.7l-39.7-35.2c-1-0.9-1-2.4,0-3.3l39.7-35.2
                  			c1-0.9,2.7-0.9,3.7,0c1,0.9,1,2.4,0,3.3l-37.8,33.5l37.8,33.5c1,0.9,1,2.4,0,3.3C-229.9,457.9-230.6,458.2-231.2,458.2z"/>
                  	</g>
                  </g>
                  </svg>
                </div>
              </div>
              <div class="col-lg-10 col-md-10 images">
                <div class="cycle-slideshow cycle-slideshow-product-img"
                  data-cycle-swipe=true
                  data-cycle-swipe-fx=fade
                  data-cycle-fx="fade"
                  data-cycle-timeout="0"
                  data-cycle-center-horz=true
                  data-cycle-center-vert=true
                  data-cycle-prev="#product-slide-back"
                  data-cycle-next="#product-slide-forward"
                  data-cycle-pager-template="<span><a href=#> {{slideNum}} </a></span>"
                  data-cycle-pager=".product-slider-pager"
                  >
                    <?php the_post_thumbnail('large', array( 'class'	=> "img-responsive")); ?>

                    <?php
                      // check if the repeater field has rows of data
                      if( have_rows('termekkepek') ):

                        // loop through the rows of data
                          while ( have_rows('termekkepek') ) : the_row(); ?>

                              <?php $image = get_sub_field('termek_kepe'); ?>

                              <img class="img-responsive" src="<?php echo $image; ?>" />

                          <?php endwhile; ?>
                      <?php endif; ?>
                  </div>
              </div>
              <div class="col-lg-1 col-md-1 visible-lg visible-md arrow-wrapper">
                <div id="product-arrow-right" class="arrow arrow-right">
                  <svg version="1.1" id="product-slide-forward" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
            <div class="product-slider-pager"></div>
            <div class="product-description">
              <p>
                <?php if( get_post_type() == 'termekeink' ) {
                    the_field('termek_rovid_leirasa');
                } ?>
              </p>
            </div>
            <div class="product-accordion">
              <ul class="list-unstyled accordion-list desktop-accordion">
                <li class="accordion-item">
                  <div class="inside-item">
                    <h3 class="title">
                      Termék leírása
                    </h3>
                    <span class="icon plus-icon pull-right">
                      <span class="accordionbutton"></span>
                    </span>
                  </div>
                  <ul class="accordion-open list-unstyled">
                    <li class="accordion-open-item">
                      <?php the_content(); ?>
                    </li>
                  </ul>
                </li>
                <?php
                  // check if the repeater field has rows of data
                  if( have_rows('termek_letoltesek') ): ?>
                <li class="accordion-item">
                  <div class="inside-item">
                    <h3 class="title">
                      Letöltések
                    </h3>
                    <span class="icon plus-icon pull-right">
                      <span class="accordionbutton"></span>
                    </span>
                  </div>
                  <ul class="accordion-open list-unstyled">

                        <?php while ( have_rows('termek_letoltesek') ) : the_row(); ?>

                          <?php
                          $download = get_sub_field('letoltes');
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
                <?php endif; ?>
                <?php
                  // check if the repeater field has rows of data
                  if( have_rows('tovabbi_mezok') ): ?>
                  <?php while ( have_rows('tovabbi_mezok') ) : the_row(); ?>
                <li class="accordion-item">
                  <div class="inside-item">
                    <h3 class="title">
                        <?php echo get_sub_field('tovabbi_mezo_cime'); ?>

                    </h3>
                    <span class="icon plus-icon pull-right">
                      <span class="accordionbutton"></span>
                    </span>
                  </div>
                  <ul class="accordion-open list-unstyled">
                    <li class="accordion-open-item">
                      <?php echo get_sub_field('tovabbi_mezo_tartalma'); ?>
                    </li>
                  </ul>
                </li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 right">
        <div class="seller-card visible-lg visible-md">
          <div class="row">
            <div class="col-lg-4 col-md-4 image person-card-product-wrapper">
              <?php

 $posts = get_field('relation');

 if( $posts ): ?>

 <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
   <?php $image = get_field('munkatars_fenykepe');
   if (!empty($image)): ?>
       <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
   <?php endif; ?>
 <?php endforeach; ?>

 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
 <?php endif; ?>
               <h2 class="name">
                 <?php

$posts = get_field('relation');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php the_title(); ?>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
               </h2>
               <h3 class="position">
                 <?php

$posts = get_field('relation');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
      <?php if( get_post_type() == 'munkatarsak' ) {
          the_field('munkatars_titulusa');
      } ?>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
               </h3>
            </div>
            <div class="col-lg-8 col-md-8 text">
              <div class="info">
                <p>
                  Amennyiben további kérdése van a termékkel kapcsolatban, vagy ajánlatot szeretne kérni, kérjük keresse kollégánkat.
                </p>
              </div>
              <div class="contact">
                <div class="tel">
                  <a href="tel:<?php $posts = get_field('relation'); if( $posts ): ?><?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?><?php if( get_post_type() == 'munkatarsak' ) {the_field('munkatars_telefonszama');} ?><?php endforeach; ?><?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?><?php endif; ?>">
                    Tel:
                    <?php
                   $posts = get_field('relation');

                   if( $posts ): ?>

                       <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                         <?php if( get_post_type() == 'munkatarsak' ) {
                             the_field('munkatars_telefonszama');
                         } ?>
                       <?php endforeach; ?>

                       <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                  </a>
                </div>
                <div class="email">
                  <a href="mailto:<?php $posts = get_field('relation'); if( $posts ): ?><?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?><?php if( get_post_type() == 'munkatarsak' ) {the_field('munkatars_e-mail_cime'); } ?><?php endforeach; ?><?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?><?php endif; ?>">
                    E-mail:
                    <?php
                   $posts = get_field('relation');

                   if( $posts ): ?>

                       <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                         <?php if( get_post_type() == 'munkatarsak' ) {
                             the_field('munkatars_e-mail_cime');
                         } ?>
                       <?php endforeach; ?>

                       <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="sendmail">
                <button id="modaltriggerworker" class="button-main" data-toggle="modal" data-target="#munkatarsForm">
                  Üzenetet írok!
                </button>
              </div>
            </div>
          </div>
        </div>
        <?php
          // check if the repeater field has rows of data
          if( have_rows('termek_videok') ): ?>

        <div class="related-videos col-xs-12 col-sm-12">
          <h2 class="thin-title">
            Kapcsolódó videók
          </h2>
          <div class="videoslider">

            <div class="videos">
              <div class="cycle-slideshow cycle-slideshow-video"
                   data-cycle-swipe=true
                   data-cycle-swipe-fx=fade
                   data-cycle-fx="fade"
                   data-cycle-timeout=0
                   data-cycle-prev=#videoprev
                   data-cycle-next=#videonext
                   data-cycle-pause-on-hover="true"
                   data-cycle-youtube=true
                   data-cycle-slides="> div"
                   data-cycle-pager=".video-pager"
                   data-cycle-pager-template="<span><a href=#> {{slideNum}} </a></span>"
              >

                  <?php while ( have_rows('termek_videok') ) : the_row(); ?>


                        <?php $video = get_sub_field('termek_video_linkje'); ?>

                        <!-- div style="width: 100%;">

                              <iframe width="100%" height="315" src="

                                  <?php echo 'https://www.youtube.com/embed/';
                                  echo $video;


                              ?>" frameborder="0" allowfullscreen></iframe>

                        </div -->

                        <div class="single-embed-video">
                            <div class="single-embed-inside">
                              <div class="embed" data-yt-id="<?php echo $video ?>"></div>
                              <div class="image">
                                <div class="arrow-overlay overlay-left" id="videoprev">
                                  <div class="arrow">
                                    <svg version="1.1" id="product-slide-back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    	 viewBox="-274 382.9 46 76" style="enable-background:new -274 382.9 46 76;" xml:space="preserve">
                                      <g id="Symbols">
                                      	<g id="ARROW">
                                      		<path id="Shape" class="st0" d="M-231.2,458.2c-0.7,0-1.4-0.2-1.9-0.7l-39.7-35.2c-1-0.9-1-2.4,0-3.3l39.7-35.2
                                      			c1-0.9,2.7-0.9,3.7,0c1,0.9,1,2.4,0,3.3l-37.8,33.5l37.8,33.5c1,0.9,1,2.4,0,3.3C-229.9,457.9-230.6,458.2-231.2,458.2z"/>
                                      	</g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                                  <span class="icon-play"></span>
                                  <img src="
                                  <?php
                                  echo 'http://img.youtube.com/vi/';
                                  echo $video;
                                  echo '/hqdefault.jpg';
                                  ?>"
                                  class="img-responsive" />
                                <div class="video-overlay"></div>
                                <div class="arrow-overlay overlay-right" id="videonext">
                                  <div class="arrow">
                                    <svg version="1.1" id="product-slide-forward" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                            </div>
                              <!-- div class="title">
                                <?php
                                $videoid = $video;
                                $apikey = 'AIzaSyCK5c0t_KcgcpF2TTRRYbSvklXmgguCb1k';

                                $json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$videoid.'&key='.$apikey.'&part=snippet');
                                $ytdata = json_decode($json);

                                echo $ytdata->items[0]->snippet->title;
                                ?>
                              </div -->

                        </div>


                    <?php endwhile; ?>
              </div>
              <div class="video-pager" id="videopager"></div>
            </div>
            <script>
            var Functions = {
            stopAllPlayingVideo: function() {
              // stop all playing video - delete embed code
              $(".single-embed-video .embed").html("");
              // show thumbnails again
              $(".single-embed-video").removeClass("showvideo");
              $(".single-embed-video .image").css("display", "block");
            }
          }

          $("#videopager").on('click', function(ev) {
            $(".single-embed-video .embed").html("");
            // show thumbnails again
            $(".single-embed-inside").removeClass("showvideo");
            $(".single-embed-inside .image").css("display", "block");
            ev.preventDefault();
            });

            $(".single-embed-video .image").each(function() {
            	$(this).on('click', function(ev) {
            		var parent = $(this).closest(".single-embed-inside");
            		// some default values
            		var code = $(".embed", parent).data("yt-id");
            		var width = parent.outerWidth();
            		var height = parent.outerHeight()-$(".content", parent).outerHeight(true);

            		var html = '<iframe width="' + width + '" height="' + height + '" src="http://www.youtube.com/embed/' + code + '?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';

                Functions['stopAllPlayingVideo']();

            		$(".embed", parent).html(html);

            		parent.addClass("showvideo");

            		$(this).fadeOut(1200);

            		ev.preventDefault();
            	});
            });
            </script>
            <div class="clearfix"></div>
          </div>
        </div>
          <?php endif; ?>
      </div>
    </article>
    </div>
  </div>
</section>

<div class="modal fade" id="munkatarsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-xs-3 col-sm-3 modal-close-button" data-dismiss="modal" aria-label="Close">
            <svg style="width:36px;height:36px" viewBox="0 0 24 24">
                <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
          </div>
          <div class="col-xs-6 col-sm-6 modal-logo logo-space">
            <div class="logo"></div>
          </div>
          <div class="col-xs-3 col-sm-3"></div>
        </div>
      </div>
      <div class="modal-body">

        <?php
        $ids = get_field('relation', false, false);
         $args = array(
            'post_type' => 'munkatarsak',
            'posts_per_page' => '1',
            'post__in'			=> $ids,
            'orderby'        	=> 'post__in'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="row">
          <div class="col-sm-4 col-xs-4 image" style="text-align: center;">
           <?php $image = get_field('munkatars_fenykepe');
           if (!empty($image)): ?>
               <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
           <?php endif; ?>
            <h2 class="name">
            <?php the_title(); ?>
            </h2>
            <h3 class="position">
               <?php echo the_field('munkatars_titulusa'); ?>
            </h3>
          </div>
          <div class="col-sm-8 col-xs-8 text">
            <div class="info">
              <p>
                Ha további kérdései lennének az oldalon található termékekkel kapcsolatban, vagy árajánlatot szeretne kérni, kérjük hívja kollégánkat az alábbi elérhetőségeken, vagy küldjön üzenetet űrlapunk segítségével!
              </p>
            </div>
            <div class="contact">
              <div class="tel">
                <a href="tel:<?php echo the_field('munkatars_telefonszama'); ?>">
                  Tel:
                  <?php echo the_field('munkatars_telefonszama'); ?>
                </a>
              </div>
              <div class="email">
                <a href="mailto:<?php echo the_field('munkatars_e-mail_cime'); ?>">
                  E-mail:
                 <?php echo the_field('munkatars_e-mail_cime'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            <div class="sendform" id="sendform">
              <h2 class="title">
                Küldjön üzenetet!
              </h2>
              <?php echo do_shortcode('[contact-form-7 id="89" title="Érdeklődés" html_id="contact-form"]'); ?>
            </div>
            <div id="succesOnSend">
              <h2 class="thankstitle">
                Köszönjük üzenetét!
              </h2>
              <p>
                Köszünjük érdeklődését, munkatársunk hamarosan megkeresi Önt!
              </p>
            </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fullscreen-modal fade white-modal" id="mobileContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-xs-3 col-sm-3 modal-close-button" data-dismiss="modal" aria-label="Close">
            <svg style="width:36px;height:36px" viewBox="0 0 24 24">
                <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
          </div>
          <div class="col-xs-6 col-sm-6 modal-logo logo-space">
            <div class="logo"></div>
          </div>
          <div class="col-xs-3 col-sm-3"></div>
        </div>
      </div>
      <div class="modal-body">

        <?php
        $ids = get_field('relation', false, false);
         $args = array(
            'post_type' => 'munkatarsak',
            'posts_per_page' => '1',
            'post__in'			=> $ids,
            'orderby'        	=> 'post__in'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="row">
          <div class="col-sm-4 col-xs-4 image" style="text-align: center;">
           <?php $image = get_field('munkatars_fenykepe');
           if (!empty($image)): ?>
               <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
           <?php endif; ?>
            <h2 class="name">
            <?php the_title(); ?>
            </h2>
            <h3 class="position">
               <?php echo the_field('munkatars_titulusa'); ?>
            </h3>
          </div>
          <div class="col-sm-8 col-xs-8 text">
            <div class="info">
              <p>
                Ha további kérdései lennének az oldalon található termékekkel kapcsolatban, vagy árajánlatot szeretne kérni, kérjük hívja kollégánkat az alábbi elérhetőségeken, vagy küldjön üzenetet űrlapunk segítségével!
              </p>
            </div>
            <div class="contact">
              <div class="tel">
                <a href="tel:<?php echo the_field('munkatars_telefonszama'); ?>">
                  Tel:
                  <?php echo the_field('munkatars_telefonszama'); ?>
                </a>
              </div>
              <div class="email">
                <a href="mailto:<?php echo the_field('munkatars_e-mail_cime'); ?>">
                  E-mail:
                 <?php echo the_field('munkatars_e-mail_cime'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            <div class="sendform" id="sendformMobile">
              <h2 class="title">
                Küldjön üzenetet!
              </h2>
              <?php echo do_shortcode('[contact-form-7 id="89" title="Érdeklődés" html_id="contact-form"]'); ?>
            </div>
            <div id="succesOnSendMobile">
              <h2 class="thankstitle">
                Köszönjük üzenetét!
              </h2>
              <p>
                Köszünjük érdeklődését, munkatársunk hamarosan megkeresi Önt!
              </p>
            </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<script>
$("#fbsend").click(function() {
  FB.ui({
    method: 'share',
    href: "<?php the_permalink(); ?>"
  }, function(response) {});
});


</script>

<?php get_footer(); ?>

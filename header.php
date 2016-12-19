<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cégünk analitikai műszerek és mikroszkópok széles választékát, és teljes körű szervizszolgáltatást kínál a legkülönbözőbb felhasználási területek feladatainak magas szintű ellátására.">
    <meta name="keywords" content="ANALIZÁTOR (TX, AOX, TN, TS); ASZTALI NMR KÉSZÜLÉK; ATOMABSZORPCIÓS SPEKTROMÉTER (AAS); ATOMFLUORESZCENCIÁS (AS, SE MÉRŐ); ATOMFLUORESZCENCIÁS HG MÉRŐ; AUTOMATA FOTOMETRIÁS ANALIZÁTOR; CHNSO ELEMANALIZÁTOR; DIGITÁLIS FOTÓ FELTÉT; FÉMMIKROSZKÓP, METALLOGRÁFIAI MIKROSZKÓP; FÉNYMIKROSZKÓP; FIA ANALIZÁTOR; FLUORESZCENS MIKROSZKÓP; FOSZFOR ÉS NITROGÉN MEGHATÁROZÓ; FT-IR SPEKTROMÉTER ÉS KIEGÉSZÍTŐK; FT-NMR; GÁZKROMATOGRÁF (GC); GC OSZLOP (GC KOLONNA); HPLC OSZLOP (HPLC KOLONNA); HPLC, FOLYADÉKKROMATOGRÁFIÁS RENDSZER; ICP-MS KÉSZÜLÉK, INDUKTÍV CSATOLÁSÚ PLAZMA TÖMEGSPEKTROMÉTER; ICP-OES SPEKTROMÉTER; IONCSAPDA ORBITRAP LC/MS; IR MIKROSZKÓP (INFRAVÖRÖS MIKROSZKÓP); KAPILLÁRIS ELEKTROFORÉZIS KÉSZÜLÉK (CE); KÉPELEMZŐ SZOFTVER; KOMPAKT MIKROSZKÓP; KONFOKÁLIS LÉZERPÁSZTÁZÓ MIKROSZKÓP; KVADRUPOL ORBITRAP LC/MS; KVADRUPOL, LC/MS; KVADRUPOL, TRIPLA KVADRUPOL ÉS IONCSAPDÁS GC/MS; KVADRUPOL, TRIPLA KVADRUPOL ÉS IONCSAPDÁS LC/MS; LUMINESZCENS MIKROSZKÓP; MAKROSZKÓP; MALDI TÖMEGSPEKTROMÉTER; MÉRŐMIKROSZKÓP; MÉRŐSZOFTVEREK; MIKROSZKÓP; NIR SPEKTROFOTOMÉTER; NMR; OPTIKAI ILLESZTŐ ADAPTER; OZMOMÉTER; PH/ION-MÉRŐ; POLARIZÁCIÓS MIKROSZKÓP; PREPARATÍV FOLYADÉKKROMATOGRÁF (HPLC); PREPARATÍV MOZGÓÁGYAS KROMATOGRÁF; PROFESSZIONÁLIS MIKROSZKÓPOS KAMERA; RAMAN MIKROSZKÓP; RAMAN SPEKTROFOTOMÉTER; SZÍNMÉRŐ; SZTEREO MIKROSZKÓP; TABLETTA KEMÉNYSÉG VIZSGÁLÓ; TABLETTA KIOLDÓDÁS VIZSGÁLÓ; TABLETTA-, KÚP SZÉTESÉS VIZSGÁLÓ; TABLETTÁZÓGÉP VEZÉRLÉS; UHPLC KÉSZÜLÉK; UV-VIS SPEKTROFOTOMÉTER">
    <meta name="author" content="Unicam Magyarország Kft.">
    <meta property="og:url"                content="<?php echo get_permalink( $post->ID ); ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?php the_title(); ?>" />
    <meta property="og:description"        content="<?php the_content(); ?>" />
    <meta property="og:image"              content="<?php the_post_thumbnail_url(); ?> " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', 'true', 'right') ?> <?php bloginfo('name') ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Unicam"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-310x310.png" />


    <?php wp_head(); ?>

    <?php if ( is_singular( 'esemenyek' ) ) {
    echo '<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>';
    } ?>
    <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body class="cbp-spmenu-push <?php body_class(); ?>">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3BHRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1157215624324959',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  <!-- Modal -->


  <div class="modal fade" id="munkatarsFormRolunk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
          <div class="row">
            <div class="col-sm-4 col-xs-4 image">
              <?php $image = get_field('munkatars_fenykepe');
              if (!empty($image)): ?>
                  <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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
            <div class="col-sm-8 col-xs-8 text">
              <div class="info">
                <p>
                  Ha további kérdései lennének az oldalon található termékekkel kapcsolatban, vagy árajánlatot szeretne kérni, kérjük hívja kollégánkat az alábbi elérhetőségeken, vagy küldjön üzenetet űrlapunk segítségével!
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
            </div>
            <div class="clearfix"></div>
              <div class="sendform">
                <h2 class="title">
                  Küldjön üzenetet!
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="89" title="Érdeklődés"]'); ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="isoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="row">
            <div class="col-xs-3 col-sm-3 modal-close-button" data-dismiss="modal" aria-label="Close">
              <svg style="width:36px;height:36px" viewBox="0 0 24 24">
                  <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <img src="<?php bloginfo('template_directory'); ?>/img/ISO9001_hu.png" class="img-responsive" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="isoModalEn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="row">
            <div class="col-xs-3 col-sm-3 modal-close-button" data-dismiss="modal" aria-label="Close">
              <svg style="width:36px;height:36px" viewBox="0 0 24 24">
                  <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <img src="<?php bloginfo('template_directory'); ?>/img/ISO9001_en.png" class="img-responsive" />
        </div>
      </div>
    </div>
  </div>
<div class="main-wrapper">
<header class="header container-fluid">
    <div class="row visible-lg visible-md desktop-header">
        <div class="container table-view">
            <div class="menu-row">
                <div class="col-lg-3 col-md-3 logo-space">
                    <a href="<?php echo site_url(); ?>">
                        <div class="logo"></div>
                    </a>
                </div>
                <div class="col-lg-9 col-md-9 menu-desktop visible-lg visible-md">
                    <!-- ul class="list-unstyled menu-list">
                        <li><a href="#">Termekek</a></li>
                        <li><a href="#">Gyartok</a></li>
                        <li><a href="#">Szerviz</a></li>
                        <li><a href="#">Rolunk</a></li>
                        <li>
                            <a href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#FF1A24" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                </svg>
                            </a>
                        </li>
                    </ul -->
                    <?php wp_nav_menu(array('theme_location' => 'topmenu', 'menu_class' => 'menu-list list-unstyled', 'container' => false)); ?>
                </div>
            </div>
        </div>
        <div class="breadcrumb dark">
          <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div class="search-open-desktop hidden-xs hidden-sm">
  <div class="search-bar container">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  		<input type="search" class="search-field searchform" placeholder="Keresés…" value="" name="s" title="Keresés" />
       <input type="hidden" name="post_type" value="termekeink">
  	  <input type="submit" class="search-submit" value="Keresés" />
    </form>
  </div>
</div>
          </div>
        </div>
    </div>
    <div class="row visible-sm visible-xs mobile-header">
      <div class="menu-trigger col-sm-3 col-xs-3 icon menu-icon pull-left">
        <svg style="width:36px;height:36px" viewBox="0 0 24 24">
            <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
        </svg>
      </div>
      <div class="col-sm-6 col-xs-6 logo-space">
        <a href="<?php echo site_url(); ?>">
            <div class="logo"></div>
        </a>
      </div>
      <div class="col-sm-3 col-xs-3 icon search-icon search-icon-mobile pull-right">
        <svg style="width:36px;height:36px" viewBox="0 0 24 24">
            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
        </svg>
      </div>
      <div class="mobile-search-open dark">


        <form role="search" method="get" class="mobile-search-form" action="<?php echo home_url( '/' ); ?>">
      		<input type="search" class="mobile-search-input" placeholder="Keresés…" value="" name="s" title="Keresés" />
           <input type="hidden" name="post_type" value="termekeink">
      	  <input type="submit" class="mobile-search-send" value="Keresés" />
        </form>
      </div>
    </div>
</header>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
	<?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'menu_class' => 'accordion-list list-unstyled', 'container' => false)); ?>
</nav>
<div class="menu-dark-overlay"></div>
<div class="logo-print">
  <img src="<?php bloginfo('template_url'); ?>/img/unicam_logo.png" />
  <div class="address">
    <span>
      <b>Címünk:</b> Budapest, Kőszeg u. 27
    </span>
    <span>
      <b>Tel:</b> 1-2215536
    </span>
    <span>
      <b>Fax:</b> 1-2215543
    </span>
    <span>
      <b>E-mail:</b> unicam@unicam.hu
    </span>
  </div>
</div>

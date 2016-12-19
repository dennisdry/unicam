<?php get_header(); ?>

<section class="news-page">
  <div class="container">
    <article class="row">
        <div class="news-content">
          <div class="col-lg-8 col-md-8 left">
            <header>
              <h2 class="title">
                <?php the_title(); ?>
              </h2>
            </header>
            <div class="news-body">
              <div class="content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <aside class="col-lg-4 col-md-4 hidden-sm hidden-xs sidebar-container">
            <?php get_sidebar(); ?>
          </aside>
        </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>

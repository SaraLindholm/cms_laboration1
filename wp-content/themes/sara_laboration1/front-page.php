<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php

          while (have_posts()) { ?>
            <div class="hero">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="hero-image">
              <div class="text"><?php the_post(); ?>
                <div>
                  <h1><?php the_title(); ?></h1>
                  <div><?php the_content(); ?></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>

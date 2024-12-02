<?php
include 'helper.php';
get_header();
?>

<?php wp_body_open() ?>


<main>
  <section>
    <div class="container">
      <?php

      while (have_posts()) { ?>
        <div class="hero" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="hero-image">>
          <div class="text"><?php the_post(); ?>
            <div>
              <h1><?php the_title(); ?></h1>
              <div><?php the_content(); ?></div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
</main>

<?php get_footer() ?>

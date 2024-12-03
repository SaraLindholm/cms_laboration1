<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <?php
      while (have_posts()) {
        the_post(); ?>
        <div class="hero">

          <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
          <div class="text">
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

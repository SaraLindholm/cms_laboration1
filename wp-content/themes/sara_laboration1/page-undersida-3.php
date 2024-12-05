<!-- används på undersida-undersida 4 -->
<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
    <h1>undersida333333</h1>
      <div class="row">
        <div id="primary" class="col-xs-12 col-sm-8 col-md-6">
          <?php
          while (have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

        </div>
        <!--visar bild om det finns -->
        <div class="col-xs-12 col-sm-4 col-md-6">
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="bild-text">


            <!-- <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'style' => 'width:auto; height:auto;']); ?> -->
          <?php } ?>
        <?php } ?>

        </div>
      </div>
    </div>
  </section>
</main>





<?php get_footer() ?>

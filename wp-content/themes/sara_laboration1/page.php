<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <?php
          while (have_posts()) { ?>
            <h1><?php the_title(); ?></h1>






          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>






<p>page-mall</p>
<?php
while (have_posts()) {
  the_post();
  the_title();
  the_content();
  the_post_thumbnail();
} ?>

<?php get_footer() ?>

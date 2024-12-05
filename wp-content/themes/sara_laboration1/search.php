<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Du har sökt på: '<?php the_title(); ?>'</h1> <?php
                                                            get_search_query();

                                                            while (have_posts()) { ?>
            <?php get_search_query(); ?>
            <article>
              <?php the_post(); ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <p><?php the_content(); ?>
              </p>
            </article>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>

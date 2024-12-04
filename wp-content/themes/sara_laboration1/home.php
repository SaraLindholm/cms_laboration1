<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php the_title(); ?></h1>
          <?php

          while (have_posts()) { ?>
            <article>
              <?php the_post(); ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <ul class="meta">
                <li>
                  <i class="fa fa-calendar"></i><?php the_date() ?>
                </li>
                <li>
                  <i class="fa fa-user"></i>
                  <?php echo get_the_author_posts_link(); ?>
                </li>
                <li>
                  <i class="fa fa-tag"></i><?php
                                            // Hämta kategorier för inlägget
                                            $categories = get_the_category();

                                            if (! empty($categories)) {
                                              foreach ($categories as $category) {
                                                // Skapa en länk till kategorisidan
                                                echo '<a href="' . esc_url(home_url('/kategorier/?kategori=' . $category->slug)) . '" rel="category tag">' . esc_html($category->name) . '</a> ';
                                              }
                                            }
                                            ?>
                </li>
              </ul>
              <p><?php the_excerpt(); ?>
              </p>
              <?php the_posts_pagination(); ?>
            </article>
            <?php get_the_posts_pagination(); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>

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
              <h2 class="title"><?php the_title(); ?></h2>
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
                                                // Skapa en länk för varje kategori
                                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">' . esc_html($category->name) . '</a>, ';
                                              }
                                            }
                                            ?>
                </li>
              </ul>
              <p><?php the_content(); ?>
              </p>
            </article>






            </article>
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

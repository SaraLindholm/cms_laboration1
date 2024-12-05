<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php single_post_title(); ?></h1>
          <?php
          //starta loopen
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <article>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <ul class="meta">
                  <li>
                    <i class="fa fa-calendar"></i><?php the_date(); ?>
                  </li>
                  <li>
                    <i class="fa fa-user"></i>
                    <?php echo get_the_author_posts_link(); ?>
                  </li>
                  <li>
                    <i class="fa fa-tag"></i>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                      foreach ($categories as $category) {
                        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">' . esc_html($category->name) . '</a> ';
                      }
                    }
                    ?>
                  </li>
                </ul>
                <p><?php the_excerpt(); ?></p>
              </article>
            <?php endwhile; ?>
            <nav class="pagination" aria-label="Sidonumrering för inlägg">
              <!-- Lägg till klasser för pagineringen här -->
              <?php the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '<span class="page-numbers">Föregående</span>',
                'next_text' =>  '<span class="page-numbers">Nästa</span>',
              )); ?>
            </nav>

          <?php else : ?>
            <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_sidebar('footer'); ?>
</main>
<?php get_footer(); ?>

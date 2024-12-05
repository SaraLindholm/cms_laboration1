<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Du har sökt på: '<?php echo esc_html(get_search_query()); ?>'</h1>

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
            <p>Inga resultat hittades för din sökning.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

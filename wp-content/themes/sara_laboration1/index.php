<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>indexsidan</h1>
          <?php
          // Starta loopen
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <article>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_content(); ?></p>
              </article>
            <?php endwhile; ?>
          <?php else : ?>
            <p>Inga inlägg hittades.</p>
          <?php endif; ?>



        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>

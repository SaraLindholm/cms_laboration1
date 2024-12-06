<!-- används på undersida-undersida 4 -->
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
          while (have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
          <?php } ?>

        </div>

        <!-- TODO- gör om html till php -->
        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul id="menu-sidomeny" class="side-menu">
            <li class="current-menu-item"><a href="<?php echo get_permalink(get_page_by_path('undersida')); ?>">Undersida</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('undersida-2')); ?>">Undersida 2</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('undersida-3')); ?>">Undersida 3</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('undersida-4')); ?>">Undersida 4</a></li>
          </ul>
        </aside>
      </div>


    </div>
    </div>
  </section>
</main>





<?php get_footer() ?>

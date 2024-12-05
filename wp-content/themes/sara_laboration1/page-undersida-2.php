<!-- används på undersida-undersida 4 -->
<?php
include 'helper.php';
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
          <?php
          while (have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

            <!--visar bild om det finns -->
            <div class="col-xs-12 col-sm-4 col-md-6">
              <?php if (has_post_thumbnail()) { ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="bild-text">


                <!-- <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'style' => 'width:auto; height:auto;']); ?> -->
              <?php } ?>
            <?php } ?>

            </div>
        </div>

        <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
          <ul id="menu-sidomeny" class="side-menu">
            <li><a href="undersida.html">Undersida</a></li>
            <li class="current-menu-item"><a href="undersida-2.html" aria-current="page">Undersida 2</a></li>
            <li><a href="undersida-3.html">Undersida 3</a></li>
            <li><a href="undersida-4.html">Undersida 4</a></li>
          </ul>
        </aside>


      </div>
    </div>
  </section>
</main>





<?php get_footer() ?>

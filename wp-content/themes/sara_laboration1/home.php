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
                    <i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
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
            <!-- TODO lägg till klasser för knapparna -->
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

        <aside id="secondary" class="col-xs-12 col-md-3">

          <div id="sidebar">
            <ul>
              <li id="search-2" class="widget widget_search">

                <?php dynamic_sidebar('aside-sok'); ?>
                <!-- <form class="searchform">
                  <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                  </div>
                </form> -->
              </li>
            </ul>
            <ul role="navigation">
              <li id="pages-2" class="widget widget_pages">
                <h2 class="widgettitle">Sidor</h2>

                <ul>
                  <li class="page_item page-item-11 current_page_item"><a href="blogg.html" aria-current="page">Blogg</a></li>
                  <li class="page_item page-item-70"><a href="exempelsida.html">Exempelsida</a></li>
                  <li class="page_item page-item-54"><a href="kontakt.html">Kontakt</a></li>
                  <li class="page_item page-item-46 page_item_has_children"><a href="om-mig.html">Om mig</a>
                    <ul class='children'>
                      <li class="page_item page-item-51"><a href="#">Intressen</a></li>
                      <li class="page_item page-item-44 page_item_has_children"><a href="#">Portfolio</a>
                        <ul class='children'>
                          <li class="page_item page-item-48"><a href="#projekt-1/">Projekt 1</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="page_item page-item-9"><a href="index.html">Startsida</a></li>
                </ul>

              </li>
              <li id="archives-2" class="widget widget_archive">
                <h2 class="widgettitle">Arkiv</h2>

                <ul>
                  <li><a href='#'>november 2024</a></li>
                  <li><a href='#'>oktober 2024</a></li>
                  <li><a href='#'>september 2024</a></li>
                </ul>

              </li>
              <li id="categories-2" class="widget widget_categories">
                <h2 class="widgettitle">Kategorier</h2>

                <ul>
                  <li class="cat-item cat-item-3"><a href="kategori.html">Kategori 1</a> (2)
                  </li>
                  <li class="cat-item cat-item-4"><a href="kategori.html">Kategori 2</a> (3)
                  </li>
                </ul>

              </li>
            </ul>
          </div>
        </aside>
        <!-- <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <?php dynamic_sidebar('sidebar-blogg'); ?>

          </div>
        </aside> -->
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

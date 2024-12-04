<?php
include 'helper.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sara_laboration1</title>
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>
  <div id="wrap">
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <a class="logo" href="<?php echo get_permalink(get_page_by_path('home')); ?>">Labb 1</a>
          </div>
          <div class="col-sm-6 hidden-xs">
            <form class="searchform">
              <div><?php get_search_form(); ?>
              </div>
            </form>
          </div>
          <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
              <i class="fa fa-search"></i>
              <i class="fa fa-bars menu-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

        <div class="container">
          <div class="row">
            <!-- för smala skärmar? -->
            <div class="col-xs-8 col-sm-6"></div>
            <div class="col-sm-6 hidden-xs"></div>
          </div>
        </div>
    </header>
    <nav id="nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul id="menu-huvudmeny" class="menu">
              <?php wp_nav_menu(); ?>;
              <li class="current-meny-item"></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

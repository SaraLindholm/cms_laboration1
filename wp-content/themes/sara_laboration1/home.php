<?php
include 'helper.php';
get_header();
?>

<?php wp_body_open() ?>


<p>Home-mall</p>
<?php
while (have_posts()) {
  the_post();
  the_title();
  the_content();
  the_post_thumbnail();
} ?>

<?php get_footer() ?>

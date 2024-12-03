<?php include 'helper.php';
get_header();
?>
<p>Här finns huvudmenyn?</p>
<?php


while (have_posts()) {
  the_post();
  the_title();
  the_content();
  the_post_thumbnail();
}

?>

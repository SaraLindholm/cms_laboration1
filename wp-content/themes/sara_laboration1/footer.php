<?php
include 'helper.php'; ?>

<footer id="footer">
  <div class="container">
    <div class="row top">
      <?php dynamic_sidebar('footer-about'); ?>
      <?php dynamic_sidebar('footer-contact'); ?>
      <?php dynamic_sidebar('footer-social'); ?>
    </div>
    <div class="row bottom">
      <div class="col-xs-12">
        <p>Copyright &copy; Grupp X, <?php echo date('Y') ?></p>
      </div>
    </div>
  </div>
</footer>
</div>
</body>

</html>

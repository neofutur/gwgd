    <div id="footer">
      <p style="float: right">
        &copy; 2009 <a href="http://www.gasteroprod.com/">Nicolas HOIZEY</a>
      </p>
      <p>
        <a href="<?php echo $casimir->base_url; ?>">Home</a> |
        <a href="<?php echo $casimir->base_url; ?>tools.php">Tools</a> |
        <a href="<?php echo $casimir->base_url; ?>stats.php#lastday">Stats</a> |
        <a href="https://github.com/neofutur/gwgd">About gwgd shortener</a>
      </p>
    </div>
    <?php
    if (file_exists('user/footer.php')) {
      require 'user/footer.php';
    }
    ?>
  </div>
</body>

</html>

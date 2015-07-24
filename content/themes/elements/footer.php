  </main>

  <!-- Footer -->
  <?php
  $phone = get_field( 'footer_phone', 'option' );
  $fax = get_field( 'footer_fax', 'option' );
  $email = get_field( 'footer_email', 'option' );
  $office = get_field( 'footer_office', 'option' );
  $warehouse = get_field( 'footer_warehouse', 'option' );
  ?>
  <footer id="footer" class="row">
    <div class="s-4 m-2 columns">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-jtg.png">
      <p><?php echo $phone; ?></p>
      <p><?php echo $fax; ?></p>
      <p><?php echo $email; ?></p>
    </div>

    <div class="s-4 m-1 columns">
      <h3>Office</h3>
      <p><?php echo $office; ?></p>
    </div>

    <div class="s-4 m-1 columns">
      <h3>Warehouse</h3>
      <p><?php echo $warehouse; ?></p>
    </div>
  </footer>

  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>

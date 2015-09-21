  </main>

  <section class="form">
    <div class="section-body">
      <?php echo do_shortcode('[contact-form-7 id="123" title="Contact"]'); ?>
    </div>
  </section>

  <!-- Footer -->
  <?php
  $logo = get_field( 'footer_logo', 'option' );
  $phone = get_field( 'footer_phone', 'option' );
  $fax = get_field( 'footer_fax', 'option' );
  $email = get_field( 'footer_email', 'option' );
  $office = get_field( 'footer_office', 'option' );
  $warehouse = get_field( 'footer_warehouse', 'option' );
  ?>
  <footer id="footer">
    <img src="<?php echo $logo['sizes']['medium']; ?>">
    <p>&copy; The Voice and The Voice Kids are a registered trademark by Talpa content B.V., and licensed by Talpa Global B.V</p>
  </footer>

  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>

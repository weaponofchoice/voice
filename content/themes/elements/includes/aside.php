<aside>

  <?php
  $categories = get_categories();
  ?>
  <nav>
    <p>Categories:</p>
    <?php foreach($categories as $cat): ?>
      <li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><strong><?php echo $cat->name; ?></strong></a></li>
    <?php endforeach; ?>
  </nav>

  <?php
  $args = array(
    'posts_per_page' => 3
  );

  $query = new WP_Query($args);
  ?>
  <ul class="posts posts-previews">
    <p>Recent posts:</p>

    <?php if( $query->have_posts() ): ?>
      <?php while( $query->have_posts() ): $query->the_post(); ?>

        <?php $category = get_the_category(); ?>
        <li>
          <p><strong><?php echo $category[0]->cat_name; ?>:</strong> <?php the_title(); ?></p>
          <time><img src="<?php echo get_template_directory_uri(); ?>/img/icon-time.svg" /><p><?php echo get_the_date(); ?></p></time>
        </li>

      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</aside>
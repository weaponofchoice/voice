<aside>

  <?php
  $categories = get_categories();
  ?>
  <p>Categories:</p>
  <nav>
    <?php foreach($categories as $cat): ?>
      <li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a></li>
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
          <p><?php echo get_the_date(); ?></p>
        </li>

      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</aside>
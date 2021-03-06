<?php
// Content (variables)
$title = get_the_title();
$category = get_the_category( $post->ID );
$category_link = get_category_link( $category[0]->term_id );
$content = wpautop( substr(get_the_content(), 0, 200) );
$excerpt = wpautop(get_the_excerpt());
$permalink = get_the_permalink();
$date = get_the_date();
$date_day = get_the_date('j');
$date_month = get_the_date('F');
$date_year = get_the_date('Y');
$thumb = get_the_post_thumbnail( $post->ID, 'medium' );
?>

<article>
  <div class="post-time">
    <time datetime="<?php echo $date; ?>">
      <div>
        <p><?php echo $date_day; ?></p>
        <p><?php echo substr($date_month, 0, 3); ?></p>
      </div>
    </time>

    <p><?php echo $date_year; ?></p>
  </div>

  <div class="post-content">
    <figure><?php echo $thumb; ?></figure>

    <p>Category: <a href="<?php echo $category_link; ?>" class="post-category"><strong><?php echo $category[0]->cat_name; ?></strong></a></p>
    <a class="post-title" href="<?php echo $permalink; ?>"><h2><?php echo $title; ?></h2></a>
    <?php echo $excerpt; ?>
    <a class="button button-small" href="<?php echo $permalink; ?>">Read more</a>
  </div>
</article>
<?php
// Content (variables)
$title = get_the_title();
$category = get_the_category( $post->ID );
$category_link = get_category_link( $category[0]->term_id );
$content = wpautop( get_the_content() );
$permalink = get_the_permalink();
$date = get_the_date();
$date_day = get_the_modified_date('j');
$date_month = get_the_modified_date('F');
$date_year = get_the_modified_date('Y');
$thumb = get_the_post_thumbnail( $post->ID, 'medium' );
?>

<article>
  <time datetime="<?php echo $date; ?>">
    <div>
      <p><?php echo $date_day; ?></p>
      <p><?php echo $date_month; ?></p>
    </div>
    <p><?php echo $date_year; ?></p>
  </time>

  <div class="post-content">
    <?php echo $thumb; ?>

    <p>Category: <a href="<?php echo $category_link; ?>" class="post-category"><?php echo $category[0]->cat_name; ?></a></p>
    <a class="post-title" href="<?php echo $permalink; ?>"><h2><?php echo $title; ?></h2></a>

    <a class="button" href="<?php echo $permalink; ?>">Read more</a>
  </div>
</article>
<?php
get_header();

if( have_posts() ):
  while( have_posts() ): the_post();

    // Content (variables)
    $title = get_the_title();
    $subtitle = get_field( 'post_subtitle' );
    $date = get_the_date();
    $date_day = get_the_modified_date('j');
    $date_month = get_the_modified_date('F');
    $date_year = get_the_modified_date('Y');
    $categories = get_categories();
    ?>

    <article>
      <header>
        <time datetime="<?php echo $date; ?>">
          <div>
            <p><?php echo $date_day; ?></p>
            <p><?php echo $date_month; ?></p>
          </div>
          <p><?php echo $date_year; ?></p>
        </time>

        <p>Back to <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">News Overview</a></p>

        <h1 class="is-bold"><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
      </header>

      <?php get_elements(); ?>
    </article>

    <?php
  endwhile;
endif;

get_footer(); ?>
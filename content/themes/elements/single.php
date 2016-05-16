<?php
get_header();

if( have_posts() ):
  while( have_posts() ): the_post();

    // Content (variables)
    $title = get_the_title();
    $content = wpautop( get_the_content() );
    $date = get_the_date();
    $date_day = get_the_date('j');
    $date_month = get_the_date('F');
    $date_year = get_the_date('Y');
    $categories = get_categories();
    ?>

    <article>
      <header>
        <div class="post-time">
          <time datetime="<?php echo $date; ?>">
            <div>
              <p><?php echo $date_day; ?></p>
              <p><?php echo substr($date_month, 0, 3); ?></p>
            </div>
          </time>
          
          <p><?php echo $date_year; ?></p>
        </div>

        <div class="post-title">
          <p>Back to <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">News Overview</a></p>

          <h1 class="is-bold"><?php echo $title; ?></h1>
        </div>
      </header>

      <section class="text">
        <div class="section-body">
          <?php echo $content; ?>
        </div>
      </section>

      <?php get_elements(); ?>
    </article>

    <?php
  endwhile;
endif;

get_footer(); ?>
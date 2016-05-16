<?php
function elements_posts_start(){
  $page_ID = get_option('page_for_posts');
  $page_title = get_the_title( $page_ID );

  echo '<section class="posts">';
}

function elements_posts_end(){
  echo '</section>';
}
?>
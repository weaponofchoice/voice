<?php
// Content (variables)
$video = get_sub_field( 'video_b_video' );

// Classes
$class_section = 'video';
$class_body = 'section-body';

// Build section
echo '<section class="' . $class_section . '">';

  // Body
  echo '<div class="' . $class_body . '">';

    /*
     * Body content
     * This is the flexible part, that is different for each element
     */
    echo '<div class="video-container">';

      echo $video;

    echo '</div>';

  echo '</div>';

echo '</section>';
?>
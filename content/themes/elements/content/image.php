<?php
// Content (variables)
$image = get_sub_field( 'image_b_image' );

// Classes
$class_section = 'image';
$class_body = 'section-body';

// Build section
echo '<section class="' . $class_section . '">';

  // Body
  echo '<div class="' . $class_body . '">';

    /*
     * Body content
     * This is the flexible part, that is different for each element
     */
    echo '<figure>';

      echo '<img src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">';

      if( is_single() ){
        echo '<div class="fullscreen"><img src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></div>';
      }

    echo '</figure>';

  echo '</div>';

echo '</section>';
?>
<?php
// Options (variables)
$o_menu = get_sub_field( 'gridSec_o_menu' );

$o_h_pos = get_sub_field( 'gridSec_o_h_pos' );
$o_h_align = get_sub_field( 'gridSec_o_h_align' );
$o_b_layout = get_sub_field( 'gridSec_o_b_layout' );

// Content (variables)
$h_title = get_sub_field( 'gridSec_h_title' );
$h_text = preg_replace( '/<p>/', '<p class="s-4 columns is-aligned-' . $o_h_align . '">', get_sub_field( 'gridSec_h_text' ) );
$b_item = get_sub_field( 'gridSec_b_item' );

// Output
echo '<section class="grid grid-sec' . (( $o_menu == true ) ? ' has-anchor" id="anchor-' . $i_anchor : "") . '">';

  // Grid header
  if( $h_title || $h_text ):
    echo
    '<div class="section-header row is-pos-' . $o_h_pos . '">
      <h2 class="s-4 columns is-aligned-center">' . $h_title . '</h2>
      ' . $h_text . '
    </div>';
  endif;

  // Grid content
  $item_count = count(get_sub_field('gridSec_b_item'));

  if( have_rows('gridSec_b_item') ):
    echo '<div class="section-body">';

    if( $o_b_layout == 'masonry' ){
      echo '<ul class="s-grid-1 l-grid-3 row isotope isotope-masonry item-count-' . $item_count . '">';
    } else {
      echo '<ul class="item-count-' . $item_count . '">';
    }

        while( have_rows('gridSec_b_item') ): the_row();
          $thumb = get_sub_field( 'gridSec_b_item_thumb' );
          $image = get_sub_field( 'gridSec_b_item_image' );
          $title = get_sub_field( 'gridSec_b_item_title' );
          $text = preg_replace( '/<p>/', '<p>', get_sub_field( 'gridSec_b_item_text' ) );

          echo
          '<li>
            <a class="trigger-modal">
              <div class="flex-enabled"><img src="' . $thumb['sizes']['medium'] . '" width="' . $thumb['width'] . '" height="' . $thumb['height'] . '"></div>
              <img class="flex-disabled" src="' . $thumb['sizes']['medium'] . '" width="' . $thumb['width'] . '" height="' . $thumb['height'] . '">
              <div>
                <h3>' . $title . '</h3>
                ' . $text . '
              </div>
              <p class="read-more">read more</p>
            </a>

            <div class="modal">
              <div class="modal-close"><i></i></div>
              <div class="modal-image">
                <img src="' . $image['sizes']['medium'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">
              </div>

              <div class="modal-info">
                <h3>' . $title . '</h3>
                ' . $text . '
              </div>
            </div>
          </li>';
        endwhile;

      echo '</ul>';

    echo '</div>';

    echo '<div class="overlay"></div>';
  endif;

echo '</section>';
?>

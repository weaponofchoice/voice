<?php
global $detect;

// Content (variables)
$id = "parallax-" . $i_par;
$b_image = get_sub_field( 'parallax_b_image' );
$c_title = get_sub_field( 'parallax_c_title' );

//Output
if(! $detect->isMobile() ):

  echo
  '<section class="parallax has-no-pad-sides has-no-pad-top is-fullwidth" id="' . $id . '">
    <div class="section-banner">
      <div class="bcg retina" style="background-image: url(' . $b_image['sizes']['large'] . ')"></div>

      <div class="banner-title"><h1 class="is-white">' . $c_title . '</h1></div>
    </div>';

    echo
    '<div class="section-body">
      <ul class="s-grid-1 l-grid-3">';
      if( have_rows('parallax_c_data_items') ):
        while( have_rows('parallax_c_data_items') ): the_row();
          $icon = get_sub_field( 'item_icon' );
          $title = get_sub_field( 'item_title' );

          echo
          '<li>
            <img src="' . $icon['sizes']['medium'] . '">
            <p>' . $title . '</p>
          </li>';
        endwhile;
      endif;
      echo
      '</ul>
    </div>
  </section>';

else:

  echo
  '<section class="parallax has-no-pad is-fullwidth" id="' . $id . '">
    <div class="section-banner">
      <img src="' . $b_image['sizes']['large'] . '">
      <h1 class="is-white">' . $c_title . '</h1>
    </div>';

    echo
    '<div class="section-body">
      <ul class="s-grid-1 m-grid-3">';
      if( have_rows('parallax_c_data_items') ):
        while( have_rows('parallax_c_data_items') ): the_row();
          $icon = get_sub_field( 'item_icon' );
          $title = get_sub_field( 'item_title' );

          echo
          '<li>
            <img src="' . $icon['sizes']['medium'] . '">
            <p>' . $title . '</p>
          </li>';
        endwhile;
      endif;
      echo
      '</ul>
    </div>
  </section>';

endif;
?>

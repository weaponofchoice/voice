<?php
/*
 * This function gets all the custom fields from the backend
 *
 * Important: wpe-acf.json must be imported in order to use this function.
 */
function get_elements(){
  // Loop into ACF groups
  if( have_rows('page') ): $i_anchor = 1; $i_par = 0;
    while( have_rows('page') ): the_row();

      // Hero section is placed before main

      if( get_row_layout() == 'text' ):
        include( get_template_directory() . '/content/text.php'); $i_anchor++;
      elseif( get_row_layout() == 'grid_secondary' ):
        include(get_template_directory() . '/content/gridSec.php'); $i_anchor++;
      elseif( get_row_layout() == 'parallax' ): $i_par++;
        include(get_template_directory() . '/content/parallax.php');
      endif;

    endwhile;
  endif;
}
?>
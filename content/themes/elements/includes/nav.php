<nav>
  <ul>
    <?php
    $homepage_ID = get_option( 'page_on_front' );

    if( have_posts() ):
      if( have_rows('elements', $homepage_ID) ): $i_anchor = 1;
        while( have_rows('elements', $homepage_ID) ): the_row();

          if( get_row_layout() == 'text' ):
            $text_menu = get_sub_field( 'text_o_menu' );
            $text_menu_name = get_sub_field( 'text_o_menu_name' );
            ( !is_front_page() ) ? $text_link = home_url() . '/#anchor-' . $i_anchor : $text_link = home_url() . '/#anchor-' . $i_anchor;
            if( $text_menu == true ):
              echo '<li><a href="' . $text_link . '"><h3 class="is-bold">' . $text_menu_name . '</h3></a></li>';
            endif;
            $i_anchor++;

          elseif( get_row_layout() == 'grid_secondary' ):
            $gridSec_menu = get_sub_field( 'gridSec_o_menu' );
            $gridSec_menu_name = get_sub_field( 'gridSec_o_menu_name' );
            ( !is_front_page() ) ? $gridSec_link = home_url() . '/#anchor-' . $i_anchor : $gridSec_link = home_url() . '/#anchor-' . $i_anchor;
            if( $gridSec_menu == true ):
              echo '<li><a href="' . $gridSec_link . '"><h3 class="is-bold">' . $gridSec_menu_name . '</h3></a></li>';
            endif;
            $i_anchor++;
          endif;

        endwhile;
      endif;
    endif;
    ?>

    <li><a href="<?php echo home_url(); ?>/#footer"><h3 class="is-bold">Contact</h3></a></li>
    <li><a href="<?php echo home_url(); ?>/news"><h3 class="is-bold">News</h3></a></li>
  </ul>
</nav>

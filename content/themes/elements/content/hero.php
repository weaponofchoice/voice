<?php
// Options (variables)
$o_b_textColor = get_sub_field( 'hero_o_b_textColor' );

// Content (variables)
$banner = get_sub_field( 'hero_banner' );

$b_image = get_sub_field( 'hero_b_image' );
$b_title = get_sub_field( 'hero_b_title' );
$b_text = preg_replace( '/<p>/', '<h2>', get_sub_field( 'hero_b_text' ) );

// Output
echo '<section class="hero has-no-pad">';

  // Hero background image
  if( $banner ):
    echo
    '<div class="hero-banner is-stretched-wrapper">
      <img class="is-stretched-object" src="' . $banner['sizes']['large'] . '" width="' . $banner['width'] . '" height="' . $banner['height'] . '">
    </div>';
  endif;

  // Hero content container
  if( $b_image || $b_title || $b_text ):
    echo '<div class="section-body">';

      echo '<div class="left">';
        // Logo
        if( $b_image ):
          echo '<img src="' . $b_image['sizes']['medium'] . '" width="' . $b_image['width'] . '" height="' .   $b_image['height'] . '">';
        endif;
      echo '</div>';

      echo '<div class="right">';
        // Title
        if( $b_title ):
          echo '<h1 class="is-bold">' . $b_title . '</h1>';
        endif;

        // Text
        if( $b_text ):
          echo $b_text;
        endif;
      echo '</div>';

    echo '</div>';
  endif;

echo '</section>';

// <a href="javascript:;" class="arrow arrow-scroll"><img src="<?php echo bloginfo( 'template_directory' ) . /img/arrow.svg"></a>
?>

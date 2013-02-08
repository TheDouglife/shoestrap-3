<?php

/*
 * Applies the background to the footer.
 */
function shoestrap_footer_css() {
  $footer_color = get_theme_mod( 'shoestrap_footer_background_color' );
  
  // Make sure colors are properly formatted
  $footer_color = '#' . str_replace( '#', '', $footer_color );
  
  $styles = '<style>';
  if ( strlen( $footer_color ) < 6 ) {
    $styles .= '#footer-wrapper{ background: none; background: transparent; }';
  } else {
    $styles .= '#footer-wrapper{ background: ' . $footer_color . ';}';
    if ( shoestrap_get_brightness( $footer_color ) >= 160 ) {
      $styles .= '#footer-wrapper{ color: ' . shoestrap_adjust_brightness( $footer_color, -150 ) . ';}';
      $styles .= '#footer-wrapper a{ color: ' . shoestrap_adjust_brightness( $footer_color, -180 ) . ';}';
    } else {
      $styles .= '#footer-wrapper{ color: ' . shoestrap_adjust_brightness( $footer_color, 150 ) . ';}';
      $styles .= '#footer-wrapper a{color: ' . shoestrap_adjust_brightness( $footer_color, 180 ) . ';}';
    }
  }
  $styles .= '</style>';
  
  return $styles;
}

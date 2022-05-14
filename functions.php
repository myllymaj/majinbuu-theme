<?php

add_action( 'wp_enqueue_scripts', 'myllymaj_theme_enqueue_styles' );
function myllymaj_theme_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
      } 
     
?>
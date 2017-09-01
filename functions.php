<?php

add_action( 'wp_enqueue_scripts', 'dentist_wp_child_enqueue_front' );

function dentist_wp_child_enqueue_front(){
  wp_enqueue_style( 'dentist_wp-style-parent', get_template_directory_uri() .'/style.css' );
  wp_enqueue_style( 'dentist_wp-style' );
}

?>

<?php

function load_bootstrap() {
  wp_register_style('bootstrap', get_template_directory_uri().'/bootstrap/bootstrap.css', array(), false, 'all'); // memanggil dir stylesheet
  wp_enqueue_style('bootstrap'); // memasang stylesheet

  wp_register_script('bootstrapjs', get_template_directory_uri().'/bootstrap/bootstrap.bundle.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');

  wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

?>
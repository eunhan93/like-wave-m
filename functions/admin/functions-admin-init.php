<?php 

function wavem_setup(){
  register_nav_menus(array(
    "header-gnb" => "Header GNB",
  ));

  add_theme_support("post-thumbnails");

}

add_action('after_setup_theme', 'wavem_setup');

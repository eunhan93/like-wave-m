<?php

function wavem_front_scripts(){
  wp_enqueue_style('original', get_stylesheet_uri());
  wp_enqueue_style('iconmonstr', 'https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css');
  wp_enqueue_script('header', get_template_directory_uri() . '/asset/front/js/header.js', [], '1.0', true);

  if(is_front_page()){
    wp_enqueue_style('swiperjs', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiperjs', 'https://unpkg.com/swiper/swiper-bundle.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('main-page', get_template_directory_uri() . '/asset/front/js/main-page.js', [], '1.0', true);

  }

  if(is_page('reservation')){
    wp_enqueue_script('reservation-date', get_template_directory_uri() . '/asset/front/js/reservation-date.js', [], '1.0', true);
  }

  if(is_post_type_archive('news') || is_post_type_archive('notice')){
    wp_enqueue_script('cs', get_template_directory_uri() . '/asset/front/js/cs.js', [], '1.0', true);

  }
}

add_action('wp_enqueue_scripts', 'wavem_front_scripts');
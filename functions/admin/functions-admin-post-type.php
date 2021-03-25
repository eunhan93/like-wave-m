<?php 


function wavem_register_post_type(){

   // 예약
   $rsv_labels = array(
    'name'                  => '예약',
    'singular_name'         => '예약',
    'menu_name'             => '예약',
    'name_admin_bar'        => '예약',
    'add_new'               => '예약 추가',
    'add_new_item'          => '예약을 추가합니다',
    'new_item'              => '새 예약',
    'edit_item'             => '예약 수정',
    'view_item'             => '예약 보기',
    'all_items'             => '예약 목록',
    'search_items'          => '예약 검색',
    'not_found'             => '현재 입력한 예약이 없습니다.',
    'not_found_in_trash'    => '휴지통에 예약이 없습니다.',
    
  );

  $rsv_args = array (
    'has_archive' => true,
    'public' => true,
    'labels' => $rsv_labels,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-groups',
    // 'menu_icon' => get_template_directory_uri() . '/image/iconmonstr-basketball-1-16.png',,'headway-seo'
    'supports' => array('title')
  );
  register_post_type('rsv', $rsv_args);





  // 슬라이더 이미지
  $fp_slider_labels = array(
    'name'                  => '슬라이더 이미지',
    'singular_name'         => '슬라이더 이미지',
    'menu_name'             => '슬라이더 이미지',
    'name_admin_bar'        => '슬라이더 이미지',
    'add_new'               => '슬라이더 이미지 추가',
    'add_new_item'          => '슬라이더 이미지를 추가합니다',
    'new_item'              => '새 슬라이더 이미지',
    'edit_item'             => '슬라이더 이미지 수정',
    'view_item'             => '슬라이더 이미지 보기',
    'all_items'             => '슬라이더 이미지 목록',
    'search_items'          => '슬라이더 이미지 검색',
    'not_found'             => '현재 입력한 슬라이더 이미지가 없습니다.',
    'not_found_in_trash'    => '휴지통에 슬라이더 이미지가 없습니다.',
    
  );

  $fp_slider_args = array (
    'has_archive' => true,
    'public' => true,
    'labels' => $fp_slider_labels,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-images-alt2',
    // 'menu_icon' => get_template_directory_uri() . '/image/iconmonstr-basketball-1-16.png',,'headway-seo'
    'supports' => array('title', 'editor', 'thumbnail')
  );
  register_post_type('fpSlider', $fp_slider_args);



  // 공지사항
  $notice_labels = array(
    'name'                  => '공지사항',
    'singular_name'         => '공지사항',
    'menu_name'             => '공지사항',
    'name_admin_bar'        => '공지사항',
    'add_new'               => '공지사항 추가',
    'add_new_item'          => '공지사항을 추가합니다',
    'new_item'              => '새 공지사항',
    'edit_item'             => '공지사항 수정',
    'view_item'             => '공지사항 보기',
    'all_items'             => '공지사항 목록',
    'search_items'          => '공지사항 검색',
    'not_found'             => '현재 입력한 공지사항이 없습니다.',
    'not_found_in_trash'    => '휴지통에 공지사항이 없습니다.',
    
  );

  $notice_args = array (
    'has_archive' => true,
    'public' => true,
    'labels' => $notice_labels,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-bell',
    // 'menu_icon' => get_template_directory_uri() . '/image/iconmonstr-basketball-1-16.png',,'headway-seo'
    // 'supports' => array('title', 'editor', 'thumbnail')
  );
  register_post_type('notice', $notice_args);



  


  // 뉴스
  $news_labels = array(
    'name'                  => '뉴스',
    'singular_name'         => '뉴스',
    'menu_name'             => '뉴스',
    'name_admin_bar'        => '뉴스',
    'add_new'               => '뉴스 추가',
    'add_new_item'          => '뉴스를 추가합니다',
    'new_item'              => '새 뉴스',
    'edit_item'             => '뉴스 수정',
    'view_item'             => '뉴스 보기',
    'all_items'             => '뉴스 목록',
    'search_items'          => '뉴스 검색',
    'not_found'             => '현재 입력한 뉴스가 없습니다.',
    'not_found_in_trash'    => '휴지통에 뉴스가 없습니다.',
    
  );

  $news_args = array (
    'has_archive' => true,
    'public' => true,
    'labels' => $news_labels,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-media-document',
    // 'menu_icon' => get_template_directory_uri() . '/image/iconmonstr-basketball-1-16.png',,'headway-seo'
    'supports' => array('title', 'editor', 'thumbnail')
  );
  register_post_type('news', $news_args);




}

add_action('init', 'wavem_register_post_type');
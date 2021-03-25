<?php


function fpSlider_taxonomy(){
  
  register_taxonomy('fpSlider-type', 'fpslider', [
    'labels' => [
        'name'              => '위치',
        'singular_name'     => '위치',
        'search_items'      => '위치 검색',
        'all_items'         => '전체 위치',
        'parent_item'       => '상위 위치',
        'parent_item_colon' => '상위 위치:',
        'edit_item'         => '위치 편집',
        'update_item'       => '위치 수정',
        'add_new_item'      => '새 위치',
        'new_item_name'     => '새 위치 이름',
        'menu_name'         => '위치',
    ],
    'show_admin_column' => true,
    'hierarchical' => true,
  ]);


}

add_action('init', 'fpSlider_taxonomy');
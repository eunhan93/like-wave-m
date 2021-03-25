<?php


function wvm_meta_boxes_reserv() {


  add_meta_box('reserv-data', '예약 상세 정보', function(){
    include 'metabox/reserv-data.php';
  }, 'rsv');


  // add_meta_box('reserv-cover', '책 표지', function(){
  //   include 'meta-box/reserv-cover.php';
  // }, 'book');


}


add_action('add_meta_boxes_rsv', 'wvm_meta_boxes_reserv');


// add_action('edit_form_advanced', function () {
//   if(get_current_screen() -> post_type === 'reserv'){

//     include 'metabox/reserv-shop-info.php';

//     // include 'meta-box/book-author-intro.php';
    
//     // include 'meta-box/book-translator-intro.php';
//   }
// }); 
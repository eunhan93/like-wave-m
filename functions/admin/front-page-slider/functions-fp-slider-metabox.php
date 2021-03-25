<?php


function wvm_meta_boxes_fp_slider() {


  add_meta_box('fp-slider-data', '예약 상세 정보', function(){
    include 'metabox/fp-slider-data.php';
  }, 'fp_slider');


  // add_meta_box('fp_slider-cover', '책 표지', function(){
  //   include 'meta-box/fp_slider-cover.php';
  // }, 'book');


}


add_action('add_meta_boxes_fpSlider', 'wvm_meta_boxes_fp_slider');


// add_action('edit_form_advanced', function () {
//   if(get_current_screen() -> post_type === 'fp_slider'){

//     include 'metabox/fp_slider-shop-info.php';

//     // include 'meta-box/book-author-intro.php';
    
//     // include 'meta-box/book-translator-intro.php';
//   }
// }); 
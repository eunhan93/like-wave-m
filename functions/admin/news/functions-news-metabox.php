<?php


function wvm_meta_boxes_news() {


  add_meta_box('news-data', '뉴스 등록 정보', function(){
    include 'metabox/news-data.php';
  }, 'news');


  // add_meta_box('news-cover', '책 표지', function(){
  //   include 'meta-box/news-cover.php';
  // }, 'book');


}


add_action('add_meta_boxes_news', 'wvm_meta_boxes_news');


// add_action('edit_form_advanced', function () {
//   if(get_current_screen() -> post_type === 'news'){

//     include 'metabox/news-shop-info.php';

//     // include 'meta-box/book-author-intro.php';
    
//     // include 'meta-box/book-translator-intro.php';
//   }
// }); 
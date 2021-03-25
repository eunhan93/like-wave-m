<?php 
/**
* Template Name: 웨이브엠
*
*/


  get_header();

  function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
    }


  global $wp_query; //post_title
  if(!empty($wp_query -> queried_object -> post_parent)){
    $for_menu = get_pages(['child_of' => $wp_query -> queried_object -> post_parent, 'sort_order' => 'ASC', 'sort_column' => 'post_date']);
  } 
 
  
  // var_dump($wp_query);

  // if(get_post($wp_query -> queried_object -> post_parent) -> post_title === '프리미엄'){
  //   $for_menu = get_pages(['child_of' => $wp_query -> queried_object -> post_parent, 'sort_order' => 'ASC']);
  // }
  ?>
<?php 
  // var_dump(get_post_type_object('notice'));
?>
<main class="tmp-bs">
  <section class="section1 mb-80">
    <div class="container">
    <h1>고객센터</h1>
    <i class="im im-angle-down"></i>
    <ul>
      <li class="l-s-n"><a href="<?php echo home_url() . '/notice/'; ?>">공지사항</a></li>
      <li class="l-s-n"><a href="<?php echo home_url() . '/news/'; ?>">언론보도</a></li>
    </ul>
    </div>
  </section>

<section class="section2 container mb-50">
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>제목</th>
          <th>보도사</th>
          <th>등록</th>
        </tr>
      </thead>
      <tbody>
<?php


  $postsPerPage = 10;
  $now_p_no = ($_GET['page_no'] && intval($_GET['page_no']) > 1) ?  intval($_GET['page_no']) : 1;

  $newsQuery = new WP_Query([
    "post_type" => "news" ,
    "posts_per_page" => $postsPerPage,
    "paged" => $now_p_no
  ]);
      
  $post_no = $newsQuery -> found_posts;

  // var_dump($wp_query);

  if($newsQuery -> have_posts()){
    if($_GET['page_no'] && intval($_GET['page_no']) > 1){
      $post_no = $post_no - ((intval($_GET['page_no']) - 1) * $postsPerPage);
    }
    while($newsQuery -> have_posts()){
      $newsQuery -> the_post();
  ?>
      <tr>
        <td><?php echo $post_no; ?></td>
        <td><?php the_title(); ?></td>
        <td><?php echo get_post_meta(get_the_ID(), 'news_press', true); ?></td>
        <td><?php echo get_post_meta(get_the_ID(), 'news_upload_date', true); ?></td>
      </tr>
      
      <?php
      $post_no--;
    }
  }
?>
</tbody>
    </table>
  
<div class="pagination">
  <?php
  
  $current_p_no = $_GET['page_no'];

  $c_page = str_replace('?page_no=' . $current_p_no, '', curPageURL());

  $tot_pages = ceil(($wp_query -> found_posts)/$postsPerPage);

  // var_dump();
  
  
  ?>
  <a href="<?php 
    if(!empty($_GET['page_no']) && (int)$_GET['page_no'] > 1 && (int)$_GET['page_no'] - 1 > 1){
      echo $c_page . '?page_no=' . ((int)$_GET['page_no'] - 1);
    } else if(!empty($_GET['page_no']) && (int)$_GET['page_no'] > 1 && (int)$_GET['page_no'] - 1 === 1) {
      echo $c_page;
    } else {
      echo 'javascript:;';
    }
  ?>">이전</a>
  <?php

  // echo $c_page;
  for($i = 1; $i <= $tot_pages; $i++){
    if($i === 1){
    ?>
      <a href="<?php echo  $c_page;?>"><?php echo $i?></a>

    <?php
    } else {
    ?>
      <a href="<?php echo  $c_page . '?page_no=' . $i; ?>"><?php echo $i?></a>
    <?php
    }
  }
?>
  <a href="<?php 
    if(!empty($_GET['page_no']) && (int)$_GET['page_no'] < $tot_pages){
      echo $c_page . '?page_no=' . ((int)$_GET['page_no'] + 1);
    } else if(!empty($_GET['page_no']) && $_GET['page_no'] == $tot_pages) {
      echo 'javascript:;';
    } else {
      // 첫번째 페이지인 경우
      echo $c_page . '?page_no=2';
    }
  ?>">다음</a>

</div>
  </section>
<section class="section3 container mb-100">
    <p>※ 본 홍보물의 일러스트, CG, 이미지는 이해를 돕기 위한 것으로 시공 및 인·허가 과정에서 실제와 다르거나 변경될 수 있습니다.</p>

    <p>※ 본 홍보물에 관련된 자세한 사항은 해당 모델하우스에 방문하시어 확인하시기 바랍니다.</p>

    <p>※ 본 홍보물의 제작과정상 오탈자가 있을 수 있으므로 계약 시 반드시 확인하시기 바랍니다.</p>
  </section>
</main>

<?php
  get_footer();
?>

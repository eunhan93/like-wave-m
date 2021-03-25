<?php 
/**
* Template Name: 웨이브엠
*
*/


  get_header();


  global $wp_query; //post_title
  if(!empty($wp_query -> queried_object -> post_parent)){
    $for_menu = get_pages(['child_of' => $wp_query -> queried_object -> post_parent, 'sort_order' => 'ASC', 'sort_column' => 'post_date']);
  } 
 
  
  // var_dump($wp_query);

  // if(get_post($wp_query -> queried_object -> post_parent) -> post_title === '프리미엄'){
  //   $for_menu = get_pages(['child_of' => $wp_query -> queried_object -> post_parent, 'sort_order' => 'ASC']);
  // }
  ?>

<main class="tmp-bs rsv">
  <section class="section1 mb-50">
    <div class="container">
    <h1><?php echo get_the_title($wp_query -> queried_object -> post_parent); ?></h1>
    <i class="im im-angle-down"></i>
    <ul>
      <?php
      if(!empty($wp_query -> queried_object -> post_parent)){
      foreach($for_menu as $m){
        ?>
          <li class="l-s-n <?php echo ($m -> ID === get_the_ID()) ? 't-p' : '' ?>"><a href="<?php echo $m -> guid; ?>"><?php echo $m -> post_title; ?></a></li>
        <?php
      }} else {
        ?>
        <li class="l-s-n t-p">
          <?php
            if($wp_query -> query_vars['pagename'] === 'east' || $wp_query -> query_vars['pagename'] === 'west') {
              echo '투자가치';
            } else {
              ?>
                <a href="<?php echo the_permalink() ?>">사전 방문예약</a>
              <?php
            }
          ?>
        </li>
        <?php
      }
      ?>
    </ul>
    </div>
  </section>

<?php
  // var_dump();

  if(have_posts()){
    while(have_posts()){
      the_post();
  ?>
  <?php if(!empty(the_post_thumbnail_url())){
    ?>
    <section class="section2 container mb-50">
      <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
    </section>
    <?php
    }
  ?>
  <section class="section3 container mb-100">
    <div class="notice">
      <section class="rsv-1">
        <h1>모델하우스 운영안내</h1>
        <p>코로나19 확산 방지 및 안전한 주택전시관 관람서비스 제공을 위해</p>
        <p>주택관 관람 사전예약제를 진행하고 있습니다.</p>
        <p>관람을 원하시눈 고객께서는 방문예약을 신청하시기 바랍니다.</p>
      </section>
      <section class="rsv-2 rsv-l">
        <h3>관람시간</h3>
      </section>
      <section class="rsv-3 rsv-r">
        <h3>AM 10:00 ~ PM 18:00</h3>
        <p>* 매일 최종관람 입장 시간은 PM 17:00 입니다.</p>
      </section>
      <section class="rsv-4 rsv-l">
        <h3>확인사항</h3>
      </section>
      <section class="rsv-5 rsv-r">
        <p>코로나 19 예방 점검 후 입장</p>
        <p>(코로나 바이러스 확산 방지를 위해 마스크 착용 후 입장이 가능하며, 미착용 시 입장이 제한될 수 있으니 유의하시기 바랍니다.)</p>
        <h3>입장제한</h3>
        <p>- 미예약고객</p>
        <p>- 37.5도 이상 발열 고객 및 마스크 미착용 고객</p>
        <p>- 방역시스템 비협조 고객</p>
      </section>
      <section class="rsv-6 rsv-l">
        <h3>유의사항</h3>
      </section>
      <section class="rsv-7 rsv-r">
        <p>관람 입장은 신청자 1명 외 동반입장 고객도 문진표 및 방명록 작성 후 입장 가능합니다.</p>
      </section>
    </div>
    <form class="rsv-form">
      <h2>사전 방문예약 신청 <span>*(중복예약은 불가합니다.)</span></h2>
      <input type="text" name="date" class="reservation">
      <p class="fl f-a">
        <input type="text" name="rsv-name" id="rsv-name" placeholder="이 름">
        <input type="text" name="rsv-phone" id="rsv-phone" placeholder="휴대전화">
      </p>
      <input type="hidden" name = 'rsv-date' id="rsv-date">
      <input type="hidden" name = 'rsv-time' id = 'rsv-time'>
      <button type="submit" class="rsv-sbm-btn">신청하기</button>
    </form>

    <?php the_content(); ?>

  </section>

      <?php
    }
  }
?>
</main>

<?php
  get_footer();
?>





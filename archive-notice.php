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
    <div class="notice-area">
      <div class="notice-tit">
        <h3>공지사항</h3>
      </div>
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();
        ?>
          <div class="notice-content">
            <h5>
              <?php the_title(); ?>
              <i class="fas fa-minus-circle"></i>
            </h5>
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        <?php
          }
        }
      ?>
    </div>
  </section>

  <script>
    document.querySelectorAll('.notice-content h5').forEach(el => {
      el.addEventListener('click', function(){el.parentElement.classList.toggle('on')})
    })
  </script>

  <section class="section3 container mb-100">
  <p>※ 상세안내 및 문의사항은 고객센터로 아래의 문의바랍니다.</p>

  <p>※ 상기 지역조감도는 향후 개발 후의 이미지이며 해당기관의 개발계획·실시계획 변경 등으로 사업추진과정에서 조정될 수 있습니다.</p>

  <p>※ 구획선과 시설물의 위치 및 규모 역시 측량결과 및 각종 평가에 따라 시공 시 변경될 수 있습니다.</p>

  <p>※ 본 홍보물의 제작과정상 오탈자가 있을 수 있으므로 계약 시 반드시 확인하시기 바랍니다.</p>
  </section>
</main>

<?php
  get_footer();
?>

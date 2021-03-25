<?php 
  get_header();
?>
<main>
  <section class="section01 main-slider">
    <?php include 'components/slider/front-page-slider.php' ?>
  </section>

  <section class="section02">
    <article class="section02-east">
      <a href="<?php echo get_permalink(get_page_by_path('east') -> ID) ?>">
        <img src="http://localhost/wp-1/wp-content/uploads/2021/03/bn_01_01.jpg" alt="<?php echo get_the_title(get_page_by_path('/east/') -> ID) ?>">
      </a>
    </article>
    <article class="section02-west">
      <a href="<?php echo get_permalink(get_page_by_path('west') -> ID) ?>">
      <img src="http://localhost/wp-1/wp-content/uploads/2021/03/bn_01_02.jpg" alt="<?php echo get_the_title(get_page_by_path('/west/') -> ID) ?>">

      </a>
    </article>
  </section>

  <section class="section03">
  <article class="section03-park">
      <a href="<?php echo get_permalink(get_page_by_path('premium/wave-city') -> ID) ?>">
        <img src="http://localhost/wp-1/wp-content/uploads/2021/03/bn_01_03.jpg" alt="<?php echo get_the_title(get_page_by_path('/wave-park/') -> ID) ?>">
      </a>
    </article>
  </section>
  <section class="section04">
    <article class="section04-city left">
      <a href="<?php echo get_permalink(get_page_by_path('premium/wave-city') -> ID) ?>">
        <img src="http://localhost/wp-1/wp-content/uploads/2021/03/bn_02_txt.gif" alt="<?php echo get_the_title(get_page_by_path('/wave-city/') -> ID) ?>">
      </a>
    </article>
    <article class="section04-city right">
      <div class="city-slider">
        <?php include 'components/slider/front-page-part-slider.php';?>
      </div>
    </article>
  </section>
</main>

<?php
  get_footer();
?>
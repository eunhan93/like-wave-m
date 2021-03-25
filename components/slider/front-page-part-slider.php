<?php 



?>



<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php 
    
    $sliderCity = new WP_Query([
      'post_type' => 'fpslider',
      'posts_per_page' => 5,
      'tax_query' => array(
        array(
            'taxonomy' => 'fpSlider-type',
            'field'    => 'slug',
            'terms'    => 'main-city',
        ),
    ),
    ]);


    if($sliderCity -> have_posts()){
      while($sliderCity -> have_posts()){
        $sliderCity -> the_post();
        ?>
        <img  class="swiper-slide" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
      <?php
      }
    }
    
    ?>
  </div>
</div>
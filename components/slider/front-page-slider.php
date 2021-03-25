
<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php 
    
    $slider = new WP_Query([
      'post_type' => 'fpSlider',
      'posts_per_page' => 6,
      'tax_query' => array(
        array(
            'taxonomy' => 'fpSlider-type',
            'field'    => 'slug',
            'terms'    => 'main',
        ),
    ),
    ]);


    if($slider -> have_posts()){
      while($slider -> have_posts()){
        $slider -> the_post();
        ?>

        <!-- <div class="swiper-slide"  data-image-src="<?php echo the_post_thumbnail_url();?>">

        </div> -->


        <div class="swiper-slide" style="background: url(<?php echo the_post_thumbnail_url();?>) no-repeat center center / cover ">
          <div class="slide-content">
            <?php the_content() ; ?>
          </div>
        </div>
      <?php
      }
    }
    
    ?>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev s-b-p"></div>
  <div class="swiper-button-next s-b-n"></div>
</div>
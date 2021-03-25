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

<main class="tmp-bs">
  <section class="section1 mb-80">
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
  <?php if(!empty(get_the_post_thumbnail(get_the_ID()))){
    ?>
    <section class="section2 container mb-50">
      <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
    </section>
    <?php
    }
  ?>
  <section class="section3 container mb-100">
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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php echo bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap">
    <header class="fl f-a">
      <section class="header-1 fl f-a f-sb">
        <div class="logo">
          <a href="<?php echo home_url()?>">
            <img src="http://localhost/wp-1/wp-content/uploads/2021/03/logoM.png" alt="wave m">
          </a>
        </div>
        <?php 
          wp_nav_menu([
            "theme_location" => 'header-gnb',
            "container" => 'nav',
            "container_class" => 'gnb',
            "menu_class" => 'header-gnb-menu',
          ]);
        ?>
      </section>
      <section class="header-2 fl f-a f-j ">
        <p>견본주택 방문예약!<br />청약 전 꼭 확인하세요.</p>
      </section>
      <section class="header-3 fl f-a f-j bg-b-c-w">
        <p>1800-8337</p>
      </section>

      <?php 
        $ck = false;
        foreach(wp_get_current_user() -> roles as $u){
          if($u == 'administrator'){
            $ck = true;
          }
        }

        if($ck) {
          ?>
            <a class="go-rsv-list" href="<?php echo home_url() . '/reservation-list' ?>">예약현황</a>
          <?php
        }
      ?>
      
    </header>
<?php 
  get_header();
?>
<main class="container">
<table>
  <thead>
    <tr>
      <th>이름</th>
      <th>전화번호</th>
      <th>예약일자</th>
      <th>예약시간</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $rsvList = new WP_Query([
    'post_type' => 'rsv'
  ]);
  if($rsvList -> have_posts()){
    while($rsvList -> have_posts()){
      $rsvList -> the_post();
    ?>
    <tr>
      <td><?php echo get_post_meta(get_the_ID(), 'reserv_name', true) ?></td>
      <td><?php echo get_post_meta(get_the_ID(), 'reserv_phone_num', true) ?></td>
      <td><?php echo get_post_meta(get_the_ID(), 'reserv_date', true) ?></td>
      <td><?php echo get_post_meta(get_the_ID(), 'reserv_time', true) ?></td>
    </tr>
    <?php
    }
  }
?>

  </tbody>
</table>

</main>

<?php
  get_footer();
?>
<div>
  <table>
    <tbody>
      <tr>
        <th><label for="reserv_name">이름</label></th>
        <td><input type="text" id="reserv_name" name="meta[reserv_name]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'reserv_name', true)); ?>"/></td>
      </tr>
      <tr>
        <th><label for="reserv_phone_num">전화번호</label></th>
        <td><input type="text" id="reserv_phone_num" name="meta[reserv_phone_num]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'reserv_phone_num', true)); ?>"/></td>
      </tr>
      <tr>
        <th><label for="reserv_date">예약일</label></th>
        <td><input type="text" id="reserv_date" name="meta[reserv_date]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'reserv_date', true)); ?>"/></td>
      </tr>
      <tr>
        <th><label for="reserv_time">예약시간</label></th>
        <td><input type="text" id="reserv_time" name="meta[reserv_time]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'reserv_time', true)); ?>"/></td>
      </tr>
    </tbody>
  </table>
</div>



<div>
  <table>
    <tbody>
      <tr>
        <th><label for="news_press">보도사</label></th>
        <td><input type="text" class="regular-text" id="news_press" name="meta[news_press]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'news_press', true)); ?>"/></td>
      </tr>
      <tr>
        <th><label for="news_upload_date">보도 등록일</label></th>
        <td><input type="text" class="regular-text" id="news_upload_date" name="meta[news_upload_date]" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'news_upload_date', true)); ?>"/></td>
      </tr>
    </tbody>
  </table>
</div>



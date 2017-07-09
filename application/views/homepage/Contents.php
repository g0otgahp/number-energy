<div class="container">
  <div class="row" style="margin-top:30px;">
    <div class="col-lg-offset-0 col-lg-12 col-sm-12 layout-item-wrap panel" align="center">
      <h3 class="wow slideInRight">บทความเกี่ยวกับเบอร์มือถือ</h3>
      <hr>
      <?php foreach ($Story as $row): ?>
        <div class="col-md-4 col-sm-12">
          <?php if ($row['story_img'] == 0): ?>
          <a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>" target="_blank" class="button" style="vertical-align:middle"><span><img src="<?php echo BASE_URL('images/story_icon.png')?>" style="width:50px;"></span></a>
          <?php else: ?>
          <a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>" target="_blank" style="vertical-align:middle"><span><img src="<?php echo BASE_URL('images/contents/'.$row['story_img'])?>" style="width:200px; height:97px;" class="img-thumbnail"></span></a>
          <?php endif; ?>

        <h3 class="wow slideInRight">
          <a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>" target="_blank" style="vertical-align:middle; font-size:16px;"><?php echo $row['story_name']?></a>
        </h3>
        <p>&nbsp;</p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="col-lg-offset-3 col-lg-6 col-sm-12 layout-item-wrap panel" align="center">
      <div class='panel'>
        <div class='panel-heading'><h4>ติดตามเพจที่นี้</h4></div>
            <div class='fb-page' data-href='https://www.facebook.com/luckysimman/' data-width='800' data-small-header='false' data-adapt-container-width='false' data-hide-cover='false' data-show-facepile='true'><blockquote cite='https://www.facebook.com/luckysimman/' class='fb-xfbml-parse-ignore'><a href='https://www.facebook.com/luckysimman/'>พ่อหมอ พลังเลข</a></blockquote></div>
      </div>
    </div>
  </div>
</div>

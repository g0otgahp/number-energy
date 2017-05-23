<div class="container">
  <div class="row" style="margin-top:30px;">
    <div class="col-lg-offset-0 col-lg-12 col-sm-12 layout-item-wrap panel" align="center">
      <h3 class="wow slideInRight">บทความเกี่ยวกับเบอร์มือถือ</h3>
      <hr>
      <?php foreach ($Story as $row): ?>
        <div class="col-md-4 col-sm-12">
          <a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>" target="_blank" class="button" style="vertical-align:middle"><span><img src="<?php echo BASE_URL('images/story_icon.png')?>" style="width:50px;"></span></a>
        <h3 class="wow slideInRight">
          <a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>" target="_blank" style="vertical-align:middle"><?php echo $row['story_name']?></a>
        </h3>
        <p>&nbsp;</p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="container" style="margin-top:50px;">
  <h3 class="wow slideInRight">
    <?php if ($News[0]['actipromo_type'] ==1): ?>
      [กิจกรรม]
    <?php else: ?>
      [โปรโมชั่น]
    <?php endif; ?>
    <?php echo $News[0]['actipromo_name'] ?>
  </h3>
  <hr>
  <div class="row">
    <div class="col-lg-8 col-sm-12 layout-item-wrap">
        <div class="row panel">
          <div class="col-lg-12 col-sm-12">
            <p></p>
            <div>
              <?php echo $News[0]['actipromo_detail']?>
            </div>
            <hr>
            <p>
              เมื่อวันที่ : <span style="color:red;"><?php echo $News[0]['actipromo_date']?></span>
            </p>
          </div>
        </div>
        <hr>

        <!-- <div class="row">
          <div class="panel col-lg-12 col-sm-12">
            <div class="fb-comments" data-href="<?php echo BASE_URL('news/detail/'.$News[0]['actipromo_id'])?>" data-width="100%" data-numposts="10"></div>
          </div>
        </div> -->

      </div>

      <div class='row'>
        <div class='col-lg-4 col-sm-12 layout-item-wrap'>

          <!-- <div class='col-lg-12 col-sm-12'>
            <div class='panel'>
              <div class='panel-heading' align='center'><h4>ล่าสุด</h4></div>
              <div style='margin-left:15px; margin-right:15px;'>
                <h4>โปรโมชั่น</h4>
                <?php //foreach ($PromotionTop as $row): ?>
                <div>- <a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>' class=''> <?php echo $row['actipromo_name'] ?></a></div>
                <?php //endforeach; ?>
                <h4>กิจกรรม</h4>
                <?php //foreach ($EventTop as $row): ?>
                <div>- <a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>' class=''> <?php echo $row['actipromo_name'] ?></a></div>
                <?php //endforeach; ?>
                <hr>
              </div>
            </div>
          </div> -->

          <div class='col-md-12 col-sm-12' align='center'>
            <div class='panel'>
              <div class='panel-heading'><h4>ติดตามเพจที่นี้</h4></div>
              <div style='margin-left:15px; margin-right:15px;'>
                  <div class='fb-page' data-href='https://www.facebook.com/luckysimman/' data-width='320' data-small-header='false' data-adapt-container-width='false' data-hide-cover='false' data-show-facepile='true'><blockquote cite='https://www.facebook.com/luckysimman/' class='fb-xfbml-parse-ignore'><a href='https://www.facebook.com/luckysimman/'>พ่อหมอ พลังเลข</a></blockquote></div>              </div>
              <hr>
            </div>
          </div>

        </div>
      </div>

        </div>
      </div>
    </div>
  </div>

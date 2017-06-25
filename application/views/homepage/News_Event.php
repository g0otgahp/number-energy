<div class="container" style="margin-top:50px;">
  <?php if (count($Event) <=0): ?>
  <h3 align="center" class="wow slideInRight">ไม่พบรายการกิจกรรม</h3>
  <?php else: ?>
    <?php if ($EventList == 0): ?>
    <h3 class="wow slideInRight">รายการกิจกรรม</h3>
    <?php else: ?>
    <h3 class="wow slideInRight">รายการกิจกรรมทั้งหมด</h3>
    <?php endif; ?>
  <hr>
  <div class="row">
    <div class="col-lg-9 col-sm-12 layout-item-wrap">
      <?php foreach ($Event as $row): ?>
        <div class="row panel wow slideInRight">
          <div class="col-lg-5 col-sm-12">
            <a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>">
            <img src="<?php echo BASE_URL('images/actipromo/'.$row['actipromo_image']) ?>" style="width:100%; height:200px;">
            </a>
          </div>
          <div class="col-lg-7 col-sm-12">

            <div>
              <a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>"><h4><?php echo $row['actipromo_name']?></h4></a>
            </div>

            <div>
              <?php echo $row['actipromo_subtitle']?>
            </div>

            <div>
              <a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>">อ่านเพิ่ม...</a>
            </div>

            <hr>

            <div>
              เมื่อวันที่ : <span style="color:red;"><?php echo $row['actipromo_date']?></span>
            </div>
          </div>
        </div>
        <hr>

        <?php endforeach; ?>
        <?php if ($EventList == 0): ?>
        <a href="<?php echo SITE_URL('news/event_list')?>" style="color:white;">
        <div style="margin-bottom:20px;" class="col-lg-12 col-sm-12 btn btn-primary">
          ดูกิจกรรมเพิ่ม
        </div>
        </a>
        <?php endif; ?>

      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-12 layout-item-wrap">

          <!-- <div class="col-lg-12 col-sm-12">
            <div class="panel">
              <div class="panel-heading" align="center"><h4>กิจกรรมล่าสุด</h4></div>
              <div style="margin-left:15px; margin-right:15px;">

                <?php //foreach ($EventTop as $row): ?>
                <div>- <a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>" class=""> <?php echo $row['actipromo_name'] ?></a></div>
                <?php //endforeach; ?>

                <hr>
              </div>
            </div>
          </div> -->

          <div class="col-lg-12 col-sm-4">
            <div class="panel">
              <div class="panel-heading" align="center"><h4>ติดตามเพจที่นี้</h4></div>
              <div style="margin-left:15px; margin-right:15px;">
                  <div class="fb-page" data-href="https://www.facebook.com/luckysimman/" data-width="215" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/luckysimman/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/luckysimman/">พ่อหมอ พลังเลข</a></blockquote></div>              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
  <?php endif; ?>

  </div>

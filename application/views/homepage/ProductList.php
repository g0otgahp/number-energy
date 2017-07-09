<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 layout-item-wrap">
      <section id="home-property-listing">
        <header class="section-header home-section-header text-center">
          <div class="container">
            <h2 class="wow slideInRight">เลือกเครือข่ายที่ต้องการ</h2>
            <p class="wow slideInLeft" style="font-size:20px;">ทุกหมายเลข ได้คัดเลือกมาอย่างดี
              และจำแนกออกเป็นหมายเลขเสริมของแต่ละด้าน</p>
          </div>
        </header>

        <div class="container"  align="center">
          <div class="row">
          <?php //for($i=0;$i<30;$i++){ ?>
            <?php foreach ($Product_Network as $row): ?>
            <div class="col-lg-4 col-sm-6 wow slideInRight">
                      <a href="<?php echo SITE_URL('product/product_list/'.$row['mobile_network_id']);?>">
                        <!-- <h6 class="entry-title">เครือข่าย <?php echo $row['mobile_network_name']?>
                      </h6> -->
                    <img class="thumbnail" src="<?php echo BASE_URL('images/networklogo/'.$row['mobile_network_pic'])?>"style="margin-left:20px; height:175px;">
                      </a>

            </div>
          <?php endforeach; ?>
          <br>
          </div>
        </div>
      </section>
    </div>

    <div class="col-lg-offset-3 col-lg-6 col-sm-12 layout-item-wrap panel" align="center">
      <div class='panel'>
        <div class='panel-heading'><h4>ติดตามเพจที่นี้</h4></div>
            <div class='fb-page' data-href='https://www.facebook.com/luckysimman/' data-width='800' data-small-header='false' data-adapt-container-width='false' data-hide-cover='false' data-show-facepile='true'><blockquote cite='https://www.facebook.com/luckysimman/' class='fb-xfbml-parse-ignore'><a href='https://www.facebook.com/luckysimman/'>พ่อหมอ พลังเลข</a></blockquote></div>
      </div>
    </div>
  </div>
</div>

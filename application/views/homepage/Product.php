<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 layout-item-wrap">
      <section id="home-property-listing">
        <header class="section-header home-section-header text-center">
          <div class="container">
            <?php if (count($Product_List) == 0): ?>
              <h2 class="wow slideInRight">ไม่พบรายการนี้หรือเบอร์มือถือหมดแล้ว</h2>
            <?php else: ?>
              <h2 class="wow slideInRight">รายการเบอร์มือถือ <?php echo $Product_List[0]['mobile_network_name']?></h2>
              <p class="wow slideInLeft" style="font-size:20px;">ทุกหมายเลข ได้คัดเลือกมาอย่างดี
                และจำแนกออกเป็นหมายเลขเสริมของแต่ละด้าน</p>
            <?php endif; ?>
          </div>
        </header>

        <div class="container">
          <div class="row">
          <?php //for($i=0;$i<30;$i++){ ?>
            <?php foreach ($Product_List as $row): ?>
            <div class="col-lg-4 col-sm-6 layout-item-wrap">
              <article class="property layout-item clearfix">
                <figure class="feature-image"> <a class="clearfix zoom" href="#"><h3 align="center"><?php echo $row['product_number']?></h3></a></figure>
                <div class="property-contents clearfix">
                  <header class="property-header clearfix">
                    <div class="pull-left">
                      <h6 class="entry-title">เครือข่าย
                          <img src="<?php echo BASE_URL('images/networklogo/'.$row['mobile_network_pic'])?>" style="height:30px;">
                      </h6>
                      <span class="property-location"><i class="fa fa-star" aria-hidden="true"></i> ส่งเสริมด้าน : <?php echo $row['product_type_name']?></span> </div>
                    <button class="btn btn-default btn-price pull-right btn-3d" data-hover="฿<?php echo $row['product_sale']?>"><strong>฿<?php echo $row['product_sale']?></strong></button>
                  </header>
                  <div class="property-meta clearfix"> <span><i class="fa fa-calculator"></i> ผลรวมของเบอร์ (<?php echo $row['Count_number']?>)</span> <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> อัพเดทวันที่ <?php echo $row['product_date']?></span>
                   </div>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
          </div>
        </div>






      </section>
    </div>
  </div>
</div>

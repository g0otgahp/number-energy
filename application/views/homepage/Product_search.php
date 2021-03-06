
        <header class="section-header home-section-header text-center" style="margin-top:30px;">

        <div class="container">
          <h2 class="wow slideInRight">ค้นหาหมายเลข</h2>
            <?php echo form_open('product/product_search') ?>
              <input style="width: 300px; text-align: center;" name="number" class="" placeholder="กรอกหมายเลขที่ต้องการค้นหา">
              <input style="width: 100px; text-align: center;" type="submit" class="form-control btn btn-primary" style="margin-top:10px;" value="ค้นหา">
            <?php echo form_close() ?>
        </div>
      </header>

        <section id="home-property-listing">
          <header class="section-header home-section-header text-center">
            <div class="container">
              <?php if (count($Product_List) == 0): ?>
                <h2 class="wow slideInRight">ไม่พบรายการนี้หรือเบอร์มือถือหมดแล้ว</h2>
              <?php else: ?>
                <h2 class="wow slideInRight">รายการมือถือที่ค้นหาพบ
                  <?php echo number_format($Product_Total)?> เบอร์
                  <?php
                  $page_num = 50;
                   ?>
                   <?php if ($filter['amount'] >=50):
                     $result_num1 = $filter['amount']+1;
                     $result_num2 = $filter['amount']+$page_num;
                     ?>
                    <?php else:
                      $result_num1 = 1;
                      $result_num2 = 50;
                      ?>
                   <?php endif;
                   echo "<span style='font-size:15px;'>(".$result_num1." - ".$result_num2.")</span>";
                   ?>
                </h2>
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
                        <h4 style="font-size:18px;" align="center" ><?php echo substr($row['product_number'],0,-7)?>-<?php echo substr($row['product_number'],3)?>
                          <?php
                           date_default_timezone_set('Asia/Bangkok');
                           if (date('Y-m-d') == $row['product_date']): ?>
                          <img src="<?php echo BASE_URL('images/new.gif')?>" style="width:40px">
                          <?php endif; ?>
                        </h4>
                        <div class="property-contents clearfix">
                          <header class="property-header clearfix">
                            <div class="pull-left">
                              <h6 style="font-size:12px;" class="entry-title">เครือข่าย
                                <img src="<?php echo BASE_URL('images/networklogo/'.$row['mobile_network_pic'])?>" style="height:20px;">
                              </h6>
                              <span style="font-size:11px;" class="property-location">
                                <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                 ส่งเสริมด้าน
                                 <img src="<?php echo BASE_URL('images/arrow_right.gif')?>" style="height:30px;">

                                <?php if ($row['product_type'] != ''): ?>
                                  <span style="color:black;"><?php echo $row['product_type']?></span>
                                  <?php else: ?>
                                    <span style="color:black;">ไม่มี</span>
                                <?php endif; ?>
                              </span> </div>
                            <button class="btn btn-default btn-price pull-right btn-3d btn-xs" data-hover="฿<?php echo number_format($row['product_sale'])?>"><strong>฿<?php echo number_format($row['product_sale'])?></strong></button>
                          </header>
                          <div class="property-meta clearfix">
                            <!-- <span><i class="fa fa-calculator"></i> ผลรวมของเบอร์ (<?php echo $row['Count_number']?>)</span>  -->
                            <span style="font-size:9px;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> อัพเดทวันที่ <?php echo $row['product_date']?></span> <!--<span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span>--> </div>
                          <!-- <div class="contents clearfix">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                          </div> -->
                          <!-- <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div> -->
                        </div>
                      </article>
                    </div>
                    <?php endforeach; ?>

                    <!-- โค้ดแบ่งหน้า -->

                    <?php if ($filter['amount'] >=50): ?>
                      <div class="col-lg-4 col-sm-6 layout-item-wrap">
                        <article class="property layout-item clearfix">
                          <h4 style="font-size:18px;" align="center" >


                            <?php
                            $page = 50;
                            $result = $filter['amount']-$page;
                            if ($result ==0) {
                              $result = '';
                            }
                            echo form_open('product/product_search/'.$result);
                            ?>

                            <input type="hidden" name="number" value="<?php echo $filter['number']?>">
                            <input type="submit" class="" value="ย้อนกลับ">
                            <?php echo form_close();?>

                          </h4>
                        </article>
                      </div>
                    <?php endif; ?>

                    <?php if (count($Product_List) == 50): ?>
                      <div class="col-lg-4 col-sm-6 layout-item-wrap">
                        <article class="property layout-item clearfix">
                          <h4 style="font-size:18px;" align="center" >
                            <?php
                            $page = 50;
                            $result = $filter['amount']+$page;
                            echo form_open('product/product_search/'.$result);
                            ?>

                            <input type="hidden" name="number" value="<?php echo $filter['number']?>">
                            <input type="submit" class="" value="หน้าต่อไป">
                            <?php echo form_close();?>
                          </h4>
                        </article>
                      </div>
                    <?php endif; ?>


                  </div>
                </div>
              </section>

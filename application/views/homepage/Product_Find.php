<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 layout-item-wrap">

      <div class="main-page clearfix" style="margin-top:20px; background-color:white;">
        <div class="container">
          <?php echo form_open('product/product_find'); ?>
          <div id="adv-search-form" class="clearfix">
            <fieldset>
              <select name="product_mobile_network" id="main-location">
                <?php if (@$filter['product_mobile_network'][0]['mobile_network_id'] != ''): ?>
                <option value="<?php echo $filter['product_mobile_network'][0]['mobile_network_id']?>"><?php echo $filter['product_mobile_network'][0]['mobile_network_name']?></option>
                <option value="">ทั้งหมด</option>
                <?php else: ?>
                <option value="">ทั้งหมด</option>
                <?php endif; ?>
                <?php foreach ($Product_Network as $row): ?>
                  <option value="<?php echo $row['mobile_network_id']?>"><?php echo $row['mobile_network_name']?></option>
                <?php endforeach; ?>
              </select>
              <select name="product_sale" id="property-sub-location">
                <?php if (@$filter['product_sale'] != ''): ?>

                <?php if ($filter['product_sale'] == 1): ?>
                  <option value="$filter['product_sale']"> ต่ำกว่า 1,500</option>
                <?php elseif($filter['product_sale'] == 2): ?>
                  <option value="$filter['product_sale']"> 1,500 - 3,000</option>
                <?php elseif($filter['product_sale'] == 3): ?>
                  <option value="$filter['product_sale']"> 3,100 - 5,000</option>
                <?php elseif($filter['product_sale'] == 4): ?>
                  <option value="$filter['product_sale']"> 5,100 - 10,000</option>
                <?php elseif($filter['product_sale'] == 5): ?>
                  <option value="$filter['product_sale']"> มากกว่า 10,000</option>
                <?php endif; ?>
                <option value="">ทุกราคา</option>
                <?php else: ?>
                <option value="">ทุกราคา</option>
                <?php endif; ?>
                <option value="1" > ต่ำกว่า 1,500</option>
                <option value="2" > 1,500 - 3,000</option>
                <option value="3" > 3,100 - 5,000</option>
                <option value="4" > 5,100 - 10,000</option>
                <option value="5" > มากกว่า 10,000</option>

              </select>
              <select id="property-status" name="product_type">
                <?php if ($filter['product_type'][0]['product_type_id'] != ''): ?>
                <option value="<?php echo $filter['product_type'][0]['product_type_id']?>"><?php echo $filter['product_type'][0]['product_type_name']?></option>
                <option value="">ทั้งหมด</option>
                <?php else: ?>
                  <option value="">ทั้งหมด</option>
                <?php endif; ?>

                <?php foreach ($Product_Type as $row): ?>
                  <option value="<?php echo $row['product_type_id']?>"><?php echo $row['product_type_name']?></option>
                <?php endforeach; ?>
              </select>
              <button type="submit" class="btn btn-default btn-lg text-center">ค้นหา <br class="hidden-sm hidden-xs">
                เบอร์สวย</button>
              </fieldset>
            </div>
            <?php echo form_close();?>
          </div>
        </div>

        <section id="home-property-listing">
          <header class="section-header home-section-header text-center">
            <div class="container">
              <?php if (count($Product_List) == 0): ?>
                <h2 class="wow slideInRight">ไม่พบรายการนี้หรือเบอร์มือถือหมดแล้ว</h2>
              <?php else: ?>
                <h2 class="wow slideInRight">รายการมือถือที่ค้นหา</h2>
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
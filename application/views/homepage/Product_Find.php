
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
                <?php if ($filter['product_type'][0]['product_type_name'] != ''): ?>
                <option value="<?php echo $filter['product_type'][0]['product_type_name']?>"><?php echo $filter['product_type'][0]['product_type_name']?></option>
                <option value=" ">ทั้งหมด</option>
                <?php else: ?>
                <option value=" ">ทั้งหมด</option>
                <?php endif; ?>

                <?php foreach ($Product_Type as $row): ?>
                  <option value="<?php echo $row['product_type_name']?>"><?php echo $row['product_type_name']?></option>
                <?php endforeach; ?>
              </select>


              <select name="product_requiment" id="property-sub-location">
                <?php if ($filter['product_requiment'] !=''): ?>
                <option value="<?php echo $filter['product_requiment']?>"><?php echo $filter['product_requiment']?></option>
                <?php else: ?>
                <option value="">-- เลขแนะนำ --</option>
                <?php endif; ?>
                <option value="789" >789</option>
                <option value="289" >289</option>
                <option value="456" >456</option>
                <option value="879" >879</option>
                <option value="365" >365</option>
                <option value="99" >99</option>
                <option value="56" >56</option>
                <option value="65" >65</option>
              </select>

              <select name="product_price">
                <?php if (@$filter['product_price'] != ''): ?>

                <?php if ($filter['product_price'] == ASC): ?>
                  <option value="$filter['product_price']">ต่ำ - สูง</option>
                <?php elseif($filter['product_price'] == DESC): ?>
                  <option value="$filter['product_price']">สูง - ต่ำ</option>
                <?php endif; ?>
                <option value="">-- เรียงราคา --</option>
                <?php else: ?>
                <option value="">-- เรียงราคา --</option>
                <?php endif; ?>
                <option value="ASC" >ต่ำ - สูง</option>
                <option value="DESC" >สูง - ต่ำ</option>
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
                        <figure class="feature-image"> <a class="clearfix zoom" href="#"><h3 align="center"><?php echo $row['product_number']?>
                          <?php
                           date_default_timezone_set('Asia/Bangkok');
                           if (date('Y-m-d') == $row['product_date']): ?>
                          <img src="<?php echo BASE_URL('images/new.gif')?>" style="width:40px">
                          <?php endif; ?>
                        </h3></a></figure>
                        <div class="property-contents clearfix">
                          <header class="property-header clearfix">
                            <div class="pull-left">
                              <h6 class="entry-title">เครือข่าย
                                <img src="<?php echo BASE_URL('images/networklogo/'.$row['mobile_network_pic'])?>" style="height:30px;">
                              </h6>
                              <span class="property-location"><i class="fa fa-star" aria-hidden="true"></i> ส่งเสริมด้าน <br>
                                <?php if ($row['product_type'] != ''): ?>
                                  <?php echo $row['product_type']?>
                                  <?php else: ?>
                                    ไม่มี
                                <?php endif; ?>
                              </span> </div>
                            <button class="btn btn-default btn-price pull-right btn-3d" data-hover="฿<?php echo number_format($row['product_sale'])?>"><strong>฿<?php echo number_format($row['product_sale'])?></strong></button>
                            </header>
                            <div class="property-meta clearfix">
                            <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> อัพเดทวันที่ <?php echo $row['product_date']?></span>
                            </div>
                          </div>
                        </article>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </section>

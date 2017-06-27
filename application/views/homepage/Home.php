<div class="main-slider-wrapper clearfix">
  <div id="main-slider">
    <div class="Slide">
      <img style="width:100%;" src="<?php echo BASE_URL('images/bg/'.$Config[0]['general_config_pic'])?>" alt="Slide">
    </div>
  </div>
  <div id="slider-contents">
    <div class="container text-center">
      <div class="jumbotron">
        <h1><?php echo $Config[0]['general_config_txt_top']?></h1>
        <div class="contents clearfix">
          <p style="font-size:20px;"><?php echo $Config[0]['general_config_txt_bot']?></p>
        </div>
        <a class="btn btn-warning btn-lg btn-3d" data-hover="สินค้าแนะนำ" href="#product_list" role="button">สินค้าแนะนำ</a> <a class="btn btn-default btn-border btn-lg" href="<?php echo SITE_URL('service')?>" role="button">ปรึกษาเรา</a> </div>
    </div>
  </div>
</div>
<div id="advance-search" class="main-page clearfix">
  <div class="container">
    <button class="btn top-btn">ค้นหาเบอร์สวย</button>
      <?php echo form_open('product/product_find'); ?>
      <div id="adv-search-form" class="clearfix">
      <fieldset>
        <select name="product_mobile_network" id="main-location">
          <option value="">--- เลือกเครือข่าย ---</option>
          <?php foreach ($Product_Network as $row): ?>
            <option value="<?php echo $row['mobile_network_id']?>"><?php echo $row['mobile_network_name']?></option>
          <?php endforeach; ?>
        </select>
        <select name="product_sale" id="property-sub-location">
          <option value="">--- เลือกราคา ---</option>
          <option value="1" > ต่ำกว่า 1,500</option>
          <option value="2" > 1,500 - 3,000</option>
          <option value="3" > 3,100 - 5,000</option>
          <option value="4" > 5,100 - 10,000</option>
          <option value="5" > มากกว่า 10,000</option>

        </select>
        <select name="product_type">
          <option value="">--- เลือกด้านที่ส่งเสริม ---</option>
          <?php foreach ($Product_Type as $row): ?>
              <option value="<?php echo $row['product_type_name']?>"><?php echo $row['product_type_name']?></option>
          <?php endforeach; ?>
        </select>

        <select name="product_requiment">
          <option value="">-- เลขแนะนำ --</option>
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
          <option value="">-- เรียงราคา --</option>
          <option value="ASC" >ต่ำ - สูง</option>
          <option value="DESC" >สูง - ต่ำ</option>
        </select>

        <!--<select id="property-type" name="type" >
          <option value="">All Types</option>
          <option value="apartment"> Apartment</option>
          <option value="condo"> Condo</option>
          <option value="farm"> Farm</option>
          <option value="loft"> Loft</option>
          <option value="lot"> Lot</option>
          <option value="multi-family-home"> Multi Family Home</option>
          <option value="single-family-home"> Single Family Home</option>
          <option value="townhouse"> Townhouse</option>
          <option value="villa"> Villa</option>
        </select>
        <select name="bedrooms" id="property-beds">
          <option value="">Beds</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="any">Any</option>
        </select>
        <select name="bathrooms" id="property-baths">
          <option value="">Bathrooms</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="any">Any</option>
        </select>
        <input type="text" name="min-area" id="property-min-area" placeholder="Min Area (sqft)">
        <input type="text" name="max-area" id="property-max-area" placeholder="Max Area (sqft)">
        <select name="min-price" id="property-min-price">
          <option value="any" selected="selected">Min Price</option>
          <option value="1000">$1000</option>
          <option value="5000">$5000</option>
          <option value="10000">$10000</option>
          <option value="50000">$50000</option>
          <option value="100000">$100000</option>
          <option value="200000">$200000</option>
          <option value="300000">$300000</option>
          <option value="400000">$400000</option>
          <option value="500000">$500000</option>
          <option value="600000">$600000</option>
          <option value="700000">$700000</option>
          <option value="800000">$800000</option>
          <option value="900000">$900000</option>
          <option value="1000000">$1000000</option>
          <option value="1500000">$1500000</option>
          <option value="2000000">$2000000</option>
          <option value="2500000">$2500000</option>
          <option value="5000000">$5000000</option>
        </select>
        <select name="max-price" id="property-max-price" >
          <option value="any" selected="selected">Max Price</option>
          <option value="5000">$5000</option>
          <option value="10000">$10000</option>
          <option value="50000">$50000</option>
          <option value="100000">$100000</option>
          <option value="200000">$200000</option>
          <option value="300000">$300000</option>
          <option value="400000">$400000</option>
          <option value="500000">$500000</option>
          <option value="600000">$600000</option>
          <option value="700000">$700000</option>
          <option value="800000">$800000</option>
          <option value="900000">$900000</option>
          <option value="1000000">$1000000</option>
          <option value="1500000">$1500000</option>
          <option value="2000000">$2000000</option>
          <option value="2500000">$2500000</option>
          <option value="5000000">$5000000</option>
          <option value="10000000">$10000000</option>
        </select>-->
      </fieldset>
      <button type="submit" class="btn btn-default btn-lg text-center">ค้นหา <br class="hidden-sm hidden-xs">
      เบอร์สวย</button>
    </div>
    <?php echo form_close();?>
  </div>
</div>
<section id="home-property-listing">
  <header id="product_list" class="section-header home-section-header text-center">
    <div class="container">
      <h2 class="wow slideInRight">รายการเบอร์มือถือแนะนำ</h2>
      <p class="wow slideInLeft" style="font-size:20px;">ทุกหมายเลข ได้คัดเลือกมาอย่างดี
        และจำแนกออกเป็นหมายเลขเสริมของแต่ละด้าน</p>
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
              <!-- <span><i class="fa fa-calculator"></i> ผลรวมของเบอร์ (<?php echo $row['Count_number']?>)</span>  -->
              <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> อัพเดทวันที่ <?php echo $row['product_date']?></span> <!--<span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span>--> </div>
            <!-- <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div> -->
            <!-- <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div> -->
          </div>
        </article>
      </div>
    <?php endforeach; ?>

      <?php //} ?>
      <!--<div class="col-lg-4 col-sm-6 layout-item-wrap">
        <article class="property layout-item clearfix">
          <figure class="feature-image"> <a class="clearfix zoom" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"><img data-action="zoom" src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/2.jpg" alt="Property Image"></a> <span class="btn btn-warning btn-sale">for sale</span> </figure>
          <div class="property-contents clearfix">
            <header class="property-header clearfix">
              <div class="pull-left">
                <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
              <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
            </header>
            <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div>
          </div>
        </article>
      </div>-->
      <!--<div class="col-lg-4 col-sm-6 layout-item-wrap">
        <article class="property layout-item clearfix">
          <figure class="feature-image"> <a class="clearfix zoom" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"><img data-action="zoom" src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/3.jpg" alt="Property Image"></a> <span class="btn btn-warning btn-sale">for sale</span> </figure>
          <div class="property-contents clearfix">
            <header class="property-header clearfix">
              <div class="pull-left">
                <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
              <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
            </header>
            <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div>
          </div>
        </article>
      </div>-->
      <!--<div class="col-lg-4 col-sm-6 layout-item-wrap">
        <article class="property layout-item clearfix">
          <figure class="feature-image"> <a class="clearfix zoom" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"><img data-action="zoom" src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/4.jpg" alt="Property Image"></a> <span class="btn btn-warning btn-sale">for sale</span> </figure>
          <div class="property-contents clearfix">
            <header class="property-header clearfix">
              <div class="pull-left">
                <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
              <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
            </header>
            <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div>
          </div>
        </article>
      </div>-->
      <!--<div class="col-lg-4 col-sm-6 layout-item-wrap">
        <article class="property layout-item clearfix">
          <figure class="feature-image"> <a class="clearfix zoom" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"><img data-action="zoom" src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/5.jpg" alt="Property Image"></a> <span class="btn btn-warning btn-sale">for sale</span> </figure>
          <div class="property-contents clearfix">
            <header class="property-header clearfix">
              <div class="pull-left">
                <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
              <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
            </header>
            <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div>
          </div>
        </article>
      </div>-->
      <!--<div class="col-lg-4 col-sm-6 layout-item-wrap">
        <article class="property layout-item clearfix">
          <figure class="feature-image"> <a class="clearfix zoom" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"><img data-action="zoom" src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/6.jpg" alt="Property Image"></a> <span class="btn btn-warning btn-sale">for sale</span> </figure>
          <div class="property-contents clearfix">
            <header class="property-header clearfix">
              <div class="pull-left">
                <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
              <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
            </header>
            <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            <div class="contents clearfix">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="author-box clearfix"> <a href="#" class="author-img"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/agents/1.jpg" alt="Agent Image"></a> <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite> <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span> </div>
          </div>
        </article>
      </div>-->
    </div>
  </div>
</section>
<!--<section id="announcement-section" class="text-center">
  <div class="container ">
    <h2 class="title wow slideInLeft">Download Our Latest App</h2>
    <p class="wow slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
      labore et dolore magna aliquan ut enim ad minim veniam.</p>
    <a class="btn" href="#"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/iso-btn.png" alt="ISO Button"></a> <a class="btn" href="#"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/playstore-btn.png" alt="Play Store Button"></a> </div>
</section>
<section id="home-property-for-rent-listing">
  <header class="section-header home-section-header text-center">
    <div class="container">
      <h2 class="wow slideInLeft">Office For Rent</h2>
      <p class="wow slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
        labore et dolore magna aliquan ut enim ad minim veniam.</p>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div id="property-for-rent-slider">
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/1.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/2.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/3.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/4.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/5.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="property clearfix">
            <figure class="feature-image"> <a class="clearfix" href="http://www.themesinspire.biz/templates/citynight-html/single-property.html"> <img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/property/6.jpg" alt="Property Image"></a> </figure>
            <div class="property-contents">
              <header class="property-header clearfix">
                <div class="pull-left">
                  <h6 class="entry-title"><a href="http://www.themesinspire.biz/templates/citynight-html/single-property.html">Guaranteed modern home</a></h6>
                  <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span> </div>
                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
              </header>
              <div class="property-meta clearfix"> <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> <span><i class="fa fa-bed"></i> 3 Beds</span> <span><i class="fa fa-bathtub"></i> 3 Baths</span> <span><i class="fa fa-cab"></i> Yes</span> </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--<section id="home-features-section" class="text-center">
  <header class="section-header home-section-header">
    <div class="container">
      <h2 class="wow slideInRight">WHY CHOOSE US</h2>
      <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
        labore et dolore magna aliquan ut enim ad minim veniam.</p>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xs-6">
        <div class="feature clearfix"> <i class="icon"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/features/1.png" alt="Feature Icon"></i>
          <h6 class="entry-title">Paying guest</h6>
          <p>Dolor sit amet consectetuer sed diam nonummy euismod tincidunt laoreet dolore magna</p>
        </div>
      </div>
      <div class="col-md-3 col-xs-6">
        <div class="feature clearfix"> <i class="icon"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/features/2.png" alt="Feature Icon"></i>
          <h6 class="entry-title">Paying guest</h6>
          <p>Dolor sit amet consectetuer sed diam nonummy euismod tincidunt laoreet dolore magna</p>
        </div>
      </div>
      <div class="col-md-3 col-xs-6">
        <div class="feature clearfix"> <i class="icon"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/features/3.png" alt="Feature Icon"></i>
          <h6 class="entry-title">Paying guest</h6>
          <p>Dolor sit amet consectetuer sed diam nonummy euismod tincidunt laoreet dolore magna</p>
        </div>
      </div>
      <div class="col-md-3 col-xs-6">
        <div class="feature clearfix"> <i class="icon"><img src="http://www.themesinspire.biz/templates/citynight-html/assets/images/features/4.png" alt="Feature Icon"></i>
          <h6 class="entry-title">Paying guest</h6>
          <p>Dolor sit amet consectetuer sed diam nonummy euismod tincidunt laoreet dolore magna</p>
        </div>
      </div>
    </div>
  </div>
</section>-->

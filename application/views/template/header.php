<!DOCTYPE html>

<html lang="en" ng-app="mainApp">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo BASE_URL('images/sim_icon.png')?>">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>เพชร พลังเลข : Number Energy</title>

  <!-- Styles -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins:400,600" rel="stylesheet">

  <!-- favicon and touch icons -->

  <!--<link rel="shortcut icon" href="http://www.themesinspire.biz/templates/citynight-html/assets/images/favicon.png" >-->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>theme/css/styles.min.css">

  <style>
  .thumbnail {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 300px;
  }

  .button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  </style>

</head>
<body>
  <div id="page-loader">
    <div class="loaders"> <img src="https://s-media-cache-ak0.pinimg.com/originals/0c/44/da/0c44dacf1b038014a6f941131c5e8aa2.gif" alt="First Loader" width="45%"> <img src="https://s-media-cache-ak0.pinimg.com/originals/0c/44/da/0c44dacf1b038014a6f941131c5e8aa2.gif" alt="First Loader" width="45%"> </div>
  </div>
  <header id="site-header">
    <div id="site-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="clearfix">
              <!--<button class="btn btn-warning btn-lg header-btn visible-sm pull-right">List your Property for Free</button>-->

              <!--<p class="timing-in-header">Open Hours: Monday to Saturday - 8am to 6pm</p>-->

            </div>
          </div>
          <div class="col-md-7">
            &nbsp;
            <!--<div class="clearfix">
            <button class="btn btn-warning btn-lg header-btn hidden-sm">List your Property for Free</button>
            <div class="language-in-header"> <i class="fa fa-globe"></i>
            <label for="language-dropdown"> Language:</label>
            <select name="currency" id="language-dropdown">
            <option value="ENG">ENG</option>
            <option value="AR">AR</option>
            <option value="UR">UR</option>
            <option value="NEO">NEO</option>
            <option value="AKA">AKA</option>
          </select>
        </div>
        <div class="currency-in-header"> <i class="fa fa-flag"></i>
        <label for="currency-dropdown"> Currency: </label>
        <select name="currency" id="currency-dropdown">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="AOA">AOA</option>
        <option value="XCD">XCD</option>
        <option value="PKR">PKR</option>
      </select>
    </div>
  </div>-->
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2" align="center">
      <figure id="site-logo"> <a href="<?php echo SITE_URL('Home')?>"><img src="https://support.apple.com/library/content/dam/edam/applecare/images/en_US/iphone/sim-card.png" alt="Logo" width="50%"></a> </figure>
    </div>
    <div class="col-md-7 col-sm-8">
      <nav id="site-nav" class="nav navbar-default">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo SITE_URL('Home')?>">หน้าแรก</a></li>
          <li><a href="<?php echo SITE_URL('abountus')?>">เกี่ยวกับเรา</a></li>
          <li> <a href="<?php echo SITE_URL('service')?>">บริการของเรา</a>
            <ul>
            <li><a href="<?php echo SITE_URL('howtopay')?>">ติดต่อสั่งซื้อเบอร์</a></li>
            <!-- <li><a href="#">บริการที่ 2</a></li>
            <li><a href="#">บริการที่ 3</a></li> -->
          </ul>
        </li>
        <li> <a href="<?php echo SITE_URL('product')?>">สินค้าของเรา</a>
          <ul>
            <?php foreach ($Product_Network as $row): ?>
              <li><a href="<?php echo SITE_URL('product/product_list/'.$row['mobile_network_id'])?>">
                <?php echo $row['mobile_network_name']?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- <li> <a href="<?php echo SITE_URL('news')?>">กิจกรรมและโปรโมชั่น</a> -->
            <!-- <ul>
              <li><a href="<?php echo SITE_URL('news/promotion')?>">โปรโมชั่น</a></li>
              <li><a href="<?php echo SITE_URL('news/event')?>">กิจกรรม</a></li>
            </ul> -->
          <!-- </li> -->
          <li>
            <a href="<?php echo SITE_URL('contents')?>">บทความ</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-md-3 col-sm-4">
      <div class="contact-in-header clearfix"> <i class="fa fa-mobile"></i> <span> Call Us Now <br>
        <strong><?php echo $Abountus[0]['abountus_phone']?></strong> </span> </div>
      </div>
    </div>
  </div>
</header>

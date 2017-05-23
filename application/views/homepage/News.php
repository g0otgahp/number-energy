<div class='container' style='margin-top:50px;'>
  <?php //if (count($Promotion) <=0): ?>
  <!-- <h3 align='center' class='wow slideInRight'>ไม่พบรายการโปรโมชั่น</h3> -->
  <?php //else: ?>
  <?php //if ($PromotionList == 0): ?>
  <h3 class='wow slideInRight'>กิจกรรมและโปรโมชั่น</h3>
  <?php //else: ?>
  <!-- <h3 class='wow slideInRight'>รายการโปรโมชั่นทั้งหมด</h3> -->
  <?php //endif; ?>
  <hr>
  <div class='row'>
    <div class='col-lg-8 col-sm-12 layout-item-wrap'>

      <!-- <?php //foreach ($Promotion as $row): ?>
        <div class='row panel wow slideInRight'>
          <div class='col-lg-5 col-sm-12'>
            <a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>'>
            <img src='<?php echo BASE_URL('images/actipromo/'.$row['actipromo_image']) ?>' style='width:100%; height:200px;'>
            </a>
          </div>
          <div class='col-lg-7 col-sm-12'>

            <div><a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>'><h4><?php echo $row['actipromo_name']?></h4></a></div>

            <div><?php echo $row['actipromo_subtitle']?></div>

            <div><a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>'>อ่านเพิ่ม...</a></div><hr>
            <div>เมื่อวันที่ : <span style='color:red;'><?php echo $row['actipromo_date']?></span></div>
          </div>
        </div>
        <hr>
        <?php //endforeach; ?> -->

        <div style='margin-bottom:30px;' id='results'><!-- content will be loaded here --></div>

      </div>
      <div class='row'>
        <div class='col-lg-4 col-sm-12 layout-item-wrap'>
          <div class='col-lg-12 col-sm-12'>
            <div class='panel'>
              <div class='panel-heading' align='center'><h4>ล่าสุด</h4></div>
              <div style='margin-left:15px; margin-right:15px;'>
                <h4>โปรโมชั่น</h4>
                <?php foreach ($PromotionTop as $row): ?>
                <div>- <a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>' class=''> <?php echo $row['actipromo_name'] ?></a></div>
                <?php endforeach; ?>
                <h4>กิจกรรม</h4>
                <?php foreach ($EventTop as $row): ?>
                <div>- <a href='<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>' class=''> <?php echo $row['actipromo_name'] ?></a></div>
                <?php endforeach; ?>
                <hr>
              </div>
            </div>
          </div>

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
  <?php //endif; ?>

  </div>



  <!-- Pagination -->
  <style>
  .contents{
    margin: 20px;
    padding: 20px;
    list-style: none;
    background: #F9F9F9;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  .contents p{
      margin-bottom: 10px;
  }
  .loading-div{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.56);
    z-index: 999;
    display:none;
  }
  .loading-div img {
    margin-top: 20%;
    margin-left: 50%;
  }

  /* Pagination style */
  .pagination{margin:0;padding:0;}
  .pagination p{
    display: inline;
    padding: 6px 10px 6px 10px;
    border: 1px solid #ddd;
    margin-right: -1px;
    font: 15px/20px Arial, Helvetica, sans-serif;
    background: #FFFFFF;
    box-shadow: inset 1px 1px 5px #F4F4F4;
  }
  .pagination p a{
      text-decoration:none;
      color: rgb(89, 141, 235);
  }
  .pagination p.first {
      border-radius: 5px 0px 0px 5px;
  }
  .pagination p.last {
      border-radius: 0px 5px 5px 0px;
  }
  .pagination p:hover{
    background: #CFF;
  }
  .pagination p.active{
    background: #F0F0F0;
    color: #333;
  }

  </style>

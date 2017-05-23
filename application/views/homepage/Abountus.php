<div class="container">
  <div class="row" style="margin-top:30px;">
    <div class="col-lg-offset-1 col-lg-10 col-sm-12 layout-item-wrap panel" align="center">

      <h3 align="center" class="wow slideInRight">
        เกี่ยวกับเรา
      </h3>
        <hr>
        <div><?php echo $Abountus[0]['abountus_detail']?></div>
        <hr>

        <h3 align="center" class="wow slideInRight">
          ติดต่อเรา
        </h3>
          <hr>
          <div class="col-md-offset-3 col-md-6 col-sm-12">
          <p><i class="fa fa-map-marker"></i> <?php echo $Abountus[0]['abountus_address']?></p>
          <p><i class="fa fa-phone"></i> <?php echo $Abountus[0]['abountus_phone']?></p>
          <p><i class="fa fa-envelope"></i> <?php echo $Abountus[0]['abountus_email']?></p>
          <p>Line : <?php echo $Abountus[0]['abountus_line']?></p>
          </div>

    </div>
  </div>
</div>


  <!-- <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">รายการขายประจำเดือน </div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div> -->

<?php foreach ($mobile_network as $row): ?>

  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner">
  <div class="card-body">
    <img class="icon" src="<?php echo BASE_URL('images/networklogo/'.$row['mobile_network_pic'])?>"style="width:175px; height:50px;">
    <!-- <i class="icon fa fa-shopping-basket fa-4x"></i> -->
    <div class="content">
      <div class="title"><?php echo $row['mobile_network_name'] ?> คงเหลือในระบบ</div>
      <div class="value" style="font-size:30px;">
        <?php
        $this->db->where('product_mobile_network',$row['mobile_network_id']);
        $this->db->where('product_status',1);

        echo number_format($this->db->count_all_results('dmn_product'));
        ?>
        <span class="sign">เบอร์</span></div>
    </div>
  </div>
</a>
  </div>
<?php endforeach; ?>

<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> <h3>บันทึกกิจการขาย</h3> </div>
    <div class="card-body no-padding">
      <table class="table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">สถานะ</div></th>
            <th><div align="center">วันที่ - เวลา</div></th>
            <th><div align="center">เบอร์</div></th>
            <th><div align="center">ชื่อลูกค้า</div></th>
            <th><div align="center">พนักงานขาย</div></th>
            <th><div align="center">ราคา</div></th>
          </tr>
        </thead>
        <tbody>
          <?php date_default_timezone_set('Asia/Bangkok');?>
          <?php foreach($product as $product){ ?>
              <tr>
            <td align="right"><?php echo $product['log_id'] ?></td>
            <?php if ($product['log_status'] == 1): ?>
              <td style="color:gray;">กำลังขาย</td>
            <?php elseif ($product['log_status'] == 3): ?>
              <td style="color:orange;">จองแล้ว</td>
            <?php elseif ($product['log_status'] == 4): ?>
              <td style="color:green;">ขายแล้ว</td>
            <?php else: ?>
              <td style="color:red;">ยกเลิก</td>
            <?php endif; ?>
            <td align="center"><?php echo $product['log_date']?></td>
            <?php if (date('Y-m-d') == $product['product_date']): ?>
            <td>
              <?php echo $product['product_number']?>
              <img src="<?php echo BASE_URL('images/new.gif')?>" width="40px">
            </td>
            <?php else: ?>
            <td><?php echo $product['product_number']?></td>
            <?php endif; ?>
            <td align="right"><a href="<?php echo site_url('Admin/customer_update')?>/<?php echo $product['customer_id']?>" target="_blank"><?php echo $product['customer_name'] ?></a></td>
            <td align="right"><a href="<?php echo site_url('Admin/employees_update')?>/<?php echo $product['employees_secretcode']?>" target="_blank"><?php echo $product['employees_name'] ?></a></td>
            <td align="right"><?php echo number_format($product['product_sale']) ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-blue-light">
  <div class="card-body">
    <i class="icon fa fa-book fa-4x"></i>
    <div class="content">
      <div class="title">จำนวนขายวันนี้ </div>
      <div class="value" style="font-size:40px;"><?php echo number_format($CountOrder)?><span class="sign">เบอร์</span></div>
    </div>
  </div>
</a>
  </div>

  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-yellow-light">
  <div class="card-body">
    <i class="icon fa fa-user-plus fa-4x"></i>
    <div class="content">
      <div class="title">สมาชิกในระบบ</div>
      <div class="value" style="font-size:40px;"><span class="sign"></span><?php echo number_format($CountMember)?></div>
    </div>
  </div>
</a>
  </div> -->

  <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title">Last Statuses</div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">
        <table class="table card-table">
          <thead>
            <tr>
              <th>Products</th>
              <th class="right">Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MicroSD 64Gb</td>
              <td class="right">12</td>
              <td><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td>
            </tr>
            <tr>
              <td>MiniPC i5</td>
              <td class="right">5</td>
              <td><span class="badge badge-warning badge-icon"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Pending</span></span></td>
            </tr>
            <tr>
              <td>Mountain Bike</td>
              <td class="right">1</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
            <tr>
              <td>Notebook</td>
              <td class="right">10</td>
              <td><span class="badge badge-danger badge-icon"><i class="fa fa-times" aria-hidden="true"></i><span>Cancelled</span></span></td>
            </tr>
            <tr>
              <td>Raspberry Pi2</td>
              <td class="right">6</td>
              <td><span class="badge badge-primary badge-icon"><i class="fa fa-truck" aria-hidden="true"></i><span>Shipped</span></span></td>
            </tr>
            <tr>
              <td>Flashdrive 128Mb</td>
              <td class="right">40</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-tab card-mini">
      <div class="card-header">
        <ul class="nav nav-tabs tab-stats">
          <li role="tab1" class="active">
            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Browsers</a>
          </li>
          <li role="tab2">
            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">OS</a>
          </li>
          <li role="tab2">
            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">More</a>
          </li>
        </ul>
      </div>
      <div class="card-body tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-browser ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">Google Chrome</li>
                <li class="ct-label ct-series-b">Firefox</li>
                <li class="ct-label ct-series-c">Safari</li>
                <li class="ct-label ct-series-d">IE</li>
                <li class="ct-label ct-series-e">Opera</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab2">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-os ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">iOS</li>
                <li class="ct-label ct-series-b">Android</li>
                <li class="ct-label ct-series-c">Windows</li>
                <li class="ct-label ct-series-d">OSX</li>
                <li class="ct-label ct-series-e">Linux</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab3">
        </div>
      </div>
    </div>
  </div> -->

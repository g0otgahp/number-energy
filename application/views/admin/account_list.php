
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> บัญชีรายรับ - รายจ่าย </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">วันที่</div></th>
            <!-- <th><div align="center">ประเภทบัญชี</div></th> -->
            <th><div align="center">รหัสบัญชี</div></th>
            <th><div align="center">รายการ</div></th>
            <th><div align="right">รายละเอียด</div></th>
            <th><div align="center">รายรับ</div></th>
            <th><div align="center">รายจ่าย</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($account as $account){ ?>
          <?php
          		if($account['account_type']==1){
					$quantity1 = $account['account_quantity'];
					$quantity2 = 0;
				}else{
					$quantity1 = 0;
					$quantity2 = $account['account_quantity'];
				}
		  ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/account_detail')?>/<?php echo $account['account_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td><?php echo $account['account_date']?></td>
            <td><?php echo $account['account_type_name']?></td>
            <!-- <td><?php echo $account['account_category_code']?></td> -->
            <td><?php echo $account['account_category_list']?></td>
            <td><?php echo $account['account_detail']?></td>
            <td align="right"><?php echo number_format($quantity1,2) ?> บาท</td>
            <td align="right"><?php echo number_format($quantity2,2) ?> บาท</td>
          </tr>
          <?php $i++ ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <a href="<?php echo site_url('Admin/account_insert')?>">
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions"> <i class="icon fa fa-plus"></i> <span class="help-text">Shortcut</span> </button>
  </a>
  <!--<div class="toggle-content">
    <ul class="actions">
      <li><a href="#">เพิ่มข้อมูลกิจกรรมและโปรโมชั่น</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>-->
</div>

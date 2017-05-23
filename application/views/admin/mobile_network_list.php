
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> เครือข่ายมือถือ </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">รูปภาพ</div></th>
            <th><div align="center">รหัสเครือข่าย</div></th>
            <th><div align="center">ชื่อเครือข่าย</div></th>
            <th><div align="center">จำนวนเบอร์ทั้งหมด</div></th>
            <th><div align="center">จัดการข้อมูล</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($mobile_network as $mobile_network){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/mobile_network_update')?>/<?php echo $mobile_network['mobile_network_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="center">
              <img src="<?php echo BASE_URL('images/networklogo/'.$mobile_network['mobile_network_pic'])?>" style="height:25px;">
            </td>
            <td align="center"><?php echo $mobile_network['mobile_network_code']?></td>
            <td><?php echo $mobile_network['mobile_network_name']?></td>
            <td align="right"><?php
            	$this->db->where('product_mobile_network',$mobile_network['mobile_network_id']);
				echo $this->db->count_all_results('dmn_product');
			?> หมายเลข</td>
            <td></td>
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
  <a href="<?php echo site_url('Admin/mobile_network_insert')?>">
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

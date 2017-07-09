
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> <h3>รายการสั่งจองเบอร์</h3> </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">วันที่ร้องขอ</div></th>
            <th><div align="center">เบอร์</div></th>
            <th><div align="center">พนักงาน</div></th>
            <th><div align="center">สถานะ</div ></th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; ?>
          <?php foreach($find as $info){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/find_number_update')?>/<?php echo $info['order_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="center"><?php echo $info['order_date']?></td>
            <td align="center"><?php echo substr($info['order_number'],0,-7)?>-<?php echo substr($info['order_number'],3)?></td>
            <td align="center"><?php echo $info['employees_name']?></td>

            <?php if ($info['order_status'] == 1): ?>
              <td align="center" style="color:gray;">รอการยืนยัน</td>
            <?php elseif ($info['order_status'] == 2): ?>
              <td align="center" style="color:green;">ยืนยันแล้ว</td>
            <?php else: ?>
              <td align="center" style="color:red;">ยกเลิก</td>
            <?php endif; ?>
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
  <a href="<?php echo site_url('Admin/find_number_insert')?>">
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


<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> กิจกรรมและโปรโมชั่น </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">วันที่</div></th>
            <th><div align="center">กิจกรรมและโปรโมชั่น</div></th>
            <th><div align="center">กลุ่มเป้าหมาย</div></th>
            <th><div align="center">วันทีเริ่มต้น - สิ้นสุด</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($actipromo as $actipromo){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/actipromo_update')?>/<?php echo $actipromo['actipromo_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td><?php echo $actipromo['actipromo_date']?></td>
            <td><?php echo $actipromo['actipromo_name']?></td>
            <td><?php echo $actipromo['actipromo_target']?></td>
            <td align="center"><?php echo $actipromo['actipromo_date']?> ถึง <?php echo $actipromo['actipromo_date_end']?></td>
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
  <a href="<?php echo site_url('Admin/actipromo_insert/new')?>">
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

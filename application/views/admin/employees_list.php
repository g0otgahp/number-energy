
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> ข้อมูลพนักงาน </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">รายชื่อพนักงาน</div></th>
            <th><div align="center">เบอร์ติดต่อ</div></th>
            <th><div align="center">อีเมล์</div></th>
            <th><div align="center">ระดับการใช้งาน</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($employees as $employees){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/employees_update')?>/<?php echo $employees['employees_secretcode']?>';">
            <td align="center"><?php echo $i ?></td>
            <td><?php echo $employees['employees_name']?></td>
            <td><?php echo $employees['employees_tel']?></td>
            <td><?php echo $employees['dmn_user_username']?></td>
            <td><?php echo $employees['dmn_level_name']?></td>
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
  <a href="<?php echo site_url('Admin/employees_insert')?>">
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

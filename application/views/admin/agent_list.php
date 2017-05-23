
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> ข้อมูลตัวแทน </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">รหัสตัวแทน</div></th>
            <th><div align="center">รายชื่อตัวแทน</div></th>
            <th><div align="center">เบอร์ติดต่อ</div></th>
            <th><div align="center">อีเมล์</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($agent as $agent){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/agent_update')?>/<?php echo $agent['agent_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="center"><?php echo $agent['agent_code']?></td>
            <td><?php echo $agent['agent_name']?></td>
            <td><?php echo $agent['agent_tel']?></td>
            <td><?php echo $agent['agent_email']?></td>
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
  <a href="<?php echo site_url('Admin/agent_insert')?>">
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

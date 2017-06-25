
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> ประเภทของลูกค้า </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th width="20%"><div align="center">ลำดับ</div></th>
            <th><div align="left">ชื่อประเภท</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($customer_Type as $row){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/customer_type_update')?>/<?php echo $row['relate_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="left"><?php echo $row['relate_name']?></td>
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
  <a href="<?php echo site_url('Admin/customer_type_insert')?>">
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions"> <i class="icon fa fa-plus"></i> <span class="help-text">Shortcut</span> </button>
  </a>
</div>

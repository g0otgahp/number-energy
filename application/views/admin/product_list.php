
<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> ข้อมูลสินค้า </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">เครือข่าย</div></th>
            <th><div align="center">เบอร์</div></th>
            <th><div align="center">ผลรวม</div></th>
            <th><div align="center">ราคาซื้อ</div></th>
            <th><div align="center">ราคาขาย</div></th>
            <th><div align="center">ตัวแทน</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1 ?>
          <?php foreach($product as $product){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/product_update')?>/<?php echo $product['product_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="center"><?php echo $product['mobile_network_name']?></td>
            <td><?php echo $product['product_number']?></td>
            <td align="center">[<?php echo $product['Count_number']?>]</td>
            <td align="right"><?php echo number_format($product['product_cost'],2)?> บาท</td>
            <td align="right"><?php echo number_format($product['product_sale'],2)?> บาท</td>
            <td><?php echo $product['agent_name']?></td>
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
  <a href="<?php echo site_url('Admin/product_insert')?>">
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

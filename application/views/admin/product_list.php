<div class="col-xs-12">
  <div class="card">
    <a href="<?php echo SITE_URL('Product_process/delete_product_all/')?>" style="font-size:12px; color:red;" class="btn" onclick="return confirm('คุณแน่ใจว่าต้องการลบสินค้าทั้งหมด?')">ลบสินค้าทั้งหมด</a>
    <div class="card-header"> <h3>เบอร์ที่กำลังขาย <a href="<?php echo SITE_URL('admin/product_all/sale')?>" style="font-size:12px;" target="_blank">ดูทั้งหมด</a></h3> </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">วันที่เพิ่ม</div></th>
            <th><div align="center">เครือข่าย</div></th>
            <th><div align="center">เบอร์</div></th>
            <!-- <th><div align="center">ผลรวม</div></th> -->
            <th><div align="center">ราคาขาย</div></th>
            <th><div align="center">ตัวแทน</div></th>
            <th><div align="center">สถานะ</div></th>
            <th><div align="center">ตัวเลือก</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1; date_default_timezone_set('Asia/Bangkok');?>
          <?php foreach($product as $product){ ?>
            <?php if ($product['product_status'] == 1 || $product['product_status'] == 99): ?>
              <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/product_update')?>/<?php echo $product['product_id']?>';">
              <?php else: ?>
              <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/product_detail')?>/<?php echo $product['product_id']?>';">
            <?php endif; ?>
            <td align="center"><?php echo $i ?></td>
            <td align="center"><?php echo $product['product_date']?></td>
            <td align="center"><?php echo $product['mobile_network_name']?></td>
            <?php if (date('Y-m-d') == $product['product_date']): ?>
            <td>
              <?php echo substr($product['product_number'],0,-7)?>-<?php echo substr($product['product_number'],3)?>
              <img src="<?php echo BASE_URL('images/new.gif')?>" width="40px">
            </td>
            <?php else: ?>
            <td><?php echo substr($product['product_number'],0,-7)?>-<?php echo substr($product['product_number'],3)?></td>
            <?php endif; ?>
            <!-- <td align="center">[<?php echo $product['Count_number']?>]</td> -->
            <!-- <td align="right"><?php echo number_format($product['product_cost'],2)?> บาท</td> -->
            <td align="right"><?php echo number_format($product['product_sale'],2)?> บาท</td>
            <td><?php echo $product['agent_name']?></td>
            <?php if ($product['product_status'] == 1): ?>
              <td style="color:gray;">กำลังขาย</td>
            <?php elseif ($product['product_status'] == 3): ?>
              <td style="color:orange;">จองแล้ว</td>
            <?php elseif ($product['product_status'] == 4): ?>
              <td style="color:green;">ขายแล้ว</td>
            <?php else: ?>
              <td style="color:red;">ยกเลิก</td>
            <?php endif; ?>
            <?php if ($product['product_requiment'] == 0): ?>
            <td align="center"><a href="<?php echo SITE_URL('Product_process/product_requiment/'.$product['product_id']."/"."1")?>" class="btn btn-default btn-xs">ไม่แนะนำ</a></td>
            <?php else: ?>
            <td align="center"><a href="<?php echo SITE_URL('Product_process/product_requiment/'.$product['product_id']."/"."0")?>" class="btn btn-success btn-xs">เบอร์แนะนำ</a></td>
            <?php endif; ?>
          </tr>


          <?php $i++ ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-xs-12">
  <div class="card">
    <div class="card-header"> <h3>เบอร์เสีย  <a href="<?php echo SITE_URL('admin/product_all/trash')?>" style="font-size:12px;" target="_blank">ดูทั้งหมด</a> </h3> </div>
    <div class="card-body no-padding">
      <table class="datatable table table-hover primary" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th><div align="center">ลำดับ</div></th>
            <th><div align="center">วันที่เพิ่ม</div></th>
            <th><div align="center">เครือข่าย</div></th>
            <th><div align="center">เบอร์</div></th>
            <!-- <th><div align="center">ผลรวม</div></th> -->
            <th><div align="center">ราคาซื้อ</div></th>
            <th><div align="center">ราคาขาย</div></th>
            <th><div align="center">ตัวแทน</div></th>
            <th><div align="center">สถานะ</div></th>
          </tr>
        </thead>
        <tbody>
        	<?php $i = 1; date_default_timezone_set('Asia/Bangkok');?>
          <?php foreach($trash as $row){ ?>
          <tr style="cursor: pointer;" onclick="document.location = '<?php echo site_url('Admin/product_update')?>/<?php echo $row['product_id']?>';">
            <td align="center"><?php echo $i ?></td>
            <td align="center"><?php echo $product['product_date']?></td>
            <td align="center"><?php echo $row['mobile_network_name']?></td>
            <?php if (date('Y-m-d') == $row['product_date']): ?>
            <td>
              <?php echo $row['product_number']?>
              <img src="<?php echo BASE_URL('images/new.gif')?>" width="40px">
            </td>
            <?php else: ?>
            <td><?php echo substr($product['product_number'],0,-7)?>-<?php echo substr($product['product_number'],3)?></td>
            <?php endif; ?>
            <!-- <td align="center">[<?php echo $row['Count_number']?>]</td> -->
            <td align="right"><?php echo number_format($row['product_cost'],2)?> บาท</td>
            <td align="right"><?php echo number_format($row['product_sale'],2)?> บาท</td>
            <td><?php echo $row['agent_name']?></td>
              <td style="color:red;">เบอร์เสีย</td>
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

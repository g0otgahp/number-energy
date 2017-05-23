
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <?php if (count(@$Import) > 0): ?>
          Import ข้อมูลสินค้า <span style="color:red;">(เคลียรายการด้านล่างก่อน จึงจะเพิ่มสินค้าใหม่ได้)</span>
          <?php else: ?>
          Import ข้อมูลสินค้า
          <?php endif; ?>
        </div>
        <?php if (count(@$Import) > 0): ?>
          <div class="card-body no-padding">
            <table class="datatable table table-hover primary" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="5%"><div align="center" style="font-size:11px;">ยกเลิก</div></th>
                  <th width="5%"><div align="center" style="font-size:11px;">ลำดับ</div></th>
                  <th><div align="right" style="font-size:11px;">เครือข่าย</div></th>
                  <th><div align="right" style="font-size:11px;">หมายเลข</div></th>
                  <th><div align="right" style="font-size:11px;">รวมเบอร์</div></th>
                  <th><div align="right" style="font-size:11px;">ต้นทุน</div></th>
                  <th><div align="right" style="font-size:11px;">ราคาขาย</div></th>
                  <th><div align="right" style="font-size:11px;">ตัวแทนขาย</div></th>
                  <th><div align="right" style="font-size:11px;">ด้านหลัก</div></th>
                  <th><div align="right" style="font-size:11px;">ด้านรอง</div></th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach($Import as $row){ ?>
                <tr>
                  <td align="center"><a href="<?php echo SITE_URL('Product_process/remove_import_by_id/'.$row['import_id']."/".$import_round[0]['round_round']) ?>" class="btn btn-danger btn-xs" onClick="javascript:return confirm('คุณต้องการลบรายการนี้ใช่หรือไม่');">X</td>
                  <td align="center"><?php echo $i ?></td>
                  <td align="right"><?php echo $row['mobile_network_name']?></td>
                  <td align="right"><?php echo $row['import_number']?></td>
                  <td align="right">[<?php echo $row['Count_number']?>]</td>
                  <td align="right"><?php echo $row['import_cost']?></td>
                  <td align="right"><?php echo $row['import_price']?></td>
                  <td align="right"><?php echo $row['agent_name']?></td>
                  <td align="right"><?php echo $row['product_type_name']?></td>
                  <td align="right"><?php echo $row['import_product_subtype_name']?></td>
                </tr>
                <?php $i++ ?>
                <?php } ?>
              </tbody>
            </table>
            <div align="center" style="padding:30px;">
              <h3>รายละเอียดรายการ</h3>
              <div style="margin-bottom:20px;">
                รวมทั้งหมด <span style='color:red;'><?php echo count(@$Import); ?> เบอร์</span>
              </div>
              <div style="margin-bottom:20px;">
                <?php foreach ($mobile_network as $row): ?>
                  <?php echo $row['mobile_network_name'] ?>
                    <?php
                    $this->db->where('import_round',$import_round[0]['round_round']);
                    $this->db->where('import_network_id',$row['mobile_network_id']);
                    echo "<span style='color:red;'>".$this->db->count_all_results('dmn_import_tmp')." เบอร์</span> ";
                    ?>
                <?php endforeach; ?>
              </div>
                <div style="margin-bottom:20px;">
                  Import รอบที่ <span style="color:red;"><?php echo $import_round[0]['round_round'] ?></span>
                  ณ วันที่/เวลา <span style="color:red;"><?php echo $import_round[0]['round_datetime']  ?></span>
                </div>
                <a href="<?php echo SITE_URL('') ?>" class="btn btn-success"> ยืนยันรายการรอบนี้ </a>
                <a href="<?php echo SITE_URL('Product_process/remove_import/'.$import_round[0]['round_round']) ?>" class="btn btn-danger" onClick="javascript:return confirm('คุณต้องการยกเลิกรายการทั้งหมดนี้ใช่หรือไม่');"> ยกเลิกทั้งหมด </a>
            </div>
          </div>
        <?php else: ?>
        <div class="card-body">
          <?php echo form_open_multipart('Product_process/product_upload','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
    <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">รอบที่</label>
        </div>
        <div class="col-md-1">
          <input type="text" name="product_round" id="product_round" value="<?php echo $round+1 ?>" readonly="readonly" style="background-color:#CCC;" class="form-control">
        </div>
      </div>
      <div class="form-group">
              <div class="col-md-3">
                <p></p>
              </div>
            </div>
      <!-- <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อัพเดทข้อมูลวันที่</label>
        </div>
        <div class="col-md-2">
        <input name="account_date_day" class="form-control btn btn-default" type="text" id="datepicker" readonly/>
      </div>
      </div> -->
            <div class="form-group">
              <div class="col-md-3">
                <p></p>
              </div>
            </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อัพโหลดไฟล์</label>
        </div>
        <div class="col-md-6">
          <input name="product_data_upload" id="product_data_upload" type="file" class="form-control" required="required" />
        </div>
      </div>
    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/product_import')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      <?php endif; ?>

      </div>
    </div>

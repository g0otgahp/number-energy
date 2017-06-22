<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      ข้อมูลสินค้า
    </div>
    <div class="card-body">
      <?php echo form_open('Product_process/product_detail_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group" style="margin-top:15px;">
            <div class="col-md-4">
              <label class="control-label">วันที่</label>
            </div>
            <div class="col-md-8">
              <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['product_date']." ".$product[0]['product_time']?>" readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              <label class="control-label">ประเภท</label>
            </div>
            <div class="col-md-8">
              <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['product_type']?>" readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              <label class="control-label">หมายเลขมือถือ</label>
            </div>
            <div class="col-md-8">
              <input name="product_number" type="text" class="form-control" id="product_number" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $product[0]['product_number']?>"  readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              <label class="control-label">แหล่งซื้อ</label>
            </div>
            <div class="col-md-8">
              <input name="product_agent" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $product[0]['agent_name']?>"  readonly="readonly">
            </div>
          </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="control-label">เครือข่าย</label>
              </div>
              <div class="col-md-8">
                <input name="product_agent" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $product[0]['mobile_network_name']?>"  readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="control-label">ราคาซื้อ</label>
              </div>
              <div class="col-md-8">
                <input name="product_cost" type="text" class="form-control" id="product_cost" placeholder="กรอกราคาซื้อ" required="required" value="<?php echo $product[0]['product_cost']?>"  readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="control-label">ราคาขาย</label>
              </div>
              <div class="col-md-8">
                <input name="product_sale" type="text" class="form-control" id="product_sale" placeholder="กรอกราคาขาย" required="required" value="<?php echo $product[0]['product_sale']?>"  readonly="readonly">
              </div>
            </div>

              <?php if ($product[0]['product_status'] == 4): ?>
                <div class="form-group" style="margin-top:15px">
                  <div class="col-md-12">
                    <label class="control-label">Note/รายละเอียด</label>
                  </div>
                  <div class="col-md-12">
                    <textarea name="product_note" rows="5" cols="40" class="form-control" readonly="readonly"><?php echo $product[0]['product_note']?></textarea>
                  </div>
                </div>
                <?php else: ?>
                  <div class="form-group" style="margin-top:15px">
                    <div class="col-md-12">
                      <label class="control-label">Note/รายละเอียด</label>
                    </div>
                    <div class="col-md-12">
                      <textarea name="product_note" rows="5" cols="40" class="form-control"><?php echo $product[0]['product_note']?></textarea>
                    </div>
                  </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9">
              <input name="product_id" id="product_id" type="hidden" value="<?php echo $product[0]['product_id']?>" />
              <?php if ($product[0]['product_status'] != 4): ?>
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php echo form_close()?>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          ข้อมูลรายการ
        </div>
        <div class="card-body" style="height:450px;">
          <div class="section">
            <div class="section-body">
              <div class="form-group" style="margin-top:15px;">
                <div class="col-md-12">
                  <label class="control-label">วันที่</label>
                </div>
                <div class="col-md-12">
                  <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['product_date']." ".$product[0]['product_time']?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group" style="margin-top:15px;">
                <div class="col-md-12">
                  <label class="control-label">ผู้สั่งจอง</label>
                </div>
                <div class="col-md-12">
                  <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['customer_name']?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group" style="margin-top:15px;">
                <div class="col-md-12">
                  <label class="control-label">พนักงานขาย</label>
                </div>
                <div class="col-md-12">
                  <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['employees_name']?>" readonly="readonly">
                </div>
              </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <label class="control-label">สถานะ</label>
                  </div>
                  <div class="col-md-12">
                    <?php if ($product[0]['product_status'] == 3): ?>
                      <span style="color:orange;">ยังไม่ชำระ</span>
                    <?php elseif ($product[0]['product_status'] == 4): ?>
                      <span style="color:green;">ชำระแล้ว</span>
                    <?php elseif ($product[0]['product_status'] == 99): ?>
                      <span style="color:red;">ยกเลิก</span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <div class="form-footer">
              <div class="form-group">
                <div class="col-md-12" style="margin-top:20px;">
                  <?php if ($product[0]['product_status'] == 3): ?>

                    <?php echo form_open('Product_process/product_payment')?>
                    <input name="product_id" type="hidden" value="<?php echo $product[0]['log_product_id']?>" />
                    <input name="customer_id" type="hidden" value="<?php echo $product[0]['log_customer_id']?>" />
                    <input name="employee_id" type="hidden" value="<?php echo $product[0]['log_employee_id']?>" />
                    <input name="product_sale" type="hidden" value="<?php echo $product[0]['product_sale']?>" />
                    <button type="submit" class="btn btn-success" onclick="return confirm('ยินยันการชำระเงิน')">ชำระเงิน</button>
                    <a href="<?php echo site_url('Product_process/product_cancle/'.$product[0]['log_product_id']."/".$product[0]['log_customer_id']."/".$product[0]['log_employee_id'])?>" onclick="return confirm('ต้องการยกเลิกรายการนี้?')"><button type="button" class="btn btn-danger">ยกเลิกรายการ</button></a>
                    <?php echo form_close()?>
                  <?php elseif ($product[0]['product_status'] == 4): ?>
                    <a href="<?php echo site_url('Admin/product_paper/'.$product[0]['log_product_id'])?>" target="_blank"><button type="button" class="btn btn-info">พิมพ์ใบเสร็จ</button></a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
  </div>
</div>
</div>
</div>

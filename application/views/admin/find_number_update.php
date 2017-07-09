
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      แก้ไขข้อมูลสินค้า
    </div>
    <div class="card-body">
      <?php echo form_open('Product_process/find_number_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
    <div class="form-group" style="margin-top:15px;">
      <div class="col-md-3">
        <label class="control-label">วันที่</label>
      </div>
      <div class="col-md-4">
        <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $find[0]['order_date'] ?>" readonly="readonly">
      </div>
    </div>

    <?php if ($find[0]['order_status'] == 1): ?>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">หมายเลขมือถือ</label>
      </div>
      <div class="col-md-3">
        <input name="order_number" type="text" class="form-control" id="product_number" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $find[0]['order_number']?>" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">เครือข่าย</label>
      </div>
      <div class="col-md-3">
        <select name="order_network" class="form-control" id="product_mobile_network" required="required">
          <option value="<?php echo $find[0]['mobile_network_id']?>"><?php echo $find[0]['mobile_network_name']?></option>
          <?php foreach($mobile_network as $mobile_network){ ?>
            <option value="<?php echo $mobile_network['mobile_network_id']?>"><?php echo $mobile_network['mobile_network_name']?></option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">พนักงานผู้ดูแล</label>
        </div>
        <div class="col-md-3">
          <select name="order_employees_id" class="form-control" required="required">
            <option value="<?php echo $find[0]['employees_id']?>"><?php echo $find[0]['employees_name']?></option>
            <?php foreach($employees as $employees){ ?>
              <option value="<?php echo $employees['employees_id']?>"><?php echo $employees['employees_name']?></option>
              <?php } ?>
            </select>
          </div>
        </div>

      <div class="form-group" style="margin-top:15px">
        <div class="col-md-3">
          <label class="control-label">Note/รายละเอียด</label>
        </div>
        <div class="col-md-4">
            <textarea name="order_note" rows="10" cols="40" class="form-control" placeholder="หมายเหตุ"><?php echo $find[0]['order_note']?></textarea>
        </div>
      </div>
      <?php else: ?>

        <div class="form-group">
          <div class="col-md-3">
            <label class="control-label">หมายเลขมือถือ</label>
          </div>
          <div class="col-md-3">
            <input name="product_number" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $find[0]['order_number']?>" readonly>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-3">
            <label class="control-label">เครือข่าย</label>
          </div>
          <div class="col-md-3">
            <input name="product_number" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $find[0]['mobile_network_name']?>" readonly>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">พนักงานผู้ดูแล</label>
            </div>
            <div class="col-md-3">
              <input name="product_number" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $find[0]['employees_name']?>" readonly>
              </div>
            </div>

          <div class="form-group" style="margin-top:15px">
            <div class="col-md-3">
              <label class="control-label">Note/รายละเอียด</label>
            </div>
            <div class="col-md-4">
                <textarea name="product_note" rows="10" cols="40" class="form-control" placeholder="หมายเหตุ" readonly><?php echo $find[0]['order_note']?></textarea>
            </div>
          </div>
        <?php endif;?>
    </div>
    </div>
    <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <input name="order_id" id="product_id" type="hidden" value="<?php echo $find[0]['order_id']?>" />
        <?php if ($find[0]['order_status'] == 1): ?>
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <?php endif; ?>
        <a href="<?php echo site_url('Product_process/find_number_delete')?>/<?php echo $find[0]['order_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
        <a href="<?php echo site_url('Admin/find_number')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
        <?php echo form_close()?>


      </div>
    </div>
    <?php if ($find[0]['order_status'] == 1): ?>
    <hr>

    <?php echo form_open('Product_process/order_accept','class="form form-horizontal"')?>
    <input name="order_id" id="product_id" type="hidden" value="<?php echo $find[0]['order_id']?>" />

    <div class="form-group"  style="margin-top:15px;">
      <div class="col-md-3">
        <label class="control-label">ราคาซื้อ</label>
      </div>
      <div class="col-md-4">
        <input name="product_cost" type="text" class="form-control" placeholder="กรอกราคาซื้อเพื่อยืนยันการสั่งจอง" required>
        <button type="submit" class="btn btn-success" onclick="return confirm('ต้องการยืนยันการสั่งจอง?')">ยืนยันการสั่งจอง</button>

      </div>
    </div>

      <?php echo form_close()?>
    <?php endif; ?>
    </div>
</div>
</div>
</div>

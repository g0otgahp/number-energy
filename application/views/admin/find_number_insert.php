
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      เพิ่มสั่งจองเบอร์
    </div>
    <div class="card-body">
      <?php echo form_open('Product_process/find_number_insert','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">

    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">หมายเลขมือถือ</label>
      </div>
      <div class="col-md-3">
        <input name="order_number" type="text" class="form-control" id="product_number" placeholder="กรอกหมายเลขมือถือ" required="required">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">เครือข่าย</label>
      </div>
      <div class="col-md-3">
        <select name="order_network" class="form-control" id="product_mobile_network" required="required">
          <option value="">--เลือกเครือข่ายมือถือ--</option>
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
            <option value="">--เลือกพนักงานดูแล--</option>
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
            <textarea name="order_note" rows="10" cols="40" class="form-control" placeholder="หมายเหตุ"></textarea>
        </div>
      </div>
    </div>
    </div>
    <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/find_number')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
        <?php echo form_close()?>
      </div>
    </div>
    </div>
</div>
</div>
</div>

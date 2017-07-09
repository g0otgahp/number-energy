
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      จองรายการ
    </div>
    <div class="card-body">
      <?php echo form_open('Product_process/product_book','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
    <div class="form-group" style="margin-top:15px;">
      <div class="col-md-3">
        <label class="control-label">วันที่</label>
      </div>
      <div class="col-md-4">
        <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['product_date']." ".$product[0]['product_time']?>" readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">ประเภท</label>
      </div>
      <div class="col-md-4">
        <input name="product_type" type="text" class="form-control" required="required" value="<?php echo $product[0]['product_type']?>" readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">หมายเลขมือถือ</label>
      </div>
      <div class="col-md-3">
        <input name="product_number" type="text" class="form-control" id="product_number" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $product[0]['product_number']?>"  readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">แหล่งซื้อ</label>
      </div>
      <div class="col-md-3">
        <input name="product_agent" type="text" class="form-control" placeholder="กรอกหมายเลขมือถือ" required="required" value="<?php echo $product[0]['agent_name']?>"  readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">ราคาซื้อ</label>
      </div>
      <div class="col-md-2">
        <input name="product_cost" readonly="readonly" type="text" class="form-control" id="product_cost" placeholder="กรอกราคาซื้อ" required="required" value="<?php echo $product[0]['product_cost']?>"  >
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">ราคาขาย</label>
      </div>
      <div class="col-md-2">
        <input name="product_sale" readonly="readonly" type="text" class="form-control" id="product_sale" placeholder="กรอกราคาขาย" required="required" value="<?php echo $product[0]['product_sale']?>"  >
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label">ลูกค้า</label>
      </div>
      <div class="col-md-3">
        <select name="customer_id" class="selectpicker" data-live-search="true" required>
          <option value="">--เลือกลูกค้า--</option>
          <option value="0">(ไม่ใช่ลูกค้าในระบบ)</option>
          <?php foreach($customer as $info_customer){ ?>
            <option data-tokens="<?php echo $info_customer['customer_id']?>" value="<?php echo $info_customer['customer_id']?>"><?php echo $info_customer['customer_name']?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group" style="margin-top:15px;">
        <div class="col-md-3">
          <label class="control-label">พนักงานขาย</label>
        </div>
        <div class="col-md-3">
          <select name="employee_id" class="selectpicker" data-live-search="true" required>
            <option value="">--เลือกพนักงานขาย--</option>
            <?php foreach($employees as $info_employees){ ?>
              <option data-tokens="<?php echo $info_employees['employees_id']?>" value="<?php echo $info_employees['employees_id']?>"><?php echo $info_employees['employees_name']?></option>
              <?php } ?>
            </select>
          </div>
        </div>

    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <input name="product_id" id="product_id" type="hidden" value="<?php echo $product[0]['product_id']?>" />
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/product_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
  <?php echo form_close()?>
</div>
</div>
</div>

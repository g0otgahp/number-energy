
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> แก้ไขประเภทลูกค้า </div>
    <div class="card-body"> <?php echo form_open('Customer_process/customer_type_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อประเภท</label>
            </div>
            <div class="col-md-9">
              <input name="customer_type_id" type="hidden" value="<?php echo $customer_Type[0]['customer_type_id']?>">
              <input name="customer_type_name" type="text" value="<?php echo $customer_Type[0]['customer_type_name']?>" class="form-control" placeholder="กรอกชื่อประเภท" required="required">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/customer_type_delete')?>/<?php echo $customer_Type[0]['customer_type_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/customer_type_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

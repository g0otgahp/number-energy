
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> ตั้งค่าบริการ </div>
    <div class="card-body"> <?php echo form_open('Product_process/service_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">

          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อส่วนหัว</label>
            </div>
            <div class="col-md-9">
              <input name="service_name" type="text" class="form-control" placeholder="กรอกชื่อส่วนหัว" value="<?php echo $service[0]['service_name']?>">
            </div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">รายละเอียด บริการ</label>
        </div>
        <div class="col-md-9">
          <textarea name="service_detail" class="form-control"><?php echo $service[0]['service_detail']?></textarea>
        </div>
      </div>

      <div class="form-footer" style="margin-top:30px;">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          	<input name="service_id" type="hidden" value="<?php echo $service[0]['service_id']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/service_config')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>


<div class="col-md-12">
  <div class="card">
    <div class="card-header"> ตั้งค่าทั่วไป </div>
    <div class="card-body"> <?php echo form_open_multipart('Product_process/general_config_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">ข้อความด้านบน</label>
            <div class="col-md-9">
              <input name="general_config_txt_top" type="text" class="form-control" id="general_config_txt_top" placeholder="กรอกข้อความ" required="required" value="<?php echo $Config[0]['general_config_txt_top']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ข้อความด้านล่าง</label>
            </div>
            <div class="col-md-9">
              <input name="general_config_txt_bot" type="text" class="form-control" id="general_config_txt_bot" placeholder="กรอกข้อความ" required="required" value="<?php echo $Config[0]['general_config_txt_bot']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รูปภาพหน้าจอ</label>
            </div>
            <div class="col-md-6">
              <input name="general_config_pic" type="file" class="form-control">
              <p><img src="<?php echo BASE_URL('images/bg/'.$Config[0]['general_config_pic'])?>" style="height:200px;"></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รูปภาพแอดมิน</label>
            </div>
            <div class="col-md-6">
              <input name="admin_pic" type="file" class="form-control">
              <p><img src="<?php echo base_url('theme/assets/images/'.$Config[0]['general_config_admin_pic'])?>" style="height:50px;"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          	<input name="general_config_id" type="hidden" value="<?php echo $Config[0]['general_config_id']?>" />
            <input name="general_config_pic"  type="hidden" value="<?php echo $Config[0]['general_config_pic']?>" />
            <input name="admin_pic"  type="hidden" value="<?php echo $Config[0]['general_config_admin_pic']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/general_config')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

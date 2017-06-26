
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> เพิ่มเครือข่ายมือถือ </div>
    <div class="card-body"> <?php echo form_open_multipart('Product_process/mobile_network_insert','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">รหัสเครือข่าย</label>
            <div class="col-md-9">
              <input name="mobile_network_code" type="text" class="form-control" id="mobile_network_code" placeholder="กรอกรหัสเครือข่าย" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อเครือข่าย</label>
            </div>
            <div class="col-md-9">
              <input name="mobile_network_name" type="text" class="form-control" id="mobile_network_name" placeholder="กรอกชื่อเครือข่าย" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">อัพโหลดรูปภาพ</label>
            </div>
            <div class="col-md-6">
              <input name="network_img_upload" type="file" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/mobile_network_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

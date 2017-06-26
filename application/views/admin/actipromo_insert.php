
    <div class="col-md-12" >
      <div class="card">
        <div class="card-header">
          เพิ่มข้อมูลกิจกรรมและโปรโมชั่น
        </div>
        <div class="card-body">
          <?php echo form_open_multipart('Actipromo_process/actipromo_insert','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อกิจกรรมและโปรโมชั่น</label>
        <div class="col-md-9">
          <input name="actipromo_name" type="text" class="form-control" id="actipromo_name" placeholder="กรอกชื่อกิจกรรมหรือโปรโมชั่น" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">หัวข้อ (Title)</label>
        <div class="col-md-9">
          <input name="actipromo_title" type="text" class="form-control" id="" placeholder="กรอกหัวข้อ" required="required">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">ย่อหน้าแรก (SubTitle)</label>
        <div class="col-md-9">
          <input name="actipromo_subtitle" type="text" class="form-control" id="actipromo_subtitle" placeholder="กรอกย่อหน้าแรก" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">รูปภาพประกอบ</label>
        <div class="col-md-4">
          <input name="actipromo_image" type="file" class="form-control" id="actipromo_image" required="required" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">วันที่เริ่มต้น</label>
        <div class="col-md-4">
          <input name="actipromo_date" type="text" class="form-control datepicker"  required="required" placeholder="กรอกวันที่เริ่มต้น">
        </div>
      </div>
      <div class="form-group">
            <label class="col-md-3 control-label">วันที่สิ้นสุด</label>
            <div class="col-md-4">
              <input name="actipromo_date_end" type="text" class="form-control datepicker"  required="required" placeholder="กรอกวันที่สิ้นสุด">
            </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ประเภทกิจกรรมและโปรโมชั่น</label>
        <div class="col-md-9">
          <div class="radio radio-inline">
              <input type="radio" name="actipromo_type" id="radio10" value="1" required="required">
              <label for="radio10">
                กิจกรรม
              </label>
          </div>
          <div class="radio radio-inline">
              <input type="radio" name="actipromo_type" id="radio11" value="2" >
              <label for="radio11">
                โปรโมชั่น
              </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
      <label class="">รายละเอียด</label>
      <!-- <input name="actipromo_detail" type="text" class="form-control" id="actipromo_detail" placeholder="กรอกย่อหน้าแรก" required="required"> -->
      <textarea name="actipromo_detail" class="form-control" required="required">กรอกรายละเอียดที่นี่</textarea>
    </div>
  </div>
  <hr>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/actipromo_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

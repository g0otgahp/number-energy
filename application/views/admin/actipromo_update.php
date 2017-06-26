
    <div class="col-md-12" >
      <div class="card">
        <div class="card-header">
          แก้ไขข้อมูลกิจกรรมและโปรโมชั่น
        </div>
        <div class="card-body">
          <?php echo form_open_multipart('Actipromo_process/actipromo_update','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-3">
         	<img src="<?php echo base_url()?>images/actipromo/<?php echo $actipromo[0]['actipromo_image']?>" width="100%" style="margin-bottom:3%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ที่อยู่</label>
        <div class="col-md-9">
          <input type="text" class="form-control" readonly value="<?php echo BASE_URL('/news/detail/'.$actipromo[0]['actipromo_id'])?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อกิจกรรมและโปรโมชั่น</label>
        <div class="col-md-9">
          <input name="actipromo_name" type="text" class="form-control" id="actipromo_name" placeholder="กรอกชื่อกิจกรรมหรือโปรโมชั่น" required="required" value="<?php echo $actipromo[0]['actipromo_name']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">หัวข้อ (Title)</label>
        <div class="col-md-9">
          <input name="actipromo_title" type="text" class="form-control" id="" placeholder="กรอกหัวข้อ" required="required"  value="<?php echo $actipromo[0]['actipromo_title']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ย่อหน้าแรก (SubTitle)</label>
        <div class="col-md-9">
          <input name="actipromo_subtitle" type="text" class="form-control" id="actipromo_subtitle" placeholder="กรอกย่อหน้าแรก" required="required" value="<?php echo $actipromo[0]['actipromo_subtitle']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">รูปภาพประกอบ</label>
        <div class="col-md-4">
          <input name="actipromo_image" type="file" class="form-control" id="actipromo_image">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">วันที่เริ่มต้น</label>
        <div class="col-md-4">
          <input name="actipromo_date" type="text" class="form-control datepicker"  required="required" placeholder="กรอกวันที่เริ่มต้น" value="<?php echo $actipromo[0]['actipromo_date']?>">
        </div>
      </div>
      <div class="form-group">
            <label class="col-md-3 control-label">วันที่สิ้นสุด</label>
            <div class="col-md-4">
              <input name="actipromo_date_end" type="text" class="form-control datepicker"  required="required" placeholder="กรอกวันที่สิ้นสุด" value="<?php echo $actipromo[0]['actipromo_date_end']?>">
            </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ประเภทกิจกรรมและโปรโมชั่น</label>
        <div class="col-md-9">
          <div class="radio radio-inline">
              <input <?php if (!(strcmp($actipromo[0]['actipromo_type'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="actipromo_type" id="radio10" value="1" required="required">
              <label for="radio10">
                กิจกรรม
              </label>
          </div>
          <div class="radio radio-inline">
              <input <?php if (!(strcmp($actipromo[0]['actipromo_type'],"2"))) {echo "checked=\"checked\"";} ?> type="radio" name="actipromo_type" id="radio11" value="2" >
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
      <textarea name="actipromo_detail" class="form-control" placeholder="กรอกรายละเอียด" required="required"><?php echo $actipromo[0]['actipromo_detail']?></textarea>
    </div>
  </div>
  <hr>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <input name="actipromo_id" id="actipromo_id" type="hidden" value="<?php echo $actipromo[0]['actipromo_id']?>" />
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/actipromo_delete')?>/<?php echo $actipromo[0]['actipromo_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/actipromo_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>

      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

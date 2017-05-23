
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> ตั้งค่าเกี่ยวกับเรา </div>
    <div class="card-body"> <?php echo form_open('Product_process/abountus_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">ที่อยู่</label>
            <div class="col-md-9">
              <input name="abountus_address" type="text" class="form-control" placeholder="กรอกที่อยู่" value="<?php echo $Abountus[0]['abountus_address']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">เบอร์โทรศัพท์</label>
            </div>
            <div class="col-md-9">
              <input name="abountus_phone" type="text" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" value="<?php echo $Abountus[0]['abountus_phone']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">E-Mail</label>
            </div>
            <div class="col-md-9">
              <input name="abountus_email" type="text" class="form-control" placeholder="กรอกอีเมลล์" value="<?php echo $Abountus[0]['abountus_email']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Line</label>
            </div>
            <div class="col-md-9">
              <input name="abountus_line" type="text" class="form-control" placeholder="กรอกไลน์" value="<?php echo $Abountus[0]['abountus_line']?>">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">รายละเอียด เกี่ยวกับเรา</label>
        </div>
        <div class="col-md-9">
          <textarea name="abountus_detail" class="form-control"><?php echo $Abountus[0]['abountus_detail']?></textarea>
        </div>
      </div>

      <div class="form-footer" style="margin-top:30px;">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          	<input name="abountus_id" type="hidden" value="<?php echo $Abountus[0]['abountus_id']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/abountus_config')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

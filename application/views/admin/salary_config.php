
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> ตั้งค่าเงินเดือน </div>
    <div class="card-body"> <?php echo form_open('Product_process/salary_config_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">อัตราค่านายหน้า / Comission</label>
            <div class="col-md-3">
              <input name="dmn_salary_comission" type="text" class="form-control" placeholder="กรอกค่านายหน้า" required="required" value="<?php echo $salary[0]['dmn_salary_comission']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">อัตราหักเงินเดือน / วัน</label>
            </div>
            <div class="col-md-3">
              <input name="dmn_salary_day" type="text" class="form-control" placeholder="กรอกจำนวน" required="required" value="<?php echo $salary[0]['dmn_salary_day']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">อัตราหักเงินเดือน / ชั่วโมง</label>
            </div>
            <div class="col-md-3">
              <input name="dmn_salary_time" type="text" class="form-control" placeholder="กรอกจำนวน" required="required" value="<?php echo $salary[0]['dmn_salary_time']?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          	<input name="dmn_salary_id" type="hidden" value="<?php echo $salary[0]['dmn_salary_id']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/salary_config')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

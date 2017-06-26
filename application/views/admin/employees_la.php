
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          ลาหยุดพนักงาน
        </div>
        <div class="card-body">
          <?php echo form_open('Employees_process/employees_la','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">รหัสพนักงาน</label>
        <div class="col-md-3">
          <input type="text" required="required" class="form-control" value="EN - <?php echo $employees[0]['employees_id']?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-6">
          <input name="employees_name" type="text" required="required" class="form-control" id="employees_name" placeholder="กรอกชื่อ-สกุล" value="<?php echo $employees[0]['employees_name']?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">วันที่ลา</label>
        </div>
        <div class="col-md-3">
          <input name="employees_date_t" type="text" required="required" placeholder="กรอกวันที่" class="form-control datepicker">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ถึง</label>
        </div>
        <div class="col-md-3">
          <input name="employees_date_n" type="text" required="required" placeholder="กรอกวันที่" class="form-control datepicker">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เหตุผลการลา</label>
        </div>
        <div class="col-md-6">
          <input name="log_la_note" type="text" placeholder="กรอกเหตุผล" class="form-control">
        </div>
      </div>
    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <input name="secretcode" id="secretcode" type="hidden" value="<?php echo $employees[0]['employees_secretcode']?>" />
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/employees_update/'.$employees[0]['employees_secretcode'])?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

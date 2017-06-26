
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          เพิ่มข้อมูลพนักงาน
        </div>
        <div class="card-body">
          <?php echo form_open('Employees_process/employees_insert','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-9">
          <input name="employees_name" type="text" required="required" class="form-control" id="employees_name" placeholder="กรอกชื่อ-สกุล">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เบอร์ติดต่อ</label>
        </div>
        <div class="col-md-6">
          <input name="employees_tel" type="text" required="required" class="form-control" id="employees_tel" placeholder="กรอกเบอร์ติดต่อ">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อีเมล์</label>
        </div>
        <div class="col-md-6">
          <input name="dmn_user_username" type="email" required="required" class="form-control" id="dmn_user_username" placeholder="กรอกอีเมล์">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">รหัสผ่าน</label>
        </div>
        <div class="col-md-6">
          <input name="dmn_user_password" type="password" required="required" class="form-control" id="dmn_user_password" placeholder="กรอกรหัสผ่าน">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ระดับการใช้งาน</label>
        </div>
        <div class="col-md-3">
          <select name="dmn_user_level" class="form-control" required="required" id="dmn_user_level">
            <option value="">--- เลือกระดับการใช้งาน ---</option>
            <?php foreach($level as $level){ ?>
            <option value="<?php echo $level['dmn_level_id'] ?>"><?php echo $level['dmn_level_name'] ?></option>
            <?php } ?>
          </select>
        </div>


      </div>
    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/employees_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

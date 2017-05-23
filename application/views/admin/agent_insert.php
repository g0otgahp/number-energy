    
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          เพิ่มข้อมูลตัวแทน
        </div>
        <div class="card-body">
        <?php echo form_open('Agent_process/agent_insert','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">รหัสตัวแทน</label>
        <div class="col-md-2">
          <input name="agent_code" type="text" required="required" class="form-control" id="agent_code" placeholder="กรอกรหัสตัวแทน">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-6">
          <input name="agent_name" type="text" required="required" class="form-control" id="agent_name" placeholder="กรอกชื่อ-สกุล">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เบอร์ติดต่อ</label>
        </div>
        <div class="col-md-3">
          <input name="agent_tel" type="text" required="required" class="form-control" id="agent_tel" placeholder="กรอกเบอร์ติดต่อ">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อีเมล์</label>
        </div>
        <div class="col-md-3">
          <input name="agent_email" type="text" required="required" class="form-control" id="agent_email" placeholder="กรอกอีเมล์">
        </div>
      </div>
      
      
    </div>
  </div>
  
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <button type="button" class="btn btn-default">ยกเลิก</button>
      </div>
    </div>
  </div>
  <?php echo form_close()?>
        </div>
      </div>
    </div>

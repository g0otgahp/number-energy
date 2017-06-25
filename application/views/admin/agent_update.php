
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          แก้ไขข้อมูลตัวแทน
        </div>
        <div class="card-body">
        <?php echo form_open('Agent_process/agent_update','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">รหัสตัวแทน</label>
        <div class="col-md-2">
          <input name="agent_code" type="text" required="required" class="form-control" id="agent_code" placeholder="กรอกรหัสตัวแทน" value="<?php echo $agent[0]['agent_code']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-6">
          <input name="agent_name" type="text" required="required" class="form-control" id="agent_name" placeholder="กรอกชื่อ-สกุล" value="<?php echo $agent[0]['agent_name']?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เบอร์ติดต่อ</label>
        </div>
        <div class="col-md-3">
          <input name="agent_tel" type="text" required="required" class="form-control" id="agent_tel" placeholder="กรอกเบอร์ติดต่อ" value="<?php echo $agent[0]['agent_tel']?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อีเมล์</label>
        </div>
        <div class="col-md-3">
          <input name="agent_email" type="email" required="required" class="form-control" id="agent_email" placeholder="กรอกอีเมล์" value="<?php echo $agent[0]['agent_email']?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ติดต่อ/ลิ้งค์</label>
        </div>
        <div class="col-md-3">
          <input name="agent_link" type="text" class="form-control" placeholder="กรอกลิ้งค์ติดต่อ เช่น ลิ้งค์เฟสบุ๊ค" value="<?php echo $agent[0]['agent_link']?>">
        </div>
      </div>

      <div class="form-group" style="margin-top:15px;">
        <label class="col-md-3 control-label">ข้อมูลสำคัญ</label>
        <div class="col-md-6">
          <textarea name="agent_data" type="text" class="form-control"><?php echo $agent[0]['agent_data']?></textarea>
        </div>
      </div>

      <div class="form-group" style="margin-top:15px;">
        <label class="col-md-3 control-label">Note/หมายเหตุ</label>
        <div class="col-md-6">
          <textarea name="agent_note" type="text" class="form-control"><?php echo $agent[0]['agent_note']?></textarea>
        </div>
      </div>

    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <input name="agent_id" id="agent_id" type="hidden" value="<?php echo $agent[0]['agent_id']?>" />
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/agent_delete')?>/<?php echo $agent[0]['agent_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/agent_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
  <?php echo form_close()?>
        </div>
      </div>
    </div>

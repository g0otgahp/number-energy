
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          เพิ่มบันทึกกิจกรรม
        </div>
        <div class="card-body">
        <?php echo form_open('admin/history_save','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">

      <div class="form-group">
        <label class="col-md-3 control-label">วันที่เริ่มต้น</label>
        <div class="col-md-4">
          <input name="history_date" type="text" class="form-control datepicker"  required="required" placeholder="กรอกวันที">
        </div>
      </div>
      <div class="form-group" style="margin-top:15px;">
        <label class="col-md-3 control-label">Note/หมายเหตุ</label>
        <div class="col-md-6">
          <textarea name="history_note" type="text" rows="10" cols="40" class="form-control" placeholder="รายละเอียด"></textarea>
        </div>
      </div>
    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/index')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
  <?php echo form_close()?>
        </div>
      </div>
    </div>

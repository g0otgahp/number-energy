
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
        <label class="col-md-3 control-label"></label>
        <div class="col-md-3">
          <span style="color:green;">ลาเรียบร้อยแล้ว</span>
        </div>
      </div>
      <div class="form-group" style="margin-top:15px;">
        <label class="col-md-3 control-label">รหัสพนักงาน</label>
        <div class="col-md-3">
          <input type="text" required="required" class="form-control" value="EN - <?php echo $la_detail[0]['employees_id']?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-6">
          <input name="employees_name" type="text" required="required" class="form-control" id="employees_name" placeholder="กรอกชื่อ-สกุล" value="<?php echo $la_detail[0]['employees_name']?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">วันที่ลา</label>
        </div>
        <div class="col-md-3">
          <input type="text" required="required" class="form-control" value="<?php echo $la_detail[0]['log_la_date_start']?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ถึง</label>
        </div>
        <div class="col-md-3">
          <input  type="text" required="required" class="form-control" value="<?php echo $la_detail[0]['log_la_date_end']?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ลาเป็นเวลา</label>
        </div>
        <div class="col-md-3">
          <?php if ($la_detail[0]['log_la_day'] !=0): ?>
            <input type="text" required="required" class="form-control" value="<?php echo $la_detail[0]['log_la_day']?> วัน/ <?php echo $la_detail[0]['log_la_hour']?> ชั่วโมง" readonly="readonly">
            <?php else: ?>
            <input  type="text" required="required" class="form-control" value="<?php echo $la_detail[0]['log_la_hour']?> ชั่วโมง" readonly="readonly">
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เหตุผลการลา</label>
        </div>
        <div class="col-md-6">
          <input name="log_la_note" type="text" class="form-control"value="<?php echo $la_detail[0]['log_la_note']?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label"></label>
        </div>
        <div class="col-md-6">
          <a href="<?php echo site_url('Admin/employees_update/'.$la_detail[0]['employees_sc'])?>"><button type="button" class="btn btn-primary">ย้อนกลับ</button></a>
        </div>
      </div>

    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

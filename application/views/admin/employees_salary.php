
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          ข้อมูลเงินเดือนพนักงาน
        </div>
        <div class="card-body">
          <div class="form form-horizontal">
  <div class="section">
    <div class="section-body">

      <?php echo form_open('Admin/employees_salary_detail','class="form form-horizontal"')?>
      <div class="form-group">
        <label class="col-md-3 control-label">เงินเดือน ปี/เดือน</label>
        <div class="col-md-3">
          <select name="year" required="required" class="form-control">
            <option value="<?php echo $employees_salary[0]['value_year']?>"><?php echo $employees_salary[0]['value_year']?></option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
          </select>
        </div>
        <div class="col-md-3">
          <select name="month" required="required" class="form-control">
            <option value="<?php echo $employees_salary[0]['value_month']?>"><?php echo $employees_salary[0]['str_month']?></option>
            <option value="01">มกราคม</option>
            <option value="02">กุมภาพันธ์</option>
            <option value="03">มีนาคม</option>
            <option value="04">เมษายน</option>
            <option value="05">พฤษภาคม</option>
            <option value="06">มิถุนายน</option>
            <option value="07">กรกฏาคม</option>
            <option value="08">สิงหาคม</option>
            <option value="09">กันยายน</option>
            <option value="10">ตุลาคม</option>
            <option value="11">พฤศจิกายน</option>
            <option value="12">เดือนธันวาคม</option>
          </select>
        </div>
        <input name="secretcode" type="hidden" value="<?php echo $secretcode?>" />
        <button type="submit" class="btn btn-primary">ยืนยัน</button>
      </div>

<?php echo form_close()?>


      <div class="form-group">
        <label class="col-md-3 control-label">รหัสพนักงาน</label>
        <div class="col-md-3">
          <input type="text" required="required" class="form-control" value="EN - <?php echo $employees_salary[0]['employees_id']?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-6">
          <input name="employees_name" type="text" required="required" class="form-control" id="employees_name" placeholder="กรอกชื่อ-สกุล" value="<?php echo $employees_salary[0]['employees_name']?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ยอดขาย</label>
        </div>
        <div class="col-md-3">
          <input type="text" required="required" class="form-control" value="<?php echo $employees_salary[0]['comission']?> เบอร์" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">หยุดงาน</label>
        </div>
        <div class="col-md-3">
          <?php if ($employees_salary[0]['day'] !=0): ?>
            <input type="text" required="required" class="form-control" value="<?php echo $employees_salary[0]['day']?> วัน/ <?php echo $employees_salary[0]['time']?> ชั่วโมง" readonly="readonly">
            <?php else: ?>
            <input  type="text" required="required" class="form-control" value="<?php echo $employees_salary[0]['time']?> ชั่วโมง" readonly="readonly">
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ตำแหน่ง</label>
        </div>
        <div class="col-md-3">
          <input name="log_la_note" type="text" class="form-control"value="<?php echo $employees_salary[0]['dmn_level_name']?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">จำนวนเงินเดือนปกติ</label>
        </div>
        <div class="col-md-3">
          <input name="log_la_note" type="text" class="form-control"value="<?php echo number_format($employees_salary[0]['dmn_level_salary'])?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เงินเดือนคงเหลือ</label>
        </div>
        <div class="col-md-3">
          <input name="log_la_note" type="text" class="form-control"value="15,000" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label"></label>
        </div>
        <div class="col-md-3">
          <?php echo form_open('Admin/salary_paper')?>
          <input name="year" type="hidden" value="<?php echo $employees_salary[0]['value_year']?>" />
          <input name="month" type="hidden" value="<?php echo $employees_salary[0]['value_month']?>" />
          <input name="secretcode" type="hidden" value="<?php echo $secretcode?>" />
          <button type="submit" class="btn btn-info" target="_blank">พิมพ์ใบเสร็จ</button>
          <?php echo form_close()?>
        </div>
      </div>

    </div>
    </div>
  </div>
</div>
</div>
</div>

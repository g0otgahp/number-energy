
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          ข้อมูลเงินเดือนพนักงาน
        </div>
        <div class="card-body">
          <?php echo form_open('Admin/employees_salary_detail','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">เงินเดือน ปี/เดือน</label>
        <div class="col-md-3">
          <select name="year" required="required" class="form-control">
            <option value="">--เลือกปี--</option>
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
            <option value="">--เลือกเดือน--</option>
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


    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

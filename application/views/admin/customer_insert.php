    
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          เพิ่มข้อมูลลูกค้า
        </div>
        <div class="card-body">
          <?php echo form_open('Customer_process/customer_insert','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">ชื่อ-สกุล</label>
        <div class="col-md-9">
          <input name="customer_name" type="text" class="form-control" id="customer_name" placeholder="กรอกชื่อ-สกุล" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">เบอร์ติดต่อ</label>
        </div>
        <div class="col-md-9">
          <input name="customer_tel" type="text" class="form-control" id="customer_tel" placeholder="กรอกเบอร์ติดต่อ" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">อีเมล์</label>
        </div>
        <div class="col-md-9">
          <input name="customer_email" type="text" class="form-control" id="customer_email" placeholder="กรอกอีเมล์" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">เพศ</label>
        <div class="col-md-9">
          <div class="radio radio-inline">
              <input type="radio" name="customer_sex" id="radio10" value="1" required="required">
              <label for="radio10">
                ชาย
              </label>
          </div>
          <div class="radio radio-inline">
              <input type="radio" name="customer_sex" id="radio11" value="2" >
              <label for="radio11">
                หญิง
              </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">วันเดือนปีเกิด</label>
        </div>
        <div class="col-md-2">
          <select name="customer_birthday_day" class="form-control" id="customer_birthday_day" required="required">
            <option value="">--- วัน ---</option>
                <?php for($a = 1;$a <32;$a++){ ?>
                <option value="<?php echo $a ?>"><?php echo $a ?></option>
                 <?php } ?>
          </select>
        </div>
        <div class="col-md-2">
          <select name="customer_birthday_month" class="form-control" id="customer_birthday_month" required="required">
          <option value="">--- เดือน ---</option>
          <option value="01">มกราคม</option>
                <option value="02">กุมภาพันธุ์</option>
                <option value="03">มีนาคม</option>
                <option value="04">เมษายน</option>
                <option value="05">พฤษภาคม</option>
                <option value="06">มิถุนายน</option>
                <option value="07">กรกฎาคม</option>
                <option value="08">สิงหาคม</option>
                <option value="09">กันยายน</option>
                <option value="10">ตุลาคม</option>
                <option value="11">พฤศจิกายน</option>
                <option value="12">ธันวาคม</option>
          </select>
        </div>
        <div class="col-md-2">
          <select name="customer_birthday_year" class="form-control" id="customer_birthday_year" required="required">
          <option value="">--- ปี ---</option>
          <?php $i=0?>
                <?php for($b=0;$b<60;$b++){?>
                <option value="<?php echo (date('Y'))-$i ?>"><?php echo (date('Y')+543)-$i ?></option>
                <?php $i++ ?>
				<?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
              <div class="col-md-3">
                <p></p>
              </div>
            </div>
            <div class="form-group">
        <label class="col-md-3 control-label">อาชีพ</label>
        <div class="col-md-6">
          <input name="customer_job" type="text" class="form-control" id="customer_job" placeholder="กรอกอาชีพ" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">กลุ่มลูกค้า</label>
        <div class="col-md-3">
          <select name="customer_relate" class="form-control" id="customer_relate" required="required">
            <option value="">--- เลือกกลุ่มลูกค้า ---</option>
            <?php foreach($relate as $relate){ ?>
            <option value="<?php echo $relate['relate_id']?>"><?php echo $relate['relate_name']?></option>
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
        <button type="button" class="btn btn-default">ยกเลิก</button>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

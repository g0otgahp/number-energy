<?php 
	$year = substr($customer[0]['customer_birthday'], 0, 4);
	$month = substr($customer[0]['customer_birthday'], 5, 2);
	$day = substr($customer[0]['customer_birthday'], 8, 2);
	$month_array = array(
		'01' => "มกราคม",
		'02' => "กุมภาพันธุ์",
		'03' => "มีนาคม",
		'04' => "เมษายน",
		'05' => "พฤษภาคม",
		'06' => "มิถุนายน",
		'07' => "กรกฎาคม",
		'08' => "สิงหาคม",
		'09' => "กันยายน",
		'10' => "ตุลาคม",
		'11' => "พฤศจิกายน",
		'12' => "ธันวาคม",					
	);
?>

<div class="col-md-12">
  <div class="card">
    <div class="card-header"> แก้ไขข้อมูลลูกค้า </div>
    <div class="card-body"> <?php echo form_open('Customer_process/customer_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ-สกุล</label>
            <div class="col-md-9">
              <input name="customer_name" type="text" class="form-control" id="customer_name" placeholder="กรอกชื่อ-สกุล" required="required" value="<?php echo $customer[0]['customer_name']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">เบอร์ติดต่อ</label>
            </div>
            <div class="col-md-9">
              <input name="customer_tel" type="text" class="form-control" id="customer_tel" placeholder="กรอกเบอร์ติดต่อ" required="required" value="<?php echo $customer[0]['customer_tel']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">อีเมล์</label>
            </div>
            <div class="col-md-9">
              <input name="customer_email" type="text" class="form-control" id="customer_email" placeholder="กรอกอีเมล์" required="required" value="<?php echo $customer[0]['customer_email']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">เพศ</label>
            <div class="col-md-9">
              <div class="radio radio-inline">
                <input <?php if (!(strcmp($customer[0]['customer_sex'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="customer_sex" id="radio10" value="1" required="required">
                <label for="radio10"> ชาย </label>
              </div>
              <div class="radio radio-inline">
                <input <?php if (!(strcmp($customer[0]['customer_sex'],"2"))) {echo "checked=\"checked\"";} ?> type="radio" name="customer_sex" id="radio11" value="2" >
                <label for="radio11"> หญิง </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">วันเดือนปีเกิด</label>
            </div>
            <div class="col-md-2">
              <select name="customer_birthday_day" class="form-control" id="customer_birthday_day" required="required">
                <option value="<?php echo $day ?>"><?php echo $day ?></option>
                <?php for($a = 1;$a <32;$a++){ ?>
                <option value="<?php echo $a ?>"><?php echo $a ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col-md-2">
              <select name="customer_birthday_month" class="form-control" id="customer_birthday_month" required="required">
                <option value="<?php echo $month ?>"><?php echo $month_array[$month] ?></option>
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
                <option value="<?php echo $year ?>"><?php echo $year+543 ?></option>
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
          <input name="customer_job" type="text" class="form-control" id="customer_job" placeholder="กรอกอาชีพ" required="required" value="<?php echo $customer[0]['customer_job']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">กลุ่มลูกค้า</label>
        <div class="col-md-3">
          <select name="customer_relate" class="form-control" id="customer_relate" required="required">
            <option value="<?php echo $customer[0]['relate_id']?>"><?php echo $customer[0]['relate_name']?></option>
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
            <input name="customer_id" id="customer_id" type="hidden" value="<?php echo $customer[0]['customer_id']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/customer_delete')?>/<?php echo $customer[0]['customer_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')">
            <button type="button" class="btn btn-danger">ลบข้อมูล</button>
            </a> <a href="<?php echo site_url('Admin/customer_list')?>">
            <button type="button" class="btn btn-default">ยกเลิก</button>
            </a> </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

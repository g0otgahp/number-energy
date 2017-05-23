
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> แก้ไขประเภทบัญชีรายจ่าย </div>
    <div class="card-body">
      <?php echo form_open('Account_process/account_category_update','class="form form-horizontal"')?>
        <div class="section">
          <div class="section-body">
          	<div class="form-group">
              <div class="col-md-3">
                <label class="control-label">ประเภทบัญชี</label>
              </div>
              <div class="col-md-3">
                <select name="account_category_type" class="form-control" id="account_category_type" required="required">
                  <option value="<?php echo $account_category[0]['account_type_id']?>"><?php echo $account_category[0]['account_type_name']?></option>
                  <option value="1">รายรับ</option>
                  <option value="2">รายจ่าย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3">
                <p></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">รหัสบัญชี</label>
              <div class="col-md-2">
                <input name="account_category_code" type="text" class="form-control" id="account_category_code" placeholder="กรอกรหัสบัญชี" required="required" value="<?php echo $account_category[0]['account_category_code']?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3">
                <label class="control-label">รายการ</label>
              </div>
              <div class="col-md-9">
                <input name="account_category_list" type="text" class="form-control" id="account_category_list" placeholder="กรอกรายการ" required="required" value="<?php echo $account_category[0]['account_category_list']?>">
              </div>
            </div>
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <input name="account_category_id" id="account_category_id" type="hidden" value="<?php echo $account_category[0]['account_category_id']?>" />
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/account_category_delete')?>/<?php echo $account_category[0]['account_category_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/account_category_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
            </div>
          </div>
        </div>
      <?php echo form_close()?>
    </div>
  </div>
</div>

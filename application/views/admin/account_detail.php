

<div class="col-md-12">
  <div class="card">
    <div class="card-header"> บัญชีรายรับ - รายจ่าย </div>
    <div class="card-body"> <?php echo form_open('Account_process/account_insert','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">วันที่</label>
            </div>
            <div class="col-md-2">
              <input name="account_date" type="text" class="form-control" id="account_date" placeholder="<?php echo date('Y-m-d')?>" required="required" value="<?php echo $account[0]['account_date']?>" readonly="readonly" style="background-color:#CCC;">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ประเภทบัญชี</label>
            </div>
            <div class="col-md-3">
              <select name="account_type" class="form-control" id="account_type" required="required" readonly="readonly" style="background-color:#CCC;">
                <option value=""><?php echo $account[0]['account_type_name']?></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <p></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รายการ</label>
            </div>
            <div class="col-md-3">
              <select name="account_category" class="form-control" id="account_category" required="required" readonly="readonly" style="background-color:#CCC;">
                <option value=""><?php echo $account[0]['account_category_list']?></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <p></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รายละเอียด</label>
            </div>
            <div class="col-md-6">
              <input name="account_detail" type="text" class="form-control" id="account_detail" placeholder="กรอกรายละเอียด" required="required" readonly="readonly" style="background-color:#CCC;" value="<?php echo $account[0]['account_detail']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">จำนวนเงิน</label>
            </div>
            <div class="col-md-2">
              <input name="account_quantity" type="text" class="form-control" id="account_quantity" placeholder="กรอกจำนวนเงิน" required="required" readonly="readonly" style="background-color:#CCC;" value="<?php echo $account[0]['account_quantity']?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <a href="<?php echo site_url('Admin/account_delete')?>/<?php echo $account[0]['account_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/account_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

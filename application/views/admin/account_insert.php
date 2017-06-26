<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        jQuery('body').on('change','#account_type',function(){
            jQuery.ajax({
                'type':'POST',
                'url':'<?php echo site_url('Admin/get_account_category')?>',
                'cache':false,
                'data':{account_type:jQuery(this).val()},
                'success':function(html){
                    jQuery("#account_category").html(html);
                }
            });
            return false;
        });
    });
</script>


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
          <input name="account_date_day" class="form-control btn btn-default datepicker" type="text" placeholder="กรอกวันที่"/>
        </div>
      </div>
      <div class="form-group">
            <div class="col-md-3">
              <p></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ประเภทบัญชี</label>
            </div>
            <div class="col-md-3">
              <select name="account_type" class="form-control" id="account_type" required="required">
                <option value="">--- เลือกประเภทบัญชี ---</option>
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
            <div class="col-md-3">
              <label class="control-label">รายการ</label>
            </div>
            <div class="col-md-3">
              <select name="account_category" class="form-control" id="account_category" required="required">
                <option value="">--- เลือกรายการ ---</option>
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
              <input name="account_detail" type="text" class="form-control" id="account_detail" placeholder="กรอกรายละเอียด" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">จำนวนเงิน</label>
            </div>
            <div class="col-md-2">
              <input name="account_quantity" type="text" class="form-control" id="account_quantity" placeholder="กรอกจำนวนเงิน" value="" required="required">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/account_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

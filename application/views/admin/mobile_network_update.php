
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> แก้ไขเครือข่ายมือถือ </div>
    <div class="card-body"> <?php echo form_open_multipart('Product_process/mobile_network_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <label class="col-md-3 control-label">รหัสเครือข่าย</label>
            <div class="col-md-9">
              <input name="mobile_network_code" type="text" class="form-control" id="mobile_network_code" placeholder="กรอกรหัสเครือข่าย" required="required" value="<?php echo $mobile_network[0]['mobile_network_code']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อเครือข่าย</label>
            </div>
            <div class="col-md-9">
              <input name="mobile_network_name" type="text" class="form-control" id="mobile_network_name" placeholder="กรอกชื่อเครือข่าย" required="required" value="<?php echo $mobile_network[0]['mobile_network_name']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">แก้ไขรูปภาพ</label>
            </div>
            <div class="col-md-6">
              <input name="network_img_upload" type="file" class="form-control">
            </div>
            <img src="<?php echo BASE_URL('images/networklogo/'.$mobile_network[0]['mobile_network_pic'])?>" style="height:100px;">
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          	<input name="mobile_network_id" id="mobile_network_id" type="hidden" value="<?php echo $mobile_network[0]['mobile_network_id']?>" />
            <input name="mobile_network_pic" id="mobile_network_pic" type="hidden" value="<?php echo $mobile_network[0]['mobile_network_pic']?>" />
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/mobile_network_delete')?>/<?php echo $mobile_network[0]['mobile_network_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/mobile_network_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

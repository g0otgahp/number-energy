
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> เพิ่มบทความ </div>
    <div class="card-body"> <?php echo form_open('Product_process/contents_insert','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อบทความ</label>
            </div>
            <div class="col-md-9">
              <input name="story_name" type="text" class="form-control" placeholder="กรอกชื่อบทความ" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รายละเอียดบทความ</label>
            </div>
            <div class="col-md-9">
              <textarea name="story_detail" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/contents_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>

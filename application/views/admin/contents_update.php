
<div class="col-md-12">
  <div class="card">
    <div class="card-header"> แก้ไขบทความ </div>
    <div class="card-body"> <?php echo form_open_multipart('Product_process/contents_update','class="form form-horizontal"')?>
      <div class="section">
        <div class="section-body">

          <?php if (@$contents[0]['story_img'] != 0): ?>

          <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-3">
                <img src="<?php echo base_url()?>images/contents/<?php echo @$contents[0]['story_img']?>" width="100%" style="margin-bottom:3%;">
              </div>
            </div>

          <?php endif; ?>

          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">ชื่อบทความ</label>
            </div>
            <div class="col-md-9">
              <input name="story_id" type="hidden" value="<?php echo $contents[0]['story_id']?>">
              <input name="story_name" type="text" value="<?php echo $contents[0]['story_name']?>" class="form-control" placeholder="กรอกชื่อประเภท" required="required">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">รูปภาพประกอบ</label>
            <div class="col-md-4">
              <input name="story_img" type="file" class="form-control">
            </div>
            <?php if (@$contents[0]['story_img'] != 0): ?>
            <div class="col-md-1">
              <a href="<?php echo site_url('Admin/contents_delete_img')?>/<?php echo $contents[0]['story_id']?>" onclick="return confirm('ต้องการลบลบภาพออก?')"><button type="button" class="btn btn-danger btn-xs">ลบภาพประกอบ</button></a>
            </div>
          <?php endif; ?>
          </div>

          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รายละเอียดบทความ</label>
            </div>
            <div class="col-md-9">
              <textarea name="story_detail" class="form-control"><?php echo $contents[0]['story_detail']?></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="<?php echo site_url('Admin/contents_delete')?>/<?php echo $contents[0]['story_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a>
            <a href="<?php echo site_url('Admin/contents_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
          </div>
        </div>
      </div>
      <?php echo form_close()?> </div>
  </div>
</div>


    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          เพิ่มข้อมูลสินค้า
        </div>
        <div class="card-body">
          <?php echo form_open('Product_process/product_insert','class="form form-horizontal"')?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
              <div class="col-md-3">
                <label class="control-label">เครือข่าย</label>
              </div>
              <div class="col-md-3">
                <select name="product_mobile_network" class="form-control" id="product_mobile_network" required="required">
                  <option value="">--- เลือกเครือข่าย ---</option>
                  <?php foreach($mobile_network as $mobile_network){ ?>
                  <option value="<?php echo $mobile_network['mobile_network_id']?>"><?php echo $mobile_network['mobile_network_name']?></option>
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
        <div class="col-md-3">
          <label class="control-label">หมายเลขมือถือ</label>
        </div>
        <div class="col-md-3">
          <input name="product_number" type="text" class="form-control" id="product_number" placeholder="กรอกหมายเลขมือถือ" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ต้นทุน</label>
        </div>
        <div class="col-md-2">
          <input name="product_cost" type="text" class="form-control" id="product_cost" placeholder="กรอกราคาซื้อ" required="required">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">ตัวแทน</label>
        </div>
        <div class="col-md-3">
          <select name="product_agent" class="form-control" id="product_agent" required="required">
            <option value="">--- เลือกตัวแทน ---</option>
            <?php foreach($agent as $agent){ ?>
            <option value="<?php echo $agent['agent_id']?>"><?php echo $agent['agent_name']?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      
        <div class="form-group" style="margin-top:15px">
          <div class="col-md-3">
            <label class="control-label">Note/รายละเอียด</label>
          </div>
          <div class="col-md-4">
              <textarea name="product_note" rows="5" cols="40" class="form-control" placeholder="หมายเหตุ"></textarea>
          </div>
        </div>

    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <a href="<?php echo site_url('Admin/product_list')?>"><button type="button" class="btn btn-default">ยกเลิก</button></a>
      </div>
    </div>
  </div>
<?php echo form_close()?>
        </div>
      </div>
    </div>

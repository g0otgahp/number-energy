<!DOCTYPE html>
<html>
<head>
<title>เพชร พลังเลข : Number Energy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/vendor.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/flat-admin.css">

<!-- Theme -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/blue-sky.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/blue.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/red.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/yellow.css">
</head>
<body>
<?php echo form_open('Login/admin_login_check')?>
<div class="app app-default">
  <div class="app-container app-login">
    <div class="flex-center">
      <div class="app-header"></div>
      <div class="app-body">
        <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
              <div class="sk-cube1 sk-cube"></div>
              <div class="sk-cube2 sk-cube"></div>
              <div class="sk-cube4 sk-cube"></div>
              <div class="sk-cube3 sk-cube"></div>
            </div>
          </div>
          <div class="title">Logging in...</div>
        </div>
        <div class="app-block">
          <div class="app-form">
            <div class="form-header">
              <div class="app-brand"><span class="highlight">Number</span> Energy</div>
            </div>

            <!--<form action="<?php echo site_url('Admin/index')?>" method="POST">-->
            <div class="input-group"> <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user" aria-hidden="true"></i></span>
              <input name="dmn_user_username" type="text" class="form-control" id="dmn_user_username" placeholder="Username"  required >
            </div>
            <div class="input-group"> <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-key" aria-hidden="true"></i></span>
              <input name="dmn_user_password" type="password" class="form-control" id="dmn_user_password" placeholder="Password"  required >
            </div>
            <div class="text-center">
              <input name="Submit" type="submit" class="btn btn-success btn-submit" value="เข้าสู่ระบบ">
            </div>
            <!--</form>-->

          </div>
        </div>
      </div>
      <div class="app-footer"> </div>
    </div>
  </div>
</div>
<?php echo form_close()?>
<script type="text/javascript" src="<?php echo base_url()?>theme/assets/js/vendor.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>theme/assets/js/app.js"></script>
</body>
</html>
<?php if($this->uri->segment(3)=="login_disallow"){ ?>
<script>
	alert("ไม่สามารถเข้าสู่ระบบได้ ลองใหม่อีกครั้ง");
</script>
<?php } ?>

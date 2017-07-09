<!DOCTYPE html>
<html>
<head>
  <title>เพชร พลังเลข : Number Energy</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/bootstrap/css/bootstrap-theme.min.css">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/flat-admin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/font-awesome/css/font-awesome.min.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/assets/css/theme/yellow.css">

  <!-- DatePicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>theme/js/jQueryCalendarThai/jquery.datetimepicker.css" />

  <!-- select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>theme/select/select2.css" />

  <!-- Icon Font -->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

</head>
<?php
  $Config = $this->Homepage_model->General_config();
 ?>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Number</span> Energy</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li <?php if($this->uri->segment(2)=="index"||$this->uri->segment(2)=="history_insert"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/index')?>">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">ภาพรวมระบบ</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="product_import"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/product_import')?>">
          <div class="icon">
            <i class="fa fa-cubes" aria-hidden="true"></i>
          </div>
          <div class="title">Import สินค้า</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="find_number"||$this->uri->segment(2)=="find_number_insert"||$this->uri->segment(2)=="find_number_update"||$this->uri->segment(2)=="find_number_detail"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/find_number')?>">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">จัดการเบอร์</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="product_list"||$this->uri->segment(2)=="product_insert"||$this->uri->segment(2)=="product_update"||$this->uri->segment(2)=="product_detail"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/product_list')?>">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">สินค้าและสต๊อกสินค้า</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="actipromo_list"||$this->uri->segment(2)=="actipromo_insert"||$this->uri->segment(2)=="actipromo_update"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/actipromo_list')?>">
          <div class="icon">
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
          </div>
          <div class="title">กิจกรรมและโปรโมชั่น</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="account_list"||$this->uri->segment(2)=="account_insert"||$this->uri->segment(2)=="account_detail"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/account_list')?>">
          <div class="icon">
            <i class="fa fa-building" aria-hidden="true"></i>
          </div>
          <div class="title">บัญชีรายรับ - รายจ่าย</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="customer_list"||$this->uri->segment(2)=="customer_insert"||$this->uri->segment(2)=="customer_update"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/customer_list')?>">
          <div class="icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="title">ลูกค้า</div>
        </a>
      </li>
      <li <?php if($this->uri->segment(2)=="agent_list"||$this->uri->segment(2)=="agent_insert"||$this->uri->segment(2)=="agent_update"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/agent_list')?>">
          <div class="icon">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          </div>
          <div class="title">ตัวแทน</div>
        </a>
      </li>

      <li <?php if($this->uri->segment(2)=="employees_la_detail"||$this->uri->segment(2)=="employees_la"||$this->uri->segment(2)=="employees_salary_detail"||$this->uri->segment(2)=="employees_salary"||$this->uri->segment(2)=="employees_list"||$this->uri->segment(2)=="employees_insert"||$this->uri->segment(2)=="employees_update"){ ?>class="active"<?php } ?>>
        <a href="<?php echo site_url('Admin/employees_list')?>">
          <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <div class="title">พนักงาน</div>
        </a>
      </li>
      <li class="dropdown <?php if($this->uri->segment(2)=="customer_type_list"||$this->uri->segment(2)=="contents_list"||$this->uri->segment(2)=="abountus_config"||$this->uri->segment(2)=="salary_config"||$this->uri->segment(2)=="general_config"||$this->uri->segment(2)=="account_category_list"||$this->uri->segment(2)=="account_category_insert"||$this->uri->segment(2)=="account_category_update"||$this->uri->segment(2)=="mobile_network_list"||$this->uri->segment(2)=="mobile_network_insert"||$this->uri->segment(2)=="mobile_network_update"){ ?>active<?php } ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cog" aria-hidden="true"></i>
          </div>
          <div class="title">ตั้งค่าระบบ</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-cog" aria-hidden="true"></i> ตั้งค่าระบบ</li>
            <li><a href="<?php echo site_url('Admin/general_config')?>">ตั้งค่าทั่วไป</a></li>
            <li><a href="<?php echo site_url('Admin/salary_config')?>">ตั้งค่าเงินเดือน</a></li>
            <li><a href="<?php echo site_url('Admin/abountus_config')?>">ข้อมูลเกี่ยวกับเรา</a></li>
            <li><a href="<?php echo site_url('Admin/service_config')?>">บริการของเรา</a></li>
            <li><a href="<?php echo site_url('Admin/contents_list')?>">บทความ</a></li>
            <!-- <li><a href="<?php echo site_url('Admin/mobile_network_list')?>">เครือข่ายมือถือ</a></li> -->
            <!-- <li><a href="<?php echo site_url('Admin/product_type_list')?>">ประเภทเบอร์</a></li> -->

            <li><a href="<?php echo site_url('Admin/account_category_list')?>">ประเภทบัญชีรายจ่าย</a></li>
            <li><a href="<?php echo site_url('Admin/customer_type_list')?>">ประเภทลูกค้า</a></li>
            <!--<li><a href="<?php echo base_url()?>theme/uikits/card.html">Card</a></li>
            <li><a href="<?php echo base_url()?>theme/uikits/form.html">Form</a></li>
            <li><a href="<?php echo base_url()?>theme/uikits/table.html">Table</a></li>
            <li><a href="<?php echo base_url()?>theme/uikits/icons.html">Icons</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
            <li><a href="<?php echo base_url()?>theme/uikits/pricing-table.html">Pricing Table</a></li>
            <li><a href="<?php echo base_url()?>theme/uikits/timeline.html">Timeline</a></li>
            <li><a href="<?php echo base_url()?>theme/uikits/chart.html">Chart</a></li>-->
          </ul>
        </div>
      </li>
      <!--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Pages</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
            <li><a href="<?php echo base_url()?>theme/pages/form.html">Form</a></li>
            <li><a href="<?php echo base_url()?>theme/pages/profile.html">Profile</a></li>
            <li><a href="<?php echo base_url()?>theme/pages/search.html">Search</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
            <li><a href="<?php echo base_url()?>theme/pages/landing.html">Landing</a></li>
            <li><a href="<?php echo base_url()?>theme/pages/login.html">Login</a></li>
            <li><a href="<?php echo base_url()?>theme/pages/register.html">Register</a></li>
            <li><a href="<?php echo base_url()?>theme/pages/404.html">404</a></li>
          </ul>
        </div>
      </li>-->
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?php echo base_url('theme/assets/images/'.$Config[0]['general_config_admin_pic'])?>">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">ระบบการควบคุมของผู้ใช้งาน</li>
        <!--<li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-cube" aria-hidden="true"></i></div>
            <div class="title">New Orders</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Ordering</li>
              <li class="dropdown-empty">No New Ordered</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification warning">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
            <div class="title">Unread Messages</div>
            <div class="count">99</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Payment Confirmation.."</div>
                      <div class="description">Alan Anderson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">5</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Hello World"</div>
                      <div class="description">Marco  Harmon</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">2</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Order Confirmation.."</div>
                      <div class="description">Brenda Lawson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="title">System Notifications</div>
            <div class="count">10</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Notification</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">8</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">New Order</div>
                      <div class="description">$400 total</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">14</span>
                  Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Issues Report
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>-->
        <?php echo $_SESSION['employees_name']?>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="<?php echo base_url('theme/assets/images/'.$Config[0]['general_config_admin_pic'])?>">
            <div class="title">ข้อมูลส่วนตัวผู้ใช้งาน</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">ข้อมูลผู้ใช้งาน</h4>
            </div>
            <ul class="action">
              <!--<li>
                <a href="#">
                  <?php echo $_SESSION['employees_name']?>
                </a>
              </li>-->
              <!--<li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  Setting
                </a>
              </li>-->
              <li>
                <a href="<?php echo site_url('Login/logout')?>">
                  ออกจากระบบ
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row" style="height:1100px;">

<?php $this->load->view($page)?>

</div>




  <footer class="app-footer">
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2016 Company Co,Ltd.
      </div>
    </div>
  </div>
</footer>
</div>
  </div>

  <script type="text/javascript">
    var setLabels = <?php echo json_encode($MaxDay); ?>;
    var setSeries = <?php echo json_encode($SaleOrder); ?>;
  </script>
  <script type="text/javascript" src="<?php echo base_url()?>theme/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>theme/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>theme/assets/js/vendor.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>theme/assets/js/app.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>theme/js/jQueryCalendarThai/jquery.datetimepicker.js"></script>


  <!-- DataPicker -->
  <script type="text/javascript">
    jQuery('.datepicker').datetimepicker({
    lang:'th',
    timepicker:true,
    format:'Y-m-d H:i'
    });
  </script>

  <!-- TinyMCE -->
  <script type="text/javascript" src="<?php echo base_url()?>theme/tinymce/tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  relative_uris : false,
  remove_script_host: false,
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help responsivefilemanager '
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],
  external_filemanager_path:"<?php echo base_url()?>/theme/tinymce/filemanager/",
  filemanager_title:"การจัดการข้อมูล" ,
  external_plugins: { "filemanager" : "<?php echo base_url()?>/theme/tinymce/filemanager/plugin.min.js"}
 });
  </script>

  <script>

function copyToClipboard(field)
{
    var content = eval("document."+field)
    content.focus()
    content.select()
    range = content.createTextRange()
    range.execCommand("Copy")
    window.status="Contents copied to clipboard"
    setTimeout("window.status=''",1800)
}

  </script>

  <script type="text/javascript" src="<?php echo base_url()?>theme/select/select2.min.js"></script>



</body>
</html>

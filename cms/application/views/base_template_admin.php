
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IIT Minds</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/vendor.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/flat-admin.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/custom.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue-sky.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/red.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/yellow.css')?>">

  <!-- template js-->
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/vendor.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/app.js')?>"></script>

  <!--Datatable-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/datatable/dataTables.bootstrap.min.css')?>">

</head>
<body>
  <div class="app app-default">
    <aside class="app-sidebar" id="sidebar">
<section class="sidebar">      
<div class="sidebar-header">
    <a class="sidebar-brand" href="#"> Admin</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="./index.php">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Manage Admin</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>Admin</li>
            <li><a href="<?php echo base_url('admin/admin_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/admin_form')?>">Register</a></li>
          </ul>
        </div>
      </li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-image-o" aria-hidden="true"></i>
          </div>
          <div class="title">Slider</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-image-o" aria-hidden="true"></i>Slider</li>
            <li><a href="<?php echo base_url('admin/slider_view')?>">List</a></li>
   <!--           <li><a href="<?php echo base_url('admin/slider_form')?>">Add</a></li>  -->
          </ul>
        </div>
      </li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Result</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Result</li>
            <li><a href="<?php echo base_url('admin/result_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/result_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
          <div class="title">Hours</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</li>
            <li><a href="<?php echo base_url('admin/hours_view')?>">List</a></li>
<!--            <li><a href="<?php echo base_url('admin/hours_form')?>">Add</a></li>-->
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          </div>
          <div class="title">News</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</li>
            <li><a href="<?php echo base_url('admin/news_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/news_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-video-camera" aria-hidden="true"></i>
          </div>
          <div class="title">Mediapress</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-video-camera" aria-hidden="true"></i> Mediapress</li>
            <li><a href="<?php echo base_url('admin/mediapress_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/mediapress_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-comments-o" aria-hidden="true"></i>
          </div>
          <div class="title">Feedback</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback</li>
            <li><a href="<?php echo base_url('admin/feedback_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/feedback_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
          </div>
          <div class="title">Enquiry</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-envelope-o" aria-hidden="true"></i> Enquiry</li>
            <li><a href="<?php echo base_url('admin/enquiry_view')?>">List</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Courses</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Courses</li>
            <li><a href="<?php echo base_url('admin/courses_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/courses_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Blog</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Blog</li>
            <li><a href="<?php echo base_url('admin/blog_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/blog_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Future Post</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Future Post</li>
            <li><a href="<?php echo base_url('admin/future_post_view')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/future_post_form')?>">Add</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Heading Text</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Heading Text</li>
            <li><a href="<?php echo base_url('admin/marqueeView')?>">List</a></li>
            <li><a href="<?php echo base_url('admin/marqueeForm')?>">Add</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">

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
          <a class="navbar-brand" href="#"><span class="highlight"> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?php echo base_url('assets/admin/images/iit-minds.jpg');?>">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Dashboard</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="<?php echo base_url('assets/admin/images/iit-minds.jpg');?>">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username"><?php echo $this->session->userdata('username');?></h4>
            </div>
            <ul class="action">
              <li>
                <a href="<?php echo base_url('admin/logout');?>">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <div class="row">
    <?php $this->load->view($main_view); ?>
  </div>
  </div>
  </div>
</body>

  

<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<!-- Custom js-->  
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>

<!-- Datatable js-->
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/datatable/dataTables.bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/datatable/jquery.dataTables.min.js')?>"></script>
  
  
  <!-- Jquery validation -->
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery_validation/jquery.validate.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery_validation/jquery.validate.min.js')?>"></script>

</html>


<!DOCTYPE html>
<html>
<head>
  <title>IIT Minds</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/vendor.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/flat-admin.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/custom.css')?>">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue-sky.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/red.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/yellow.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>">

</head>
<body>
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
          <div class="app-brand"><img src="<?php echo base_url('assets/admin/images/iit-minds.jpg');?>"></div>
        </div>
        <form action="<?php echo base_url('admin/login');?>" method="POST" id="login-form">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" autocomplete="off">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password" autocomplete="off">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          <a href="<?php echo base_url('Admin/register');?>">
          <button type="button" class="btn btn-default btn-sm btn-social __facebook">
            <div class="info">
              <span class="title">Register</span>
            </div>
          </button>
          </a>
        </div>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/vendor.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/app.js')?>"></script>

        <!-- Jquery validation -->
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery-3.2.1.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery_validation/jquery.validate.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery_validation/jquery.validate.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery_validation/additional-methods.min.js')?>"></script>
</body>
</html>

<script type="text/javascript">
  // When the browser is ready...
  $(function() {
  
    $("#login-form").validate({
    
        rules: {
            username: "required",
            password:"required",
        },
        messages: {
            username: "Please Enter username",
            password:"Please Enter password",
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>
<!DOCTYPE html>
<html>
<head>
  <title>Whizz Kidsz</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/vendor.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/flat-admin.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/custom.css')?>">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue-sky.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/blue.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/red.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/theme/yellow.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/custom.css')?>">


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
        <div class="app-right-section">
          <div class="app-brand"> Admin</div>
          <div class="app-info">
            
            <ul class="list">
              <li>
                <div class="icon">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </div>
                <div class="title">Increase <b>Productivity</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-cubes" aria-hidden="true"></i>
                </div>
                <div class="title">Lot of <b>Components</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-usd" aria-hidden="true"></i>
                </div>
                <div class="title">Forever <b>Free</b></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="app-form">
          <div class="form-suggestion">
            Create an account for free.
          </div>
          <form action="<?php echo base_url('admin/add_register')?>" method="POST" id="register-form">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" name="username">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon3" name="password" id="password">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon4" name="c_password">
              </div>
              <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="Register">
              </div>
          </form>
          <div class="form-line">
            <div class="title">OR</div>
          </div>
          <div class="form-footer">
            <a href="<?php echo base_url('admin')?>">
            <button type="button" class="btn btn-default btn-sm btn-social __facebook">
              <div class="info">
                <span class="title">Already Register? Login</span>
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
  
    $("#register-form").validate({
    
        rules: {
            username: 
            {
              required:true,
              minlength:3,
            },
            email:{
              required:true,
              email:true,
            },
            password:{
              required:true,
              minlength:8,
            },
            c_password:{
              required:true,
              minlength:8,
              equalTo:"#password",
            },
        },
        messages: {
            username: {required:"Please Enter username",
                      minlength:"Username should be more than 3 charchters"
                    },
            email:{required:"Please Enter email",
                  email:"Please Enter valid email"
                },
            password:{
                required:"Please Enter password",
                minlength:"Short passwords are easy to guess. Try one with at least 8 characters.",
              },
            c_password:{
              required:"Please Enter same password",
              minlength:"Short passwords are easy to guess. Try one with at least 8 characters.",
              equalTo:"Password do not match",
              },
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>
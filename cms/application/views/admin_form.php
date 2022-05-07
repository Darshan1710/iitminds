<?php
if($id != "new"){
    $username = $result['username'];
    $password = $result['password'];
    $is_active = $result['is_active'];
}else{
    $username = '';
    $password = '';
    $is_active = 1;
}
?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Horizontal
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_admin');?>" id="admin-form">
          <input type="hidden" name="id" value="<?php echo $id?>">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Username</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="" name="username" value="<?php if($id != "new"){ echo $result['username'];}else{ echo "";}?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Password</label>
        <div class="col-md-9">
            <input type="password" class="form-control" placeholder="" name="password" value="<?php if($id != "new"){ echo $result['password'];}else{ echo "";}?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-9">
          <div class="radio radio-inline">
            <input type="radio" name="is_active" id="radio10" value="1" <?php if($is_active == 1){ echo "checked='checked'";}?>>
              <label for="radio10">
                Active
              </label>
          </div>
          <div class="radio radio-inline">
              <input type="radio" name="is_active" id="radio11" value="0" <?php if($is_active == 0){ echo "checked='checked'";}?>>
              <label for="radio11">
                Inactive
              </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" onclick="history.go(-1);">Cancel</button>
      </div>
    </div>
  </div>
</form>
            
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  // When the browser is ready...
  $(function() {
  
    $("#admin-form").validate({
    
        rules: {
            username: "required",
            password:{required:true,minlength:8},
            first_name:"required",
            last_name:"required",
            email:{required:true,email:true},
            mobile:{required:true,minlength:10,maxlength:10},
            note:"required",
        },
        messages: {
            username: "Please Enter username",
            password:{
                required:"Please Enter Password",
                minlength:"Password length should be more than 8 Charchters",
            },
            first_name:"Please Enter First Name",
            last_name:"Please Enter Last Name",
            email:{required:"Please Enter Email",
                  email:"Please Enter Valid Email Address"},
            mobile:{required:"Please Enter Mobile Number",
                  minlength:"Please Enter Valid Mobile Number",
                  maxlength:"Please Enter Valid Mobile Number"}
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>

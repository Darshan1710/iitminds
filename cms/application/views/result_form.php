<?php
if($id != "new"){
  $src = $result['src'];
  $name = $result['name'];
  $percentage = $result['percentage'];
}else{
  $src = "";
  $name ="";
  $percentage = "";
}

?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Horizontal
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_result');?>" id="result-form" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id?>">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">

      
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <?php if ($id != "new") { ?>
                    <img id="result_image" class="col-md-2" src="<?php echo base_url().$src; ?>" width="150px" height="100px">
                    <button type="button" class="btn btn-primary btn-xs" id="change_result_image">Change Photo</button>
                    <input type="file" class="form-control" name="src" id="hidden_result_image" style="display:none;">
                    <input type="hidden" name="pic2" value="<?php echo $src; ?>">
            </div>
            <?php } else { ?>
                <input type="file" class="form-control" placeholder="" name="src" >
            <?php } ?>
        </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Section</label>
        <div class="col-md-9">
           
            <select name="section" class="form-control">
                <option value="JEE MAIN">JEE MAIN</option>
                <option value="RANK IMPROVEMENT BATCH">RANK IMPROVEMENT BATCH</option>
                <option value="MHT - CET">MHT - CET</option>
                <option value="SSC">SSC</option>
            </select>
        </div>
        </div>
        <br>
        <div class="form-group">
        <label class="col-md-3 control-label">Name</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="name" value="<?php echo $name ?>">
        </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Percentage</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="percentage" value="<?php echo $percentage ?>">
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
  
    $("#result-form").validate({
    
        rules: {
            src:"required",
            title: "required",
            subtitle:"required",
        },
        messages: {
            src:"Please Select Image",
            title: "Please Enter Title",
            subtitle:"Please Enter Subtitle",
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>
<script>
$('#change_result_image').on('click',function(){
   $('#hidden_result_image').trigger('click');
   $('#result_image').css('display','none'); //result  icon
   $('#change_result_image').css('display','none'); //button to chnage result image
   $('#hidden_result_image').css('display',''); //hidden input for change result image
});
</script>

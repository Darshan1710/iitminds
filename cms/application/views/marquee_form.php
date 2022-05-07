<?php
if($id != "new"){
  $heading = $result['heading'];
  $status = $result['status'];
}else{
  $heading = "";
  $status ="";
}

?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Horizontal
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/addMarquee');?>" id="result-form" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id?>">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">

      
        <div class="form-group">
        <label class="col-md-3 control-label">Heading Text</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="heading" value="<?php echo $heading ?>">
        </div>
        </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-9">
           
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        </div>
        <br>
    
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" onclick="history.go(-1);">Cancel</button>
      </div>
    </div>
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
            heading: "required",
            status:"required",
        },
        messages: {
            heading:"Please Select Heading",
            status: "Please Enter Status"
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>


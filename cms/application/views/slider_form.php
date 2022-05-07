<?php

if($id != "new"){
  $slider = $result['slider'];
}else{
  $name = "slider";
}
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Add Level
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_slider')?>" id="slider-form" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id ?>" name="id">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Slider</label>
            <div class="col-md-9">
                <?php if ($id != "new") { ?>
                    <img id="slider_image" class="col-md-4" src="<?php echo base_url() . $slider; ?>"  >
                    <div><button type="button" class="btn btn-primary btn-xs" id="slider">Change photo</button></div>
                    <input type="file" class="form-control" placeholder="" name="slider" id="hidden_slider_image" style="display:none;">
                    <input type="hidden" name="pic1" value="<?php echo $slider; ?>">
                <?php } else { ?>
                    <input type="file" class="form-control" placeholder="" name="slider" id="file">
                <?php } ?> 
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
  
    $("#slider-form").validate({
    
        rules: {
            slider: "required",
        },
        messages: {
            slider: "Please Select Image",
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  //slider Image
  $('#slider').on('click',function(){
   $('#hidden_slider_image').trigger('click');
   $('#slider_image').css('display','none'); //author image  icon
   $('#slider').css('display','none'); //button to chnage author image
   $('#hidden_slider_image').css('display',''); //hidden input for change author image
});
</script>




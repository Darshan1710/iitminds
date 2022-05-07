<?php
if($id != "new"){
    $title = $result['title'];
    $image = $result['image'];
    $date = date("Y-m-d",strtotime($result['date']));
}else{
    $title = '';
    $image = '';
    $date = '';
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Blog

            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_future_post'); ?>" id="future-post-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="title" value="<?php echo $title; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Author Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="edit_future_image" class="col-md-2" src="<?php echo base_url() . $image; ?>" width="150px" height="50px">
                                        <div><button type="button" class="btn btn-primary btn-xs" id="change_future_image">Change photo</button></div>
                                        <input type="file" class="form-control" placeholder="" name="image" id="hidden_future_image" style="display:none;">
                                        <input type="hidden" name="pic1" value="<?php echo $image;?>">
                                        <br>
                                    <?php } else { ?>
                                        <input type="file" class="form-control" placeholder="" name="image" id="file">
                                    <?php } ?> 
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" placeholder="" name="date" value="<?php echo $date; ?>">
                                </div>
                            </div>
                    </div>
            </div>
            <div class="form-footer">
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default">Cancel</button>
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
  
    $("#future-post-form").validate({
    
        rules: {
            title:"required",
            image: "required",
            date:"required"
        },
        messages: {
            title:"Please Enter Title",
            image: "Please Select Image",
            date:"Please Select Date",
            },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });
</script>
<script>
$('#file').on('click',function(){
   $('#hidden_file_name').css('display','none');
});
</script>
<script>
$('#change_future_image').on('click',function(){
   $('#hidden_future_image').trigger('click');
   $('#edit_future_image').css('display','none'); //author image  icon
   $('#change_future_image').css('display','none'); //button to chnage author image
   $('#hidden_future_image').css('display',''); //hidden input for change author image
});

</script>
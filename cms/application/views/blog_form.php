<?php
if($id != "new"){
    $author_name = $result['author_name'];
    $author_description = $result['author_description'];
    $author_img = $result['author_img'];
    $title = $result['title'];
    $blog_img = $result['blog_img'];
    $description = $result['description'];
    $tag = $result['tag'];
}else{
    $author_name = "";
    $author_description = "";
    $author_pic_name = "";
    $title = "";
    $blog_img = "";
    $description = "";
    $tag = "";
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Blog

            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_blog'); ?>" id="blog-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Author Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="author_name" value="<?php echo $author_name; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Author Description</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="author_description" value="<?php echo $author_description; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Author Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="edit_author_image" class="col-md-2" src="<?php echo base_url() . $author_img; ?>" width="150px" height="50px">
                                        <div><button type="button" class="btn btn-primary btn-xs" id="change_author_image">Change photo</button></div>
                                        <input type="file" class="form-control" placeholder="" name="author_img" id="hidden_author_image" style="display:none;">
                                        <input type="hidden" name="pic1" value="<?php echo $author_img;?>">
                                        <br>
                                    <?php } else { ?>
                                        <input type="file" class="form-control" placeholder="" name="author_img" id="file">
                                    <?php } ?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="title" value="<?php echo $title; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Blog Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="edit_blog_image" class="col-md-2" src="<?php echo base_url() . $blog_img; ?>" width="150px" height="50px">
                                        <button type="button" class="btn btn-primary btn-xs" id="change_blog_image">Change Photo</button>
                                        <input type="file" class="form-control" name="blog_img" id="hidden_blog_image" style="display:none;">
                                        <input type="hidden" name="pic2" value="<?php echo $blog_img;?>">
                                        <br>
                                        <br>
                                <?php } else { ?>
                                    <input type="file" class="form-control" placeholder="" name="blog_img" >
                                <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tagged</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="tag" value="<?php echo $tag; ?>">
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
  
    $("#blog-form").validate({
    
        rules: {
            author_name:"required",
            author_description: "required",
            author_pic_name:"required",
            title:"required",
            blog_img:"required",
            description:"required",
        },
        messages: {
            author_name:"Please Enter Author Name",
            author_description: "Please Enter Description",
            author_pic_name:"Please Choose File",
            title:"Please Enter Title",
            blog_img:"Please Select Blog Image",
            description:"Please Enter Description"
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
$('#change_author_image').on('click',function(){
   $('#hidden_author_image').trigger('click');
   $('#edit_author_image').css('display','none'); //author image  icon
   $('#change_author_image').css('display','none'); //button to chnage author image
   $('#hidden_author_image').css('display',''); //hidden input for change author image
});
$('#change_blog_image').on('click',function(){
   $('#hidden_blog_image').trigger('click');
   $('#edit_blog_image').css('display','none'); //blog image  icon
   $('#change_blog_image').css('display','none'); //button to chnage blog image
   $('#hidden_blog_image').css('display',''); //hidden input for change blog image
});
</script>
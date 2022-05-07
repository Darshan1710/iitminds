
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Blog
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_blog');?>" id="blog-form" enctype="multipart/form-data">
  <div class="section">
    <div class="section-body">
        <div class="form-group">
            <label class="col-md-3 control-label"><b>Blog Title</b></label>
        <div class="col-md-9">
            <div><?php echo $result['title'];?></div>
        </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"><b>Blog Image</b></label>
        <div class="col-md-9">
            <div><img src="<?php echo base_url().$result['blog_img'];?>" width="500px" height="300px"></div>
        </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"><b>Description</b></label>
        <div class="col-md-9">
            <div><?php echo $result['description'];?></div>
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
  
    $("#blog-form").validate({
    
        rules: {
            author_name:"required",
            author_description: "required",
            author_pic_name:"required",
            title:"required",
            blog_pic_name:"required",
            description:"required",
        },
        messages: {
            author_name:"Please Enter Author Name",
            author_description: "Please Enter Description",
            author_pic_name:"Please Choose File",
            title:"Please Enter Title",
            blog_pic_name:"Please Select",
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

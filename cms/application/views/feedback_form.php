<?php
if ($id != "new") {
    $author = $result['author'];
    $photo = $result['photo'];
    $batch = $result['batch'];
    $comment = $result['comment'];
} else {
    $author = "";
    $photo = "";
    $batch = "";
    $comment = "";
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form Horizontal
            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_feedback'); ?>" id="result-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-title">Information</div>
                        <div class="section-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Author</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="author" value="<?php echo $author; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="feedback_image" class="col-md-2" src="<?php echo base_url() . $photo; ?>" width="150px" height="100px">
                                        <button type="button" class="btn btn-primary btn-xs" id="change_feedbak_image">Change Photo</button>
                                        <input type="file" class="form-control" name="photo" id="hidden_feedback_image" style="display:none;">
                                        <input type="hidden" name="pic2" value="<?php echo $photo; ?>">
                                    </div>
                                <?php } else { ?>
                                    <input type="file" class="form-control" placeholder="" name="photo" >
                                <?php } ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Batch</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="batch" value="<?php echo $batch; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Commment</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="comment"><?php echo $comment; ?></textarea>
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
    $(function () {

        $("#result-form").validate({
            rules: {
                src: "required",
                title: "required",
                subtitle: "required",
            },
            messages: {
                src: "Please Select Image",
                title: "Please Enter Title",
                subtitle: "Please Enter Subtitle",
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>
<script>
    $('#change_feedbak_image').on('click', function () {
        $('#hidden_feedback_image').trigger('click');
        $('#feedback_image').css('display', 'none'); //result  icon
        $('#change_feedbak_image').css('display', 'none'); //button to chnage result image
        $('#hidden_feedback_image').css('display', ''); //hidden input for change result image
    });
</script>

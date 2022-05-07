<?php
if ($id != "new") {
    $image_path = $result['image_path'];
    $heading = $result['heading'];
    $description = $result['description'];
    $integrated_batch = $result['integrated_batch'];
    $regular_batch = $result['regular_batch'];
    $commencement = $result['commencement'];
    $duration = $result['duration'];
} else {
    $image_path = "";
    $heading = "";
    $description = "";
    $integrated_batch = "";
    $regular_batch = "";
    $commencement = "";
    $duration = "";
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form Horizontal
            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_courses'); ?>" id="result-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-title">Information</div>
                        <div class="section-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="course_image" class="col-md-2" src="<?php echo base_url().$image_path; ?>" width="150px" height="100px">
                                        <button type="button" class="btn btn-primary btn-xs" id="change_course_image">Change Photo</button>
                                        <input type="file" class="form-control" name="image_path" id="hidden_course_image" style="display:none;">
                                        <input type="hidden" name="pic2" value="<?php echo $image_path; ?>">
                                    </div>
                                <?php } else { ?>
                                    <input type="file" class="form-control" placeholder="" name="image_path" >
                                <?php } ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Heading</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="heading" value="<?php echo $heading; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Integrated Batch</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="integrated_batch" value="<?php echo $integrated_batch; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Regular Batch</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="regular_batch" value="<?php echo $regular_batch; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Commencement</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="commencement" value="<?php echo $commencement; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Duration</label>
                                <div class="col-md-9">
                                    <select class="form-control"  name="duration">
                                        <?php for($i=1;$i<=5;$i++){?>
                                        <option value="<?php echo $i; ?>" <?php if($i==$duration){ echo "selected='selected'";}?>><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

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
    $('#change_course_image').on('click', function () {
        $('#hidden_course_image').trigger('click');
        $('#course_image').css('display', 'none'); //result  icon
        $('#change_course_image').css('display', 'none'); //button to chnage result image
        $('#hidden_course_image').css('display', ''); //hidden input for change result image
    });
</script>

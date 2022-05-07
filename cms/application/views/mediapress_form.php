<?php

if ($id != "new") {
    $class = $result['class'];
    $src = $result['src'];
    $width = $result['width'];
    $height = $result['height'];
    $title = $result['title'];
    $media_id = $result['media_id'];
} else {
    $class = "";
    $src = "";
    $width = "";
    $height = "";
    $title = "";
    $media_id = '';
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form Horizontal
            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_mediapress'); ?>" id="mediapress-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-title">Information</div>
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Class</label>
                                <div class="col-md-9">
                                    <select name="class" class="form-control">
                                        <option selected disabled>Please Select</option>
                                        <option value="newspaper" <?php if($class == "newspaper"){ echo "selected='selected'";}?>>Newspaper</option>
                                        <option value="classroom" <?php if($class == "classroom"){ echo "selected='selected'";}?>>Classroom</option>
                                        <option value="seminar wide" <?php if($class == "seminar wide"){ echo "selected='selected'";}?>>Seminar Wide</option>
                                        <option value="felicitations" <?php if($class == "felicitations"){ echo "selected='selected'";}?>>Felicitations</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Image</label>
                                <div class="col-md-9">
                                    <?php if ($id != "new") { ?>
                                        <img id="mediapress_image" class="col-md-2" src="<?php echo base_url().$src; ?>" width="150px" height="50px">
                                        <div><button type="button" class="btn btn-primary btn-xs" id="change_mediapress_image">Change photo</button></div>
                                        <input type="file" class="form-control" placeholder="" name="src" id="hidden_mediapress_image" style="display:none;">
                                        <input type="hidden" name="pic1" value="<?php echo $src;?>">
                                        <br>
                                    <?php } else { ?>
                                        <input type="file" class="form-control" placeholder="" name="src" id="file">
                                    <?php } ?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Width</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="" name="width" value="<?php echo $width; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Height</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="" name="height" value="<?php echo $height; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="title" value="<?php echo $title; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Media Id</label>
                                <div class="col-md-9">
                                
                                    <select name="media_id" class="form-control">
                                        <option selected disabled>Please Select<?php echo $result['media_id'];?></option>
                                    <?php 
                       
                                    foreach($m_id as $m_ids){ ?>
                                    <option value="<?php echo $m_ids['media_id'];?>" <?php if($m_ids['media_id']==$media_id){ echo "selected='selected'";}?>><?php echo $m_ids['media_id'];?></option>
                                    <?php } ?>
                                    </select>
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

        $("#mediapress-form").validate({
            rules: {
                class: "required",
                src:"required",
                width:"required",
                height:"required",
                title:"reqiured",
                mediaid:"required"
            },
            messages: {
                class: "Please Select Class",
                src:"Please Select Image",
                width:"Please Enter width",
                height:"Please Enter Height",
                title:"Please Enter Title",
                mediaid:"Please Select Mediaid"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>

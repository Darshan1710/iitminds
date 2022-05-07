<?php
if ($id != "new") {
    $day = $result['day'];
    $open = explode(":",$result['open']);
    $close = explode(":",$result['close']);
} else {
    $src = "";
    $title = "";
    $subtitle = "";
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form Horizontal
            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_hours'); ?>" id="hours-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-title">Hours</div>
                        <div class="section-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Day</label>
                                <div class="col-md-9">
                                    <select name="day" class="form-control">
                                        <option selected disabled>Please Select</option>
                                        <option value="Mon - Sun" <?php if($day == 'Mon - Sun'){ echo "selected='selected'";}?>>Mon - Sun</option>
                                    </select>
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Open</label>
                                <div class="col-md-2">
                                    <select name="hours1" class="form-control">
                                        <option selected disabled>Please Select<?php echo $open[1];?></option>
                                        <?php for ($i = 01; $i <= 12; $i++) { ?>
                                            <option value="<?php echo $i; ?>" <?php if($i == $open[0]){ echo "selected='selected'";}?>><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="minutes1" class="form-control">
                                        <option selected disabled>Please Select</option>
                                        <?php for ($i = 0; $i <= 60; $i++) { ?>
                                            <option value="<?php echo $i; ?>" <?php if($i == $open[1]){ echo "selected='selected'";}?>><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Close</label>
                                <div class="col-md-2">
                                    <select name="hours2" class="form-control">
                                        <option selected disabled>Please Select</option>
                                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                                            <option value="<?php echo $i; ?>" <?php if($i == $close[0]){ echo "selected='selected'";}?>><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="minutes2" class="form-control">
                                        <option selected disabled>Please Select</option>
                                        <?php for ($i = 0; $i <= 60; $i++) { ?>
                                            <option value="<?php echo $i; ?>" <?php if($i == $close[1]){ echo "selected='selected'";}?>><?php echo $i; ?></option>
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

        $("#hours-form").validate({
            rules: {
                day: "required",
                hours1: "required",
                minutes1: "required",
                hours2: "required",
                minutes2: "required"
            },
            messages: {
                day: "Please Select Day",
                hours1: "Please Select Opening Hours",
                minutes1: "Please Select Minutes",
                hours2: "Please Select Closing Hours",
                minutes2: "Please Select Closing Hours"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>



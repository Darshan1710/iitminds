<?php
if ($id != "new") {
    $news = $result['news'];
} else {
    $news = '';
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form Horizontal
            </div>
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?php echo base_url('admin/add_news'); ?>" id="news-form">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="section">
                        <div class="section-title">Information</div>
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">News</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="news"><?php echo $news; ?></textarea>
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

        $("#admin-form").validate({
            rules: {
                news: "required",
            },
            messages: {
                news: "Please Enter news",
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>

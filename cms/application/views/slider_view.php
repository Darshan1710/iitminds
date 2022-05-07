<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Level
            </div>
            <div class="card-body">
                <form class="form form-horizontal" id="student_level">
                    <div class="section">
                        <div class="section-body">
                            <table class="table table-responsive">
                                <thead>
                                     <tr>
                                        <td class="col-md-1">Id</td>
                                        <td class="col-md-1">Slider Name</td>
                                        <td class="col-md-1">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><img src="<?php echo base_url().$row['slider'];?>" width="100px" height="100px"></td>
                                        <td>
                                        <a href="<?php echo base_url('Admin/slider_form').'/'.$row['id'];?>"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                        <button type="submit" class="btn btn-danger btn-xs delete_slider" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button></td></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <a href="admin.php"></a>
                    </div>
                    <div class="form-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





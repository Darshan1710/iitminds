
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Heading
            </div>
            <div class="card-body">
                <form class="form form-horizontal" >

                    <div class="section">
                        <div class="section-body">
                            <table class="table table-responsive" id="student_level">
                                <thead>
                                     <tr>
                                         <td>Id</td>
                                        <td>Text</td>
                                        <td>Status</td>
                                        <td>Created At</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['heading'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td><?php echo $row['created_at'];?></td>
                                        <td>
                                        <a href="<?php echo base_url('admin/marqueeForm').'/'.$row['id'];?>">
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                            <button type="button" class="btn btn-danger btn-xs delete_result" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="form-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





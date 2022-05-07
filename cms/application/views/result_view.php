
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Result
            </div>
            <div class="card-body">
                <form class="form form-horizontal" >

                    <div class="section">
                        <div class="section-body">
                            <table class="table table-responsive" id="student_level">
                                <thead>
                                     <tr>
                                         <td>Id</td>
                                        <td>Image</td>
                                        <td>Name</td>
                                        <td>Percentage</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><img src="<?php echo base_url().$row['src'];?>" width="100px" height="100px"></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['percentage'];?></td>
                                        <td>
                                        <a href="<?php echo base_url('admin/result_form').'/'.$row['id'];?>">
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





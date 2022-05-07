
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Opening Hours
            </div>
            <div class="card-body">
                <form class="form form-horizontal" >

                    <div class="section">
                        <div class="section-body">
                            <table class="table table-responsive" id="student_level">
                                <thead>
                                     <tr>
                                         <td>Id</td>
                                        <td>Day</td>
                                        <td>Open</td>
                                        <td>Close</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['day'];?></td>
                                        <td><?php echo date("h:i:s",strtotime($row['open']));?></td>
                                        <td><?php echo date("h:i:s",strtotime($row['close']));?></td>
                                        <td>
                                        <a href="<?php echo base_url('admin/hours_form').'/'.$row['id'];?>">
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                            <button type="submit" class="btn btn-danger btn-xs delete_hours" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
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





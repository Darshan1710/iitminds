
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Future Post
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
                                        <td>Title</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($result){
                                    foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><img src="<?php echo base_url().$row['image'];?>" height="50px" width="100px"></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo date('Y-m-d',strtotime($row['date']));?></td>
                                        <td>
                                        <a href="<?php echo base_url('admin/future_post_form').'/'.$row['id'];?>">
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                        <button class="btn btn-danger btn-xs delete_blog" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                        </td>
                                        
                                    </tr>
                                    <?php }}else{ ?>
                                    <tr><td>No data Found</td></tr>
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





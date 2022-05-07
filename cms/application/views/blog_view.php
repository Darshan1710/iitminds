
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Downloads
            </div>
            <div class="card-body">
                <form class="form form-horizontal" >
                    <div class="section">
                        <div class="section-body">
                            <table class="table table-responsive" id="student_level">
                                <thead>
                                     <tr>
                                        <td>Id</td>
                                        <td>Author Name</td>
                                        <td>Author Description</td>
                                        <td>Author Image</td>
                                        <td>Title</td>
                                        <td>Blog Image</td>
                                        <td>Blog Description</td>
                                        <td>Date</td>
                                        <td>Action</td>
                                        <td>Tag</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($result){
                                    foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['author_name'];?></td>
                                        <td><?php echo $row['author_description'];?></td>
                                        <td><img src="<?php echo base_url().$row['author_img'];?>" height="50px" width="100px"></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><img src="<?php echo base_url().$row['blog_img'];?>" height="50px" width="100px"></td>
                                        <td><a href="<?php echo base_url('admin/blog_in_detail').'/'.$row['id']?>"><button class="btn btn-primary btn-xs" type="button">View Blog</button></a></td>
                                        <td><?php echo date('Y-m-d',strtotime($row['date']));?></td>
                                        <td>
                                        <a href="<?php echo base_url('admin/blog_form').'/'.$row['id'];?>">
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                        <button class="btn btn-danger btn-xs delete_blog" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                        </td>
                                        <td><?php $tags = explode(",", $row['tag']);
                                             foreach ($tags as $t){
                                                 echo "<span style='background-color:#A9A9A9;padding:2px;'>$t</span> &nbsp&nbsp";
                                             }   
                                        ?></td>
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





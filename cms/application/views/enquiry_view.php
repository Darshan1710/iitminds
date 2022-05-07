
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
                                        <td>Subject</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td>Courses</td>
                                        <td>Message</td>
                                        <td>Page Link</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row){?>
                                    <tr>
                                        <td><?php echo $row['enquiry_id'];?></td>
                                        <td><?php echo $row['subject'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['courses'];?></td>
                                        <td><?php echo $row['message'];?></td>
                                        <td><?php echo $row['page_link'];?></td>
                                        <td>
                                        
                                            <button type="submit" class="btn btn-danger btn-xs delete_feedback" id="<?php echo $row['enquiry_id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
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





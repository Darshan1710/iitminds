
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
      Admin
      </div>
      <div class="card-body">
        <div class="section">
          <div class="section-body">
            <table class="table table-responsive">
                <thead>
                  <tr>
                  <td>Id</td>
                  <td>Image</td>
                  <td>Heading</td>
                  <td>Description</td>
                  <td>Integrated Batch</td>
                  <td>Regular Batch</td>
                  <td>Commencement</td>
                  <td>Duration</td>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $row){?>
                  <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><img src="<?php echo base_url().$row['image_path']; ?>" width="100px" height="100px">
                  <td><?php echo $row['heading']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['integrated_batch'];?></td>
                  <td><?php echo $row['regular_batch'];?></td>
                  <td><?php echo $row['commencement'];?></td>
                  <td><?php echo $row['duration'];?></td>
                  <td>
                    <a href="<?php echo base_url('admin/courses_form').'/'.$row['id'];?>">
                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </a>
                      <button type="submit" class="btn btn-danger btn-xs delete_courses" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                  </td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

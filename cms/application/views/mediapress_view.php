
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
                  <td>Class</td>
                  <td>Image</td>
                  <td>Title</td>
                  <td>Media Id</td>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $row){?>
                  <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['class'];?></td>
                  <td><img src="<?php echo base_url().$row['src'];?>" width="100px" height="100px"></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['media_id']; ?></td>
                  <td>
                    <a href="<?php echo base_url('admin/mediapress_form').'/'.$row['id'];?>">
                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </a>
                      <button type="submit" class="btn btn-danger btn-xs delete_mediapress" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
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

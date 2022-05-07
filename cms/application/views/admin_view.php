
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
                  <td>Username</td>
                  <td>Password</td>
                  <td>Status</td>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $row){?>
                  <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['password'];?></td>
                  <td><?php if($row['is_active'] == 1){ ?>
                    <button type="button" class="btn btn-success btn-xs admin_status" id="<?php echo $row['id']?>">Active</button>

                    <?php }else{ ?>
                    <button type="button" class="btn btn-primary btn-xs admin_status" id="<?php echo $row['id']?>">Inactive</button>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?php echo base_url('admin/admin_form').'/'.$row['id'];?>">
                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </a>
                    <button class="btn btn-danger btn-xs delete_admin" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
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

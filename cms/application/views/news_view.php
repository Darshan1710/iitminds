
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
                  <td>News</td>
                  <td>Action</td>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $row){?>
                  <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['news'];?></td>
                  <td>
                    <a href="<?php echo base_url('admin/news_form').'/'.$row['id'];?>">
                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </a>
                      <button type="submit" class="btn btn-danger btn-xs delete_news" id="<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
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

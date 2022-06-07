<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-12">
      <h1 class="my-4">
        <small></small>
      </h1>

      <!-- Blog Post -->
      <h1>Set Tanggal Kelulusan :</h1>
      <div class="table-toolbar">

        <div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width:600px;">
              <div class="modal-header">
                <h4>Form Input Data Siswa</h4>
              </div>
              <div class="modal-body">
                <div class="portlet-body form">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <form method="get" action="<?php echo site_url('/admin/tambah_settanggal') ?>" class="form-inline">

        <button type="submit" class="btn btn-primary">Set Tanggal Kelulusan</button>
      </form>

      <div class="alert alert-info">
        Ini adalah halaman untuk menentukan tanggal kelulusan.</div>
      <div>
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr align="center">
              <th scope="col">Tanggal Kelulusan</th>


              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($data->result() as $row) { ?>
              <tr>
                <td align="center"><?php echo $row->settanggal ?></td>
                <td align="center"><i class="fa fa-trash \" class="btn btn-primary btn-sm"></i><a href="<?php echo site_url('admin/hapus_settanggal/' . $row->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
              </tr>

          </tbody>
        <?php } ?>
        </table>


      </div>


      <!-- Blog Post -->
    </div>

    <!-- Sidebar Widgets Column -->


  </div>
  <!-- /.row -->

</div>

<!-- /.container -->
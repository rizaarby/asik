<!-- Page Content -->
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <h1 class="my-4">
          <small></small>
        </h1>

        <!-- Blog Post -->
        <h1>Daftar Pesan Siswa :</h1>




        <form method="get" action="<?php echo site_url('/admin/view_pesan') ?>" class="form-inline">

          <div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <td align="center">No.</td>
                  <td align="center">Nama Pengirim</td>
                  <td align="center">Pesan</td>
                  <td align="center">Email</td>
                  <td align="center">No. Telp</td>



                  <td align="center" colspan=1>Aksi</td>
                </tr>

              </thead>


              <tbody>

                <?php foreach ($data->result() as $row) { ?>
                  <tr>
                    <td align="center"><?php echo $row->id ?></td>
                    <td align="center"><?php echo $row->nama ?></td>
                    <td align="center"><?php echo $row->pesan ?></td>
                    <td align="center"><?php echo $row->email ?></td>
                    <td align="center"><?php echo $row->notelp ?></td>




                    </td>

                    <td align="center"><i class="fa fa-trash"></i><a href="<?php echo site_url('admin/hapus_pesan/' . $row->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
                  </tr>

              </tbody>
            <?php } ?>
            </table>
            <hr>
            <div class="row">
              <div class="col">
                <?php echo $pagination; ?>
              </div>
            </div>

          </div>


          <!-- Blog Post -->
      </div>

      <!-- Sidebar Widgets Column -->


    </div>
    <!-- /.row -->

  </div>

  <!-- /.container -->
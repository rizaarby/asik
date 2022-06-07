<!-- Page Content -->
<div class="container">
  <div class="jumbotron">

    <!-- Blog Entries Column -->
    <div class="col-md-12">
      <h1 class="my-4">
        <small></small>
      </h1>
      <!-- Blog Post -->
      <div class="card mb-4">
        <div class="card-body">
          <p class="card-text">
          <H1>Edit Data Siswa</H1>
          </p>
          <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <!-- <?php echo form_open('admin/ubah_data/' . $hasil->id); ?> -->
            <!-- <div class="form-body"> -->
            <!-- <div class="form-group">
                  <label class="col-md-12 control-label">Username</label>
                  <div class="col-md-12">
                    <textarea class="form-control" rows="1" placeholder="" name="username"><?php echo $hasil->username; ?></textarea>
                  </div>
                </div>
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-12 control-label">Password</label>
                    <div class="col-md-12">
                      <textarea class="form-control" rows="1" placeholder="" name="password"></textarea>
                    </div>
                  </div>
                  <?php echo form_submit('submit', 'Update'); ?>
                  <?php echo form_close(); ?>
                  <button style="text-decoration: none;"><a href="<?php echo site_url(); ?>/admin/view_user">Kembali</button>

                  </form>
                  END FORM
                </div> -->
            <!-- </div> -->
            <form action="<?= base_url("index.php/admin/update_data_siswa_dan_nilai"); ?>" method="post">
              <div class="form-group">
                <label for="Nomor Ujian">No. Ujian</label>
                <input type="text" class="form-control" name="no_ujian" value="<?= $data->no_ujian ?>" readonly>
              </div>
              <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" value="<?= $data->nama ?>" name="nama">
              </div>
              <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" value="<?= $data->jurusan ?>" name="jurusan">
              </div>
              <input type="hidden" name="id" value="<?= $data->id ?>">
              <div class="form-group">
                <label for="Bahasa Indonesia">Bahasa Indonesia</label>
                <input type="number" min="0" max="10" value="<?= $data->bi ?>" class="form-control" name="bi">
              </div>
              <div class="form-group">
                <label for="Matematika">Matematika</label>
                <input type="number" min="0" max="10" value="<?= $data->mat ?>" class="form-control" name="mat">
              </div>
              <div class="form-group">
                <label for="Bahasa Inggris">Bahasa Inggris</label>
                <input type="number" min="0" max="10" value="<?= $data->bing ?>" class="form-control" name="bing">
              </div>
              <div class="form-group">
                <label for="Kejuruan">Kejuruan</label>
                <input type="number" min="0" max="10" value="<?= $data->kejuruan ?>" class="form-control" name="kejuruan">
              </div>
              <button class="btn btn-primary" type="submit">Update</button>
              <a class="btn btn-danger" href="<?= site_url('/admin/list_data'); ?>">Batal</a>
            </form>
          </div>
          <!-- Blog Post -->
        </div>

        <!-- Sidebar Widgets Column -->


      </div>
      <!-- /.row -->

    </div>

    <!-- /.container -->
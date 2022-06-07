<div class="container">
  <h1>Tambah Data User</h1>
  <hr>
  <div class="jumbotron">

    <form action="<?php echo site_url(); ?>/admin/tambah_user" class="form-horizontal" method="post">
      <div class="form-body">
        <div class="form-group">
          <label class="col-md-12 control-label">Username</label>
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 control-label">Password</label>
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Masukkan Password" name="password">
          </div>
        </div>

        <div class="modal-footer">
          <button type="reset" value="reset" class="btn btn-red">Ubah</button>
          <button type="submit" class="btn btn-red">Simpan</button>

        </div>
    </form>
  </div>
</div>
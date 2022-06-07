<div class="container">
  <h1>Set Tanggal Kelulusan</h1>
  <hr>
  <div class="jumbotron">

    <form action="<?php echo site_url(); ?>/admin/settanggal" class="form-horizontal" method="post">
      <div class="form-body">
        <div class="form-group">
          <label class="col-md-12 control-label">Input Tanggal Kelulusan</label>
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Masukkan Tanggal Kelulusan" name="settanggal">
          </div>
        </div>

        <div class="modal-footer">
          <button type="reset" value="reset" class="btn red">Reset</button>
          <button type="submit" class="btn red">Submit</button>

        </div>
    </form>
  </div>
</div>
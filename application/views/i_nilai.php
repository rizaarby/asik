  <div class="container">
    <?php
    $message = $this->session->flashdata('message');
    if (isset($message)) {
      echo $message;
    }
    ?>
    <h3>Input Data Nilai</h3>
    <hr>
      <div class="jumbotron">
      <form action="<?= base_url("index.php/admin/input_nilai"); ?>" method="post">
        <div class="form-group">
          <select class="custom-select" name="no_ujian">
            <option value="" selected>Pilih Siswa</option>
            <?php
            foreach ($siswa as $s) { ?>
              <option value="<?= $s->no_ujian ?>" <?php echo set_select('no_ujian',  $s->no_ujian); ?>><?= $s->nama ?></option>
            <?php  }
            ?>
          </select>
          <?= form_error('no_ujian', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
          <label for="Bahasa Indonesia">Bahasa Indonesia</label>
          <input type="number" min="0" max="10" class="form-control" name="bi" value="<?= set_value('bi') ?>">
          <?= form_error('bi', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
          <label for="Matematika">Matematika</label>
          <input type="number" min="0" max="10" class="form-control" name="mat" value="<?= set_value('mat') ?>">
          <?= form_error('mat', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
          <label for="Bahasa Inggris">Bahasa Inggris</label>
          <input type="number" min="0" max="10" class="form-control" name="bing" value="<?= set_value('bing') ?>">
          <?= form_error('bing', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
          <label for="Kejuruan">Kejuruan</label>
          <input type="number" min="0" max="10" class="form-control" name="kejuruan" value="<?= set_value('kejuruan') ?>">
          <?= form_error('kejuruan', '<small class="text-danger">', '</small>') ?>
        </div>
        <button class="btn btn-primary" type="submit">Tambah</button>
      </form>
    </div>
    <div class="well">
    </div>

    <script>
      var timeout = 3000;

      $('.alert').delay(timeout).fadeOut(300);
    </script>
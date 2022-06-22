<div class="container">
  <?php
  $message = $this->session->flashdata('message');
  if (isset($message)) {
    echo $message;
  }
  ?>
  <h3>Tambah Data Siswa</h3>
  <hr>
  <!-- <div class="jumbotron">
      <div class="container">
        <form method="post" action="<?php echo base_url("index.php/admin/form_siswa"); ?>" enctype="multipart/form-data"> -->

  <div class="jumbotron">
    <form action="<?= base_url("index.php/admin/tambah_siswa"); ?>" method="post">
      <div class="form-group">
        <label for="Nomor Ujian">No. Ujian</label>
        <input type="text" class="form-control" name="no_ujian" value="<?= set_value('no_ujian') ?>" placeholder="Contoh: 1-04-001-0001-5">
        <?= form_error('no_ujian', '<small class="text-danger">', '</small>') ?>
      </div>
      <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= set_value('nama') ?>" placeholder="Bambang Susilo">
        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
      </div>
      <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="<?= set_value('jurusan') ?>" placeholder="AKUNTANSI">
        <?= form_error('jurusan', '<small class="text-danger">', '</small>') ?>
      </div>
      <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
  </div>
  <h3>Daftar Siswa</h3>
  <hr>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">No.Ujian</th>
        <th scope="col">Nama</th>
        <th scope="col">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($siswa as $s) { ?>
        <tr>
          <th><?= $i++ ?></th>
          <td><?= $s->no_ujian ?></td>
          <td><?= $s->nama ?></td>
          <td><?= $s->jurusan ?></td>
        </tr>
      <?php  }
      ?>
    </tbody>
  </table>
  <div class="well">
  </div>

  <script>
    var timeout = 3000;

    $('.alert').delay(timeout).fadeOut(300);
  </script>
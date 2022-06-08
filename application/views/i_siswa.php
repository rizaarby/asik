<div class="container">
  <h3>Tambah Data Siswa</h3>
  <hr>
  <!-- <div class="jumbotron">
      <div class="container">
        <form method="post" action="<?php echo base_url("index.php/admin/form"); ?>" enctype="multipart/form-data"> -->
  <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->

  <!-- <input type="file" name="file"> -->

  <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->

  <!-- <input type="submit" value="upload" name="preview">
        </form> -->

  <!-- <form method="post" action="<?php echo base_url("index.php/admin/import"); ?>" enctype="multipart/form-data"> -->
  <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
  <!-- <br>Import Ke Database*: <br>
          <input type="submit" value="Import" class="btn btn-primary">
        </form><br>
        <p> -->
  <!-- *File yang bisa di import adalah .xls (Excel 2003-2007).</p>
        Download contoh file excel <a href="../../excel/import_data_siswa.xlsx">Download</a> <br>
        <strong>*Jangan lupa Kosongkan Data terlebih dahulu sebelum diimport.</strong>
        </form>
        <form method="post" action="<?php echo base_url("index.php/admin/truncate"); ?>"> -->

  <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->


  <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
  <!-- <br>
          <input type="submit" value="Kosongkan Data" class="btn btn-primary">
        </form>

      </div>

    </div> -->
  <div class="jumbotron">
    <form action="<?= base_url("index.php/admin/tambah_siswa"); ?>" method="post">
      <div class="form-group">
        <label for="Nomor Ujian">No. Ujian</label>
        <input type="text" class="form-control" name="no_ujian" placeholder="Contoh: 1-04-001-0001-5" required>
      </div>
      <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Bambang Susilo" required>
      </div>
      <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" placeholder="AKUNTANSI" required>
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
        <th scope="col">No. Ujian</th>
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
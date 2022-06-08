  <div class="container">
    <h3>Input Data Nilai</h3>
    <hr>
    <!-- <div class="jumbotron">
      <div class="container">
        <form method="post" action="<?php echo base_url("index.php/admin/form2"); ?>" enctype="multipart/form-data"> -->
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

    <!-- <form method="post" action="<?php echo base_url("index.php/admin/import2"); ?>" enctype="multipart/form-data"> -->
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <!-- <br>Import Ke Database*: <br>
          <input type="submit" value="Import" class="btn btn-primary">
        </form><br>
        <p> -->
    <!-- *File yang bisa di import adalah .xls (Excel 2003-2007).</p>
    Download contoh file excel <a href="../../excel/import_data_siswa.xlsx">Download</a> <br> -->
    <!-- <strong>*Jangan lupa Kosongkan Data terlebih dahulu sebelum diimport.</strong>
        </form>
        <form method="post" action="<?php echo base_url("index.php/admin/truncate2"); ?>"> -->

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

      </div> -->

    <!-- </div> -->
    <div class="jumbotron">
      <form action="<?= base_url("index.php/admin/input_nilai"); ?>" method="post">
        <div class="form-group">
          <select class="custom-select" name="no_ujian">
            <option selected>Pilih Siswa</option>
            <?php
            foreach ($siswa as $s) { ?>
              <option value="<?= $s->no_ujian ?>"><?= $s->nama ?></option>
            <?php  }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="Bahasa Indonesia">Bahasa Indonesia</label>
          <input type="number" min="0" max="10" class="form-control" name="bi" placeholder="Masukkan angka tanpa titik (.) atau koma (,)" required>
        </div>
        <div class="form-group">
          <label for="Matematika">Matematika</label>
          <input type="number" min="0" max="10" class="form-control" name="mat" placeholder="Masukkan angka tanpa titik (.) atau koma (,)" required>
        </div>
        <div class="form-group">
          <label for="Bahasa Inggris">Bahasa Inggris</label>
          <input type="number" min="0" max="10" class="form-control" name="bing" placeholder="Masukkan angka tanpa titik (.) atau koma (,)" required>
        </div>
        <div class="form-group">
          <label for="Kejuruan">Kejuruan</label>
          <input type="number" min="0" max="10" class="form-control" name="kejuruan" placeholder="Masukkan angka tanpa titik (.) atau koma (,)" required>
        </div>
        <button class="btn btn-primary" type="submit">Tambah</button>
      </form>
    </div>
    <div class="well">
    </div>
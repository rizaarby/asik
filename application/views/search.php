<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengumuman Kelulusan Online</title>
    <link rel="icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/gif" sizes="16x16">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <i class="fa fa-home"></i>
      <a class="navbar-brand" href="<?php echo site_url();?>/welcome/cari"><h4>ASIK 2022</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/about">Tentang</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/panduan">Panduan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/contact">Hubungi</a>
            </li>
            &nbsp &nbsp &nbsp
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Login</a>
              
              </a>
            </li>
          </ul>
        
      </div>
    </nav>
    <br>
    <marquee><strong><h5>Selamat Datang di <strong>Aplikasi Sistem Informasi Kelulusan (ASIK)</strong>.  <strong>[INFO!]</strong> Untuk Pengumuman Kelulusan siswa kelas XII dapat dilihat pada tanggal 25 April 2022 jam 12.00 WIB.  <strong>[PERHATIAN!]</strong> Jangan Mempercayai info Kelulusan dari sumber lain kecuali dari Aplikasi ini.</h5></strong></marquee>
    <hr>
    <br>
    <div class="container">
      
      <h3 align="center">Selamat datang di Aplikasi Sistem Informasi Kelulusan (ASIK)</h3>
      <br>
      <br>
<div class="well">
<div align="right"><SCRIPT language=JavaScript src="<?php echo base_url();?>assets/js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat Pagi, Besti!'); }
else { if (h < 15) { document.write('Selamat Siang, Besti!'); }
else { if (h < 19) { document.write('Selamat Sore, Besti!'); }
else { if (h <= 23) { document.write('Selamat Malam, Besti!'); }
}}}</SCRIPT>   </div>
      <hr>
      <form action="<?php echo base_url('index.php/welcome/hasil')?>" action="GET">
        <div class="form-group">
          <label for="cari">Masukkan nomor ujian Anda disini!.</label>
          <input type="text" class="form-control" id="cari" name="cari" placeholder="Contoh : 1-04-001-0001-5">
        </div>
        <input class="btn btn-primary" type="submit" value="Cari!">
      </form>
    </div>
  </div>

<br>
<br>
<table width="400" align="center">
  <tr>
    <td>
      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
   
      
  
   
<script language="JavaScript">
 <?php foreach ($list as $key) { ?>
TargetDate = "<?php echo $key->settanggal;?>"; <?php } ?>
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Waktu Pengumuman Kelulusan";
FinishMessage = "Hore, Sekarang Waktunya Pengumuman!";
</script>
<script language="JavaScript" src="<?php echo base_url();?>assets/js/countdown.js"></script>
</h4>
</div> 
      </td>
  </tr>
</table>
<br>

    <footer class="footer">
    <div class="container">
      <p class="text-muted">&copy; 2022 &middot; Tim Capstone Project ASIK</p>
    </div>
  </footer>
  </body>
</html>

		<!DOCTYPE html>
		<html>

		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title>Pengumuman Kelulusan Online</title>
		  <link rel="icon" href="<?php echo base_url('assets/images/logo3.png') ?>" type="image/gif" sizes="16x16">
		  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <!-- Custom styles for this template -->
		  <link href="<?php echo base_url(); ?>assets/css/blog-home.css" rel="stylesheet">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		  <title></title>
		</head>

		<body>
		  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		    <i class="fa fa-home"></i>
		    <a class="navbar-brand" href="<?php echo site_url(); ?>/welcome/cari">
		      <h4>ASIK 2022</h4>
		    </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarResponsive">
		      <ul class="nav navbar-nav ml-auto">
		        <li class="nav-item active">
		          <a class="nav-link" href="<?php echo site_url(); ?>/welcome/about">Tentang</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="<?php echo site_url(); ?>/welcome/panduan">Panduan</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="<?php echo site_url(); ?>/welcome/contact">Hubungi</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Login</a>

		          </a>
		        </li>
		      </ul>

		    </div>
		  </nav>
		  <br>
		  <br>
		  <hr>

		  <div class="cleaner_h10"></div>
		  <div id="hasil"></div>
		  <div class="container">
		    <?php
        $message = $this->session->flashdata('message');
        echo $message;
        ?>
		    <h3>Kontak Kami</h3>
		    <hr>
		    <div class="jumbotron">
		      <div class="well">
		        <form action="<?php echo site_url(); ?>/welcome/kirim_pesan" class="form-horizontal" method="post">
		          <fieldset>
		            <legend>Silahkan isi Form di bawah ini!</legend>
		            <div class="form-group">
		              <label for="nama" class="col-lg-2 control-label">Nama Lengkap</label>
		              <div class="col-lg-10">
		                <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Nama Anda" size="30">
		                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
		              </div>
		            </div>
		            <div class="form-group">
		              <label for="pesan" class="col-lg-2 control-label">Pesan</label>
		              <div class="col-lg-10">
		                <textarea class="form-control" rows="3" cols="40" placeholder="Pesan Anda" name="pesan"><?php echo set_value('pesan') ?></textarea>
		                <?= form_error('pesan', '<small class="text-danger">', '</small>') ?>
		              </div>
		            </div>
		            <div class="form-group">
		              <label for="email" class="col-lg-2 control-label">Email</label>
		              <div class="col-lg-10">
		                <input type="text" class="form-control" name="email" value="<?php echo set_value('email') ?>" placeholder="Email Anda" size="30">
		                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
		              </div>
		            </div>
		            <div class="form-group">
		              <label for="pesan" class="col-lg-2 control-label">No Telp</label>
		              <div class="col-lg-10">
		                <textarea class="form-control" rows="3" cols="40" placeholder="No Telp Anda" name="notelp"><?php echo set_value('notelp') ?></textarea>
		                <?= form_error('notelp', '<small class="text-danger">', '</small>') ?>
		              </div>
		            </div>
		            <div class="form-group">
		              <div class="col-lg-10 col-lg-offset-2">

		                <input type="submit" name="submit" id="submit" value="Kirim Pesan" class="btn btn-primary">

		              </div>
		            </div>
		            <div id="hasil" style="background-color:#0099FF; color:#FFFFFF; text-align:center;"></div>
		          </fieldset>
		        </form>
		      </div>
		    </div>
		    <p class="text-muted">&copy; 2022 &middot; Tim Capstone Project ASIK</p>
		  </div>

		  <script>
		    var timeout = 3000;

		    $('.alert').delay(timeout).fadeOut(300);
		  </script>
		</body>

		</html>
<div class="container">
  <div class="jumbotron">
    <div align="right">
      <SCRIPT language=JavaScript src="<?php echo base_url(); ?>assets/js/almanak.js"></SCRIPT>
      <span class="style1">I</span>
      <SCRIPT language=JavaScript>
        var d = new Date();
        var h = d.getHours();
        if (h < 10) {
          document.write('Selamat Pagi, Bro!');
        } else {
          if (h < 14) {
            document.write('Selamat Siang, Bro!');
          } else {
            if (h < 17) {
              document.write('Selamat Sore, Bro!');
            } else {
              if (h <= 23) {
                document.write('Selamat Malam, Bro!');
              }
            }
          }
        }
      </SCRIPT>
    </div>
    <hr>
    <br>

    <h1>Halo, Admin!</h1>
    <p>Ini merupakan halaman administrasi untuk pengumuman <strong>Kelulusan 2022</strong>.</p>
    <p>Fasilitas yang tersedia saat ini adalah <strong>Manajemen User</strong> yang diberi hak untuk mengelola keseluruhan data aplikasi ini.</p>
  </div>
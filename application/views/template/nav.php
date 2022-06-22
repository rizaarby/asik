<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <i class="fa fa-home"></i>
        <a class="navbar-brand" href="<?php echo site_url(); ?>/admin">
            <h4>ASIK 2022</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/view_user">Tambah User</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/view_settanggal">Set Tanggal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/form_siswa">Input Data Siswa</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/form_nilai">Input Nilai</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/list_data">Lihat Data</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>/admin/view_pesan">Pesan</a>
                </li>
                &nbsp &nbsp &nbsp
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/login/logout"> Hai, <?php echo $this->session->userdata("nama"); ?><h7 style="color:#f4f4f2;"> | Logout</h7></a>

                    </a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <hr>
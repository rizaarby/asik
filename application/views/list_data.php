  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <h1 class="my-4">
          <small></small>
        </h1>

        <!-- Blog Post -->
        <h1>Daftar Data Siswa :</h1>
        <div class="table-toolbar">

          <div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width:600px;">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                  <div class="portlet-body form">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>


        <div class="row">
          <div class="container">
            <table class="table table-bordered">
              <thead>

                <tr>

                  <th rowspan="2">No. Ujian</th>
                  <th rowspan="2">Nama Siswa</th>
                  <th rowspan="2">Kompetensi Keahlian</th>
                  <th colspan="5">Nilai UN</th>
                  <th rowspan="2">Status</th>
                  <th scope="col" colspan="2" rowspan="2">Action</th>

                </tr>
                <tr>
                  <th>Bahasa Indonesia</th>
                  <th>Bahasa Inggris</th>
                  <th>Matematika</th>
                  <th>Kejuruan</th>
                  <th>Rata-rata</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($data->result() as $row) { ?>
                  <tr>

                    <td align="center"><?php echo $row->no_ujian ?></td>
                    <td align="center"><?php echo $row->nama ?></td>
                    <td align="center"><?php echo $row->jurusan ?></td>
                    <td align="center"><?php echo $row->bi ?></td>
                    <td align="center"><?php echo $row->mat ?></td>
                    <td align="center"><?php echo $row->bing ?></td>
                    <td align="center"><?php echo $row->kejuruan ?></td>
                    <td align="center"><?php
                                        $n1 = $row->bi;
                                        $n2 = $row->mat;
                                        $n3 = $row->bing;
                                        $n4 = $row->kejuruan;
                                        $total = ($n1 + $n2 + $n3 + $n4) / 4;
                                        $rata = $total;
                                        echo $rata;
                                        ?></td>
                    <td><?php
                        $n1 = $row->bi;
                        $n2 = $row->mat;
                        $n3 = $row->bing;
                        $n4 = $row->kejuruan;
                        $total = ($n1 + $n2 + $n3 + $n4) / 4;
                        $rata = $total;

                        if ($rata < 7.5) {
                          echo "TIDAK LULUS";
                        } else {
                          echo "LULUS";
                        }
                        ?>


                    </td>
                    <td align="center">
                      <a class="btn-edit bg-primary" href="<?php echo site_url('admin/get_data_siswa_dan_nilai/' . $row->no_ujian); ?>"><i class="fa fa-edit text-white"></i></a>
                    </td>
                    <td align="center">
                      <a class="btn-hapus bg-danger" href="<?php echo site_url('admin/hapus_data_siswa/' . $row->no_ujian); ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash text-white"></i></a>
                    </td>


                  </tr>

              </tbody>
            <?php } ?>
            </table>


          </div>

        </div>
        <!-- Blog Post -->
      </div>

      <!-- Sidebar Widgets Column -->


    </div>
    <!-- /.row -->

  </div>

  <!-- /.container -->
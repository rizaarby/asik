<!-- Page Content -->
<div class="container">
  <div class="jumbotron">

    <!-- Blog Entries Column -->
    <div class="col-md-12">
      <h1 class="my-4">
        <small></small>
      </h1>
      <!-- Blog Post -->
      <div class="card mb-4">
        <div class="card-body">
          <p class="card-text">
          <H1>Edit Data User</H1>
          </p>
          <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <?php echo form_open('admin/ubah_data/' . $hasil->id); ?>
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-12 control-label">Username</label>
                <div class="col-md-12">
                  <textarea class="form-control" rows="1" placeholder="" name="username"><?php echo $hasil->username; ?></textarea>
                </div>
              </div>
              <div class="form-body">
                <div class="form-group">
                  <label class="col-md-12 control-label">Password</label>
                  <div class="col-md-12">
                    <textarea class="form-control" rows="1" placeholder="" name="password"></textarea>
                  </div>
                </div>
                <?php echo form_submit('submit', 'Update'); ?>
                <?php echo form_close(); ?>
                <button style="text-decoration: none;"><a href="<?php echo site_url(); ?>/admin/view_user">Kembali</button>

                </form>
                <!-- END FORM-->
              </div>
            </div>

          </div>
          <!-- Blog Post -->
        </div>

        <!-- Sidebar Widgets Column -->


      </div>
      <!-- /.row -->

    </div>

    <!-- /.container -->
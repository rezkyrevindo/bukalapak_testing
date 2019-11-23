<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view('_partials/header.php'); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('_partials/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Restoran</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="container-fluid">
            <?php echo form_open("restoran/editRestoran/".$restoran->id_restoran); ?>
            <form>
              <div clas="col-8">
              <div class="form-group">
                <label for="exampleFormControlInput0">Nama Restoran</label>
                <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $restoran->nama_restoran); ?>" >
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jam Buka</label>
                <input type="time" class="form-control" name="jam" value="<?php echo set_value('jam', $restoran->jam_buka); ?>" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Alamat</label>
                <textarea class="form-control" name="alamat" value="<?php echo set_value('alamat', $restoran->alamat_restoran); ?>"><?php echo $restoran->alamat_restoran ?></textarea>
              </div>
              </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Ubah Data">
            </div>
            </form>
          </div>
        </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('_partials/footer.php'); ?>

</body>

</html>

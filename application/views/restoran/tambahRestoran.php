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
            <h1 class="h3 mb-0 text-gray-800">Tambah Restoran</h1>
          </div>
          
          <!-- Content Row -->
          <div class="row">
            <div class="container-fluid">
              <?php echo form_open("restoran/tambahRestoran"); ?>
            <form>
              <div clas="col-8">
              <div class="form-group">
                <label for="exampleFormControlInput0">Nama Restoran</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jam Buka</label>
                <input type="time" class="form-control" name="jam">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
              </div>
             
              <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
            </div>
            </form>
            <?php echo form_close(); ?>
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

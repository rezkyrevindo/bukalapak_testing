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
            <h1 class="h3 mb-0 text-gray-800">Atur Restoran</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo base_url('/restoran/tambahRestoran') ?>"class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Tambah Anggota</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Restoran</th>
                      <th>Jam Buka</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Restoran</th>
                      <th>Jam Buka</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($data_restoran as $da) : ?>
                    <tr>

                      <td><?php echo $da['nama_restoran'] ?></td>
                      <td><?php echo $da['jam_buka'] ?></td>
                      <td><?php echo $da['alamat_restoran'] ?></td>
                      <td>
                        <a href="<?php echo base_url('restoran/deleteRestoran/'.$da['id_restoran']); ?>" class="btn btn-danger">Hapus</a>
                        <a href="<?php echo base_url('restoran/editRestoran/'.$da['id_restoran']); ?>" class="btn btn-success">Ubah</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
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

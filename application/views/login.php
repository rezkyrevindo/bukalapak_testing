<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view('_partials/header.php'); ?>

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-top: 10%;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><i class="fas fa-chef"></i> <b>Restoran Sign In</b> | Pegawai</h1>
                  </div>
                  <?php echo form_open("welcome/login"); ?>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Kata Sandi">
                    </div>
                    <hr>
                    <input type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                  </form>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>

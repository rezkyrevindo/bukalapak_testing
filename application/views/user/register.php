<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
  <style type="text/css">
    body {
        font-family: 'Roboto', serif;
      }
    
  </style>
</head>


<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="#">BukaAja | Register</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari yang kamu butuhkan" aria-label="Search">
        <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      <ul class="navbar-nav ml-auto ">
        
        
        <?php if ($this->session->userdata('username') != null): ?>
            <li class="nav-item ">
              <a class="nav-link" style="color: #fff" href="<?php echo base_url ('home') ?>">&nbsp;Home  &nbsp;</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" style="color: #fff" href="<?php echo base_url ('home/penjual') ?>">&nbsp;Pelapak  &nbsp;</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" style="color: #fff" href="<?php echo base_url ('user/logout') ?>">&nbsp;Logout  &nbsp;</a>
            </li>
          <?php if ($this->session->userdata('status') == 'pembeli'): ?>
            <li class="nav-item">
              <a class="btn btn-light" style="color: #dc3545; margin-right: 10px" href="<?= base_url('order') ?>"><i class="fa fa-list"></i> Status Belanja</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-light" style="color: #dc3545" href="<?= base_url('cart') ?>"><i class="fa fa-shopping-cart"></i> Keranjang</a>
            </li>
          <?php else: ?>
            <li class="nav-item ">
              <a class="btn btn-light" style="color: #dc3545; margin-right: 10px" href="<?php echo base_url ('product') ?>"><i class="fa fa-list"></i> Product Saya </a>
            </li>

            <li class="nav-item ">
              <a  class="btn btn-light" style="color: #dc3545; margin-right: 10px" href="<?php echo base_url ('order/order_masuk') ?>">&nbsp; <i class="fa fa-list"></i>  Orderan </a>
            </li>

           
          <?php endif ?>
          
            
        <?php else: ?>
          <li class="nav-item ">
            <a class="nav-link" style="color: #fff" href="<?php echo base_url ('user/Login') ?>">Login </a>
          </li>

          <li class="nav-item" style="margin-right: 20px">
            <a class="nav-link" style="color: #fff" href="<?php echo base_url ('user/register') ?>">Daftar</a>
          </li>
        <?php endif ?>
        

        
        
        
      </ul>
      
    </div>
  </nav>
<body >
	<div class="container-fluid" style="padding: 20px; margin-bottom: 20px;">
		
		<div class="row">
				
			<div class="box col-md-6" class="text-center">
				<center>
		        <img src="<?= base_url ('assets/logo.jpg') ?>" width="250" height="250" >
		        </center>
				
			</div>
			<div class="box col-md-6">
				<div class="card">

				<form action="<?= base_url('user/register') ?>" method="post">
				  <div class="card-header">
				    Register
				  </div>
				  <div class="card-body">
				   
				    <div class="form-group">
						<label>Email</label>
						<input type="email"  name="email" class="form-control" required="" >
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama"  class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat" required></textarea>
					</div>
					<input type="submit" name="submit" class="btn btn-danger " value="Register" style="float:right;" >
				  </div>
				</div>
				
			</form>
			</div>

		</div>


	</div>
</body>


  <!-- Footer -->
<footer style="position: absolute;
bottom: 0;
width: 100%;
height: 3rem;
margin-top: 30px;
   "
	class="d-flex justify-content-center mt-auto bg-danger">
        <div class="text-center" style="color: #fff; margin-top: 10px;">
            &copy; 2019, crafted with love by <span>group 2</span>  
        </div>
</footer>
    



</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').dataTable();
	});
</script>
</html>
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
    <a class="navbar-brand" href="#">BukaAja | <?php if ($this->session->userdata('status') == 'pembeli'): ?>
      User
    <?php else: ?>
      Pelapak
    <?php endif ?></a>
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
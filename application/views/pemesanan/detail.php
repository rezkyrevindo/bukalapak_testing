<div class="container" style="padding: 10px"><br>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb bg-danger text-white">
    <h5 style="margin-top: 10px;">Orderan <?= '# '.$id_order ?></h5>
  </ol>
  <div class="col-md-12  ">
    <?php foreach ($order as $data): ?>
      <div class="card">
        <div class="row " style="padding: 10px;">
          <div class="col-md-2">
            <img width="100%" height="200" src="<?= base_url('upload/img/'.$data['img']) ?>">
          </div>
          <div class="col-md-5">
            <label id="nama_barang" ><?= $data['nama_product'] ?></label><br>
            <label id="nama_barang" style="color:red"><?= 'Rp'.number_format($data['harga']) ?></label><br>
            <label id="nama_barang" ><?= $data['qty'].' item' ?></label><br>
            <small>Status</small><br>
            <label>
              <?php if ($data['status']=='checkout'): ?>
                <button class="btn btn-primary">Sedang di Proses</button>
              <?php endif ?>
              <?php if ($data['status']=='shipping'): ?>
                <button class="btn btn-info">Sedang dikirim</button>
              <?php endif ?>
              <?php if ($data['status']=='selesai'): ?>
                <button class="btn btn-success">Sudah diterima</button>
              <?php endif ?>
            </label>
            <br>

            
          </div>
          <div class="col-md-5">
            <?php if ($data['status'] == 'shipping'): ?>
              <small>Jasa Pengiriman</small><br>
              <label ><?=  $data['jasa_pengiriman']?></label><br>
              <small>Nomor Resi</small><br>
              <label><?=  $data['no_resi']?></label><br>
              <small>Jika barang sudah sampai, silahkan klik tombol Sudah Sampai</small>  <br>
              <a href="<?= base_url('order/pengiriman_selesai/'.$data['id_cart'].'/'.$id_order) ?>" class="btn btn-success"> Barang Sudah Sampai</a>
            <?php endif ?>
          </div>
          
        </div>
        </div>
    <?php endforeach ?>
    

  </div>
</div>
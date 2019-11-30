
  <div class="container align-center" style="padding: 10px"> 

    <h3 style="color:  #dc3545; margin-top: 20px">List Product</h3>

    <div class="card-columns row ">
      <?php foreach ($product as $data ): ?>
       <div class="card  col-2" style="margin: 18px"  >
        <a href="<?= base_url('product/detail_product/'.$data['id_product']) ?>"><img class="card-img-top img-responsive" src="<?= base_url('upload/img/'.$data['img']) ?>" alt="Card image cap"></a>
        <div class="card-body" >
          <h5 class="card-title"><?= substr($data['nama_product'], 0, 30) ?></h5>
          <p class="card-text" style="color:  #dc3545"><?= 'Rp'.number_format($data['harga'])?></p>
        </div>
      </div>
    <?php endforeach ?>
    
    </div>
    
  </div>

  
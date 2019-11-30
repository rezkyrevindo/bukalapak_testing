<div class="container"><br>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb bg-danger text-white">
    <h5 style="margin-top: 10px;">Orderan Lapak Kamu</h5>
  </ol>
  <div class="col-md-12 ">
    <table class="table table-bordered"  id="datatable"  width="100%" cellspacing="0">
      <thead>
        <tr>
          <th scope="col" width="10%">ID Order</th>
          <th scope="col">Alamat</th>
          <th >Status</th>
          <th scope="col">Total</th>
          <th scope="col">Jasa Pengiriman</th>
          <th scope="col">Nomor Resi</th>
          <th width="10%">Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th scope="col">ID Order</th>
          <th>Alamat</th>
          <th >Status</th>
          <th scope="col">Total</th>
          <th scope="col">Jasa Pengiriman</th>
          <th scope="col">Nomor Resi</th>
          <th width="10%">Action</th>
        </tr>
      </tfoot>
      <tbody>
        <?php 
        $total = 0;
        foreach ($order as $data): 
          ?>

        <tr>
          <th scope="row" class="text-center"><?= '# '.$data['id_pemesanan'] ?></th>
          <td><?= $data['alamat_user']?></td>
          <td class="text-center">
            <?php if ($data['status'] == 'checkout'): ?>
              <span class="btn btn-info"> Di Proses </span>
            <?php endif ?>
            <?php if ($data['status'] == 'shipping'): ?>
              <span class="btn btn-primary"> Di Kirim </span>
            <?php endif ?>
            <?php if ($data['status'] == 'selesai'): ?>
              <span class="btn btn-success"> Selesai </span>
            <?php endif ?>
          
          </td>
          <td>
            <?= 'Rp'.number_format($data['total']) ?>
          </td>
          
            <form action="<?= base_url('order/kirim/'.$data['id_cart']) ?>" method="post">
          <th scope="row">
            <?php if ($data['status'] == 'checkout'): ?>
              
              <input type="text" class="form-control" name="jasa_pengiriman" value="<?= $data['jasa_pengiriman'] ?>">
            <?php endif ?>
            <?php if ($data['status'] != 'checkout'): ?>
              
             <?= $data['jasa_pengiriman'] ?>
            <?php endif ?>

          </th>
            
          <th scope="row">
            <?php if ($data['status'] == 'checkout'): ?>
              
              <input type="text" class="form-control" name="no_resi" value="<?= $data['no_resi'] ?>">
            <?php endif ?>
            <?php if ($data['status'] != 'checkout'): ?>
              
             <?= $data['no_resi'] ?>
            <?php endif ?>

          </th>
            
          <td class="text-center">
            <?php if ($data['status'] == 'checkout'): ?>
              <input type="submit" name="submit"class="btn btn-info" value="Kirim">
              
            <?php endif ?>
            </form>
          </td>
        </tr>   
        <?php endforeach ?>
       
        

      </tbody> 
    </table>
    <hr>
    

  </div>
</div>
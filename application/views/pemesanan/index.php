<div class="container"  style="padding: 10px"><br>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb bg-danger text-white">
    <h5 style="margin-top: 10px;">Orderan anda</h5>
  </ol>
  <div class="col-md-12 ">
    <table class="table table-bordered"  id="datatable"  width="100%" cellspacing="0">
      <thead>
        <tr>
          <th  class="text-center"scope="col" width="10%">ID Order</th>
          <th class="text-center" scope="col">Tanggal Order</th>
          <th class="text-center" >Total Transaksi</th>
          <th  class="text-center"width="20%">Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
           <th  class="text-center"scope="col" width="10%">ID Order</th>
          <th class="text-center" scope="col">Tanggal Order</th>
          <th class="text-center" >Total Transaksi</th>
          <th  class="text-center"width="20%">Action</th>
        </tr>
      </tfoot>
      <tbody>
        <?php 
        $total = 0;
        foreach ($order as $data): 
          ?>

        <tr>
          <th scope="row" class="text-center"><?= '# '.$data['id_pemesanan'] ?></th>
          <td class="text-center"><?= date('H:m:s, d F Y ', strtotime($data['waktu'])) ?></td>
          <td class="text-center"><?= 'Rp'.number_format($data['total']) ?></td>
          <td class="text-center">
            <a href="<?= base_url('order/detail/'.$data['id_pemesanan'])?>" class="btn btn-primary  "><i class="fa fa-search"></i> Detail</a>
            <?php if ($data['status_pemesanan'] == 'checkout'): ?>
              <a href="<?= base_url('order/delete/'.$data['id_pemesanan'])?>" class="btn btn-danger  "><i class="fa fa-trash"></i> Delete</a>
              
            <?php endif ?>
          </td>
        </tr>   
        <?php endforeach ?>
       
        

      </tbody> 
    </table>
    <hr>
    

  </div>
</div>
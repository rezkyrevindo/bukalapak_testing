<div class="container"><br>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb bg-danger text-white">
    <h5 style="margin-top: 10px;">Keranjang anda</h5>
  </ol>
  <div class="col-md-12 ">
    <table class="table table-bordered"  id="datatable"  width="100%" cellspacing="0">
      <thead>
        <tr>
          <th scope="col">Barang</th>
          <th scope="col">Gambar</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Total</th>
          <th width="10%">Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th scope="col">Barang</th>
          <th scope="col">Gambar</th>
          <th width="10%" scope="col">Jumlah</th>
          <th scope="col">Total</th>
          <th width="20%">Action</th>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($cart as $data): ?>
        <tr>
          <th scope="row"><?= $data['nama_product'] ?></th>
          <td><img src=""></td>
          <td class="text-center">
            <form action="<?= base_url('cart/edit/'.$data['id_cart']) ?>" method="post">
            <input type="number" style=" text-align: center" class="form-control" name="qty" value="<?= $data['qty'] ?>">
          </td>
          <td><?= 'Rp'.number_format($data['total']) ?>
            
          </td>
          <td class="text-center">
            <input type="submit" name="submit" class="btn btn-info" value="Update"> 
            </form>
            <a href="<?= base_url('cart/delete/'.$data['id_cart']) ?>" class="btn btn-danger"> Delete</a>
          </td>
        </tr>   
        <?php endforeach ?>
       
        

      </tbody> 
    </table>
    
    <input type="submit" name="submit" value="Proceed checkout" style="float:right;margin-top: 10px;" class="btn btn-primary">

  </div>
</div>
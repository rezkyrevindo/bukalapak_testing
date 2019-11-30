<div class="container-fluid">
	<div class="row">
		<div class="col-md-6" style="padding: 10px;">
			<img src="<?= base_url('upload/img/'.$product->img) ?>" width="100%" >
		</div>

		<div class="col-md-6" style="padding: 10px;">
			<div class="card">
				<div class="card-body">
					<h3><?= $product->nama_product ?></h3>
					<h4 style="color:red"><?= 'Rp'.number_format($product->harga) ?></h4>

					<p>
						<?= $product->deskripsi ?>
					</p>

					<a href="<?= base_url('cart/tambah/'.$product->id_product) ?>" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Tambah Keranjang</a>
				</div>
			</div>
		</div>
	</div>
</div>
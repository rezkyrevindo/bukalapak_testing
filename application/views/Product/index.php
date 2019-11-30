<div class="container" style="padding: 10px"><br>
	<!-- Breadcrumbs-->
	<ol class="breadcrumb bg-danger text-white">
		<h5 style="margin-top: 10px;">Product Anda</h5>
		
	</ol>
	<div class="col-md-12 ">
		<a href="<?= base_url('product/tambah') ?>" style="margin-bottom: 10px;" class="btn btn-danger"> Tambah Product</a>
		<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th scope="col">Nama Barang</th>
					<th scope="col">Gambar</th>
					<th scope="col">Harga</th>
					<th width="10%">Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th scope="col">Nama Barang</th>
					<th scope="col">Gambar</th>
					<th width="10%" scope="col">Harga</th>
					<th width="20%">Action</th>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach ($product as $data) : ?>
					<tr>
						<th scope="row"><?= $data['nama_product'] ?></th>
						<td><img width="100" height="100" src="<?= base_url('upload/img/'.$data['img'])?>"></td>
						<th scope="row"><?= 'Rp'.number_format($data['harga']) ?></th>
						<td class="text-center">
							<a href="<?= base_url('product/edit/' . $data['id_product']) ?>" class="btn btn-info">Edit</a>
							</form>
							<a href="<?= base_url('product/delete/' . $data['id_product']) ?>" class="btn btn-danger"> Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>



	</div>
</div>

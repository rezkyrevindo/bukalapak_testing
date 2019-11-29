<div class="container"><br>
	<!-- Breadcrumbs-->
	<ol class="breadcrumb bg-danger text-white">
		<h5 style="margin-top: 10px;">Product Anda</h5>
		<a href="<?= base_url('product/add/') ?>" class="btn btn-danger"> tambah data</a>
	</ol>
	<div class="col-md-12 ">
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
						<td><img src=""></td>
						<th scope="row"><?= $data['harga'] ?></th>
						<td class="text-center">
							<a href="<?= base_url('product/edit/' . $data['id_product']) ?>" class="btn btn-danger"> Edit</a>
							</form>
							<a href="<?= base_url('cart/delete/' . $data['id_product']) ?>" class="btn btn-danger"> Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>



	</div>
</div>
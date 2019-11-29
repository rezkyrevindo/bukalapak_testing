<body >
	<div class="container-fluid" style="padding: 20px; margin-bottom: 20px;">
		
		<div class="row">
				
			<div class="box col-md-6">
				<img src = '<?= base_url ('assets/logo1.jpg') ?>' >
				
			</div>

			<div class="box col-md-6">
				<div class="card">
				  <div class="card-header">
				    Register
				  </div>
				  <div class="card-body">
				   
				    <div class="form-group">
						<label>Email</label>
						<input type="email"  class="form-control" >
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" class="form-control" >
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text"  class="form-control" >
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" ></textarea>
					</div>
					<button class="btn btn-danger " style="float:right;" >Register</button>
				  </div>
				</div>
				
			</div>

		</div>


	</div>
</body>
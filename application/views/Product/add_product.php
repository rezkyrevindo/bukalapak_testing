<div class="container" style="margin-top:40px;margin-bottom: 40px;">

    <div class="card">
        <div class="card-title" >
            <h5 style="margin: 20px"> Tambah Product</h5>
            <hr>
        </div>
        <div class="card-body">
             <form action="<?= base_url('product/tambah') ?>" class="form-horizontal " enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name" >Nama Product</label>
                    
                    <input type="text" class="form-control" name="nama" id="name" required="">
                    
                </div> <!-- form-group // -->
                <div class="form-group">
                    <label for="name" >Harga</label>
                    
                    <input type="number" class="form-control" name="harga" required="">
                    
                </div>
                <div class="form-group">
                    <label for="about" >Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="15" required=""></textarea>
                </div> <!-- form-group // -->
                <div class="form-group">
                    <label for="name">Gambar</label>

                    <input type="file" name="image" class="form-control">
                </div> <!-- form-group // -->

                <hr>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-12" style="margin-bottom:55">
                        <input type="submit" name="submit" class="btn btn-primary" value="Tambah" style="float:right;">
                    </div>
                </div> <!-- form-group // -->
            </form>

        </div>
    </div>


</div> <!-- container// -->
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM obat WHERE id=$id");
while ($data        = mysqli_fetch_array($result)) {
    $namaobat           = $data['namaobat'];
    $kategori       = $data['kategori'];
    $stok           = $data['stok'];
    $harga          = $data['harga'];

}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Update Data Obat</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=obat-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="namaobat" class="col-sm-2 control-label">Nama Obat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="namaobat" value="<?php echo $namaobat; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" value="<?php echo $kategori; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="col-sm-2 control-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="stok" value="<?php echo $stok; ?>" required>
                        </div>
</div>
                    <div class="form-group">        
                        <label for="harga" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>" required>
                        </div>
</div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                            <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
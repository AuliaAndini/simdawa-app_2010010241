<?php include "../connection.php" ?>

<?php

if (isset($_POST['Submit'])) {
    $nama               = $_POST['namaobat'];
    $kategori         = $_POST['kategori'];
    $stok             = $_POST['stok'];
    $harga            = $_POST['harga'];

    $result = mysqli_query($con, "INSERT INTO obat (namaobat,kategori,stok,harga) VALUES('$nama','$kategori','$stok','$harga')");
    header("Location:?page=obat-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Obat</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=obat-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="namaobat" class="control-label">Nama Obat</label>
                        <input type="text" class="form-control" name="namaobat" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="kategori" class="control-label">kategori</label>
                        <input type="text" class="form-control" name="kategori" placeholder="Masukan kategori..." required>
                    </div>

                    <div class="form-group">
                        <label for="stok" class="control-label">Stok</label>
                        <input type="text" class="form-control" name="stok" placeholder="Masukan stok Obat..." required>
                    </div>


                    <div class="form-group">
                        <label for="harga" class="control-label">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga..." required>
                    </div>


                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                    <input type="submit" name="Submit" class="btn btn-info" value="Edit">
                    <input type="reset" name="reset" class="btn btn-danger" value="Hapus">
                </form>
            </div>
        </div>
    </div>
</div>
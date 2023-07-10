<?php include "../connection.php" ?>

<?php

if (isset($_POST['Submit'])) {
    $nama           = $_POST['nama'];
    $kode           = $_POST['kode'];
    $spesialis      = $_POST['spesialis'];
    $nohp           = $_POST['nohp'];
    $alamat         = $_POST['alamat'];

    $result = mysqli_query($con, "INSERT INTO dokter(nama,kode,spesialis,nohp,alamat) VALUES('$nama','$kode','$spesialis','$nohp','$alamat')");
    header("Location:?page=dokter-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Dokter</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=dokter-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="kode" class="control-label">Kode Dokter</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Dokter..." required>
                    </div>

                    <div class="form-group">
                        <label for="spesialis" class="control-label">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" placeholder="Masukan Spesialis..." required>
                    </div>


                    <div class="form-group">
                        <label for="nohp" class="control-label">No Telepon</label>
                        <input type="text" class="form-control" name="nohp" placeholder="Masukan No Telepon..." required>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..." required>
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
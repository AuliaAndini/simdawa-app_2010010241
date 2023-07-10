<?php include "../connection.php" ?>

<?php

if (isset($_POST['Submit'])) {
    $id_pemeriksaan      = $_POST['id_pemeriksaan'];
    $namapasien          = $_POST['namapasien'];
    $kdpasien            = $_POST['kdpasien'];
    $jamperiksa          = $_POST['jamperiksa'];
    $dokter              = $_POST['dokter'];
    $ruangan             = $_POST['ruangan'];



    $result = mysqli_query($con, "INSERT INTO pegawai (namapasien,kdpasien,jamperiksa,dokter,ruangan) VALUES('$namapasien','$kdpasien','$jamperiksa','dokter','$ruangan')");
    echo "<script>alert('Registrasi Berhasil');document.location.href='?page=pendaftaran-show'</script>";
}
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Data Informasi Pemeriksaan</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=pasien-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pasien..." required>
                    </div>
                    <div class="form-group">
                        <label for="kdpasien" class="control-label">Kode Pasien</label>
                        <input type="text" class="form-control" name="kdpasien" placeholder="Masukan Kode Pasien..." required>
                    </div>
                    <div class="form-group">
                        <label for="jamperiksa" class="control-label">Jam Periksa</label>
                        <input type="text" class="form-control" name="jamperiksa" placeholder="Masukan Jam periksa..." required>
                    </div>
                    <div class="form-group">
                        <label for="dokter" class="control-label">Dokter</label>
                        <input type="text" class="form-control" name="dokter" placeholder="Masukan Nama Dokter yang meriksa..." required>
                    </div>
                    <div class="form-group">
                        <label for="ruangan" class="control-label">Ruangan</label>
                        <input type="text" class="form-control" name="ruangan" placeholder="Masukan Ruangan Pasien..." required>
                    </div>

                    <input type="submit" name="Submit" class="btn btn-success" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-danger" value="Cancel">
                    <input type="submit" name="Submit" class="btn btn-info" value="Edit">
                    <input type="reset" name="reset" class="btn btn-secondary" value="Hapus">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "../connection.php" ?>

<?php

if (isset($_POST['Submit'])) {
    $id             = $_POST['id'];
    $nama            = $_POST['nama'];
    $tanggallahir    = $_POST['tanggallahir'];
    $jeniskelamin    = $_POST['jeniskelamin'];
    $nohp            = $_POST['nohp'];
    $tanggalperiksa  = $_POST['tanggalperiksa'];
    $alamat          = $_POST['alamat'];
    $keluhan         = $_POST['keluhan'];

    $result = mysqli_query($con, "INSERT INTO pasien (nama,tanggallahir,jeniskelamin,nohp,tanggalperiksa,alamat,keluhan) VALUES('$nama','$tanggallahir','$jeniskelamin','$nohp','$tanggalperiksa','$alamat','$keluhan')");
    echo"<script>alert('Registrasi Berhasil');document.location.href='?page=pendaftaran-show'</script>";

}
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<div class="row">
    <div class="col-md-12">  
        <div class="card">
            <div class="card-header">
                <strong>Registrasi Pasien</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=pasien-add" class="form-horizontal">
                <div class="form-group">
                        <label for="nama" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="tanggallahir" class="control-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" placeholder="Masukan Tanggal Lahir..." required>
                    </div>

                    <div class="form-group">
                        <label for="jeniskelamin" class="control-label">Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin">
                            <option disabled selected> Pilih </option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggalperiksa" class="control-label">Tanggal Periksa</label>
                        <input type="date" class="form-control" name="tanggalperiksa" placeholder="Masukan Tanggal Periksa..." required>
                    </div>

                    <div class="form-group">
                            <label for="nohp" class="control-label"> No Handpone</label>
                            <input type="number" class="form-control" name="nohp" placeholder="Masukan No Hp Yang Aktif..." required>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..." required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan" class="control-label">keluhan</label>
                        <input type="text" class="form-control" name="keluhan" placeholder="Masukan keluhan Sakit..." required>
                    </div>

                    <input type="submit" name="Submit" class="btn btn-success" value="Regis">
                    <input type="reset" name="reset" class="btn btn-danger" value="Cancel">
                </form>
            </div>
        </div>
    </div>
</div>
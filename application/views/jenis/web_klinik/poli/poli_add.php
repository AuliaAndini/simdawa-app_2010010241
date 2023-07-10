<?php include "../connection.php" ?>

<?php

if (isset($_POST['Submit'])) {
    $nama    = $_POST['nama'];
    $kode    = $_POST['kode'];
    $jadwal  = $_POST['jadwal'];
    $jam     = $_POST['jam'];


    $result = mysqli_query($con, "INSERT INTO poli(nama,kode,jadwal,jam) VALUES('$nama','$kode','$jadwal','$jam')");
    header("Location:?page=poli-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Poli</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=poli-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="kode" class="control-label">Kode Poli Klinik</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan Kode..." required>
                    </div>

                    <div class="form-group">
                        <label for="jadwal" class="control-label">Jadwal Dokter</label>
                        <select class="form-control" name="jadwal">
                            <option disabled selected> Pilih </option>
                            <option value="Setiap hari">Setiap Hari</option>
                            <option value="Senin,Selasa,Rabu">Senin,Selasa,Rabu</option>
                            <option value="Senin,Selasa,Rabu,Sabtu">Senin,Selasa,Rabu,Sabtu</option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jam" class="control-label">Jam</label>
                        <input type="text" class="form-control" name="jam" placeholder="Masukan Jam Operasi..." required>
                    </div>

                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>
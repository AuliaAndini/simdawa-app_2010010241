<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM poli WHERE id=$id");
while ($data        = mysqli_fetch_array($result)) {
    $nama           = $data['nama'];
    $kode           = $data['kode'];
    $jadwal         = $data['jadwal'];
    $jam            = $data['jam'];
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Update Data Obat</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=poli-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kode" class="col-sm-2 control-label">Kode Poli Klinik</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode" value="<?php echo $kode; ?>" readonly required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jadwal" class="col-sm-2 control-label">Jadwal</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jadwal">
                                <option disabled selected> Pilih </option>
                                <option value="Setiap Hari">Setiap Hari</option>
                                <option value="Senin,Selasa,Rabu">Senin,Selasa,Rabu</option>
                                <option value="Senin,Selasa,Rabu,Sabtu">Senin,Selasa,Rabu,Sabtu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jam" class="col-sm-2 control-label">Jam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jam" value="<?php echo $jam; ?>" required>
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
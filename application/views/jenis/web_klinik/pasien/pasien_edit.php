<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM pasien WHERE id=$id");
while ($data        = mysqli_fetch_array($result)) {
    $nama               = $data['nama'];
    $tanggallahir       = $data['tanggallahir'];
    $jeniskelamin       = $data['jeniskelamin'];
    $nohp               = $data['nohp'];
    $tanggalperiksa     = $data['tanggalperiksa'];
    $alamat             = $data['alamat'];
    $keluhan            = $data['keluhan'];
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Ubah Data Pasien</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=pasien-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggallahir" value="<?php echo $tanggallahir; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jeniskelamin">
                                <option disabled selected> Pilih </option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalperiksa" class="col-sm-2 control-label">Tanggal Periksa</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggalperiksa" value="<?php echo $tanggalperiksa; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hohp" class="col-sm-2 control-label">No Handpone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nohp" value="<?php echo $nohp; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keluhan" class="col-sm-2 control-label">keluhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keluhan" value="<?php echo $keluhan; ?>" required>
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
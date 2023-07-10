<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM dokter WHERE id=$id");
while ($data        = mysqli_fetch_array($result)) {
    $nama           = $data['nama'];
    $kode           = $data['kode'];
    $spesialis      = $data['spesialis'];
    $nohp           = $data['nohp'];
    $alamat         = $data['alamat'];
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Ubah Data Dokter</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=dokter-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kode" class="col-sm-2 control-label">Kode Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode" value="<?php echo $kode; ?>"  readonly required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="spesialis" class="col-sm-2 control-label">Spesialis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="spesialis" value="<?php echo $spesialis; ?>" required>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="nohp" class="col-sm-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nohp" value="<?php echo $nohp; ?>" required>
                        </div>        
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required>
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
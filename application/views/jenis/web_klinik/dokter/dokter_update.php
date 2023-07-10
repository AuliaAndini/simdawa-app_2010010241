<?php
if (isset($_POST['update'])) {
    $id           = $_POST['id'];
    $nama         = $_POST['nama'];
    $kode         = $_POST['kode'];
    $spesialis    = $_POST['spesialis'];
    $nohp         = $_POST['nohp'];
    $alamat       = $_POST['alamat'];
    // update user data
    $result = mysqli_query($con, "UPDATE dokter SET nama='$nama',kode='$kode',spesialis='$spesialis',nohp='$nohp',alamat='$alamat'
WHERE id=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=dokter-show");
}
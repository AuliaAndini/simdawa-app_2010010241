<?php
if (isset($_POST['update'])) {
    $id                 = $_POST['id'];
    $nama               = $_POST['nama'];
    $tanggallahir       = $_POST['tanggallahir'];
    $jeniskelamin       = $_POST['jeniskelamin'];
    $nohp               = $_POST['nohp'];
    $tanggalperiksa     = $_POST['tanggalperiksa'];
    $alamat             = $_POST['alamat'];
    $keluhan            = $_POST['keluhan'];
    
    // update user data
    $result = mysqli_query($con, "UPDATE pasien SET nama='$nama',tanggallahir='$tanggallahir',jeniskelamin='$jeniskelamin',nohp='$nohp',tanggalperiksa='$tanggalperiksa',alamat='$alamat',keluhan='$keluhan'
WHERE id=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=pasien-show");
}
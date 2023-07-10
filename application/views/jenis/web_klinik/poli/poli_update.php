<?php
if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $kode       = $_POST['kode'];
    $jadwal     = $_POST['jadwal'];
    $jam        = $_POST['jam'];
    // update user data
    $result = mysqli_query($con, "UPDATE poli SET nama='$nama',kode='$kode',jadwal='$jadwal',jam='$jam'
WHERE id=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=poli-show");
}
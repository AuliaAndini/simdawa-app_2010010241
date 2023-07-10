<?php
if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $namaobat   = $_POST['namaobat'];
    $kategori   = $_POST['kategori'];
    $stok       = $_POST['stok'];
    $harga      = $_POST['harga'];
    // update user data
    $result = mysqli_query($con, "UPDATE obat SET namaobat='$namaobat',kategori='$kategori',stok='$stok',harga='$harga' 
WHERE id=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=obat-show");
}
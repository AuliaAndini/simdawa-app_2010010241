<?php
include "../connection.php";
$id= $_GET['id'];
$result = mysqli_query($con, "DELETE FROM obat WHERE id=$id");
header("Location:../admin/?page=obat-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=obat-show'>";
?>
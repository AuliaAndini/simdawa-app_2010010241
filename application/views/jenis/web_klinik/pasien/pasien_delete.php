<?php
include "../connection.php";
$id= $_GET['id'];
$result = mysqli_query($con, "DELETE FROM pasien WHERE id=$id");
header("Location:../admin/?page=pasien-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=pasien-show'>";
?>
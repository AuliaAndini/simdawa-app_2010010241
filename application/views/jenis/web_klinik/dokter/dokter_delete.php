<?php
include "../connection.php";
$id= $_GET['id'];
$result = mysqli_query($con, "DELETE FROM dokter WHERE id=$id");
header("Location:../admin/?page=dokter-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=dokter-show'>";
?>
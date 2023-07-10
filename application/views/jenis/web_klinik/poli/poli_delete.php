<?php
include "../connection.php";
$id= $_GET['id'];
$result = mysqli_query($con, "DELETE FROM poli WHERE id=$id");
header("Location:../admin/?page=poli-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=poli-show'>";
?>
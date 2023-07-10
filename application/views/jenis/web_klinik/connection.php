<?php
$databaseHost     = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName     = "klinik";

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (mysqli_connect_errno()) {
    echo "Koneksi database error : " . mysqli_connect_error();
}
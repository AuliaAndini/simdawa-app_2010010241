<?php
session_start();
if ($_SESSION['username'] == '') {
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--  <base href="praktikum2021" -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>SI KLINIK</title>
    <style>
        body {
            margin-bottom: 6em;
        }

        * {
            font-size: 14px;
        }

        footer {
            position: fixed;
            /* height: 100px; */
            bottom: 0;
            width: 100%;
            background: lightskyblue;
            padding: 10px 0px;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1.5px;
            text-align: center;
        }
    </style>
</head>

<body style="background-image: url(../img/hospit.jpg); background-size:cover;">
    <div class="container-fluid">
        <h3 class="mt-4 mb-4">DATA KLINIK ANDINI</h3>
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
                <?php include 'nav.php'; ?>
            </div>

            <div class="col-md-9 col-sm-12">
                <?php include '../connection.php'; ?>
                <?php

                error_reporting(0);
                switch ($_GET['page']) {

                    default:
                        include 'dashboard.php';
                        break;

                    case "dashboard";
                        include 'dashboard.php';
                        break;

                        //pegawai 
                    case "pegawai-show";
                        include '../pegawai/pegawai_show.php';
                        break;

                    case "pegawai-add";
                        include '../pegawai/pegawai_add.php';
                        break;

                        //resepobat
                    case "resepobat-show";
                        include '../resepobat/resepobat_show.php';
                        break;

                    case "resepobat-add";
                        include '../resepobat/resepobat_add.php';
                        break;
                        //rekammedis
                    case "rekammedis-show";
                        include '../rekammedis/rekammedis_show.php';
                        break;

                    case "rekammedis-add";
                        include '../rekammedis/rekammedis_add.php';
                        break;


                        //resepobat
                    case "pemeriksaan-show";
                        include '../pemeriksaan/pemeriksaan_show.php';
                        break;

                    case "pemeriksaan-add";
                        include '../pemeriksaan/pemeriksaan_add.php';
                        break;

                        //pasien
                    case "pasien-show";
                        include '../pasien/pasien_show.php';
                        break;

                    case "pasien-add";
                        include '../pasien/pasien_add.php';
                        break;

                    case "pasien-edit";
                        include '../pasien/pasien_edit.php';
                        break;

                    case "pasien-update";
                        include '../pasien/pasien_update.php';
                        break;

                    case "pasien-delete";
                        include '../pasien/pasien_delete.php';
                        break;

                    case "pasien-print";
                        include '../pasien/pasien_print.php';
                        break;

                        // obat
                    case "obat-show";
                        include '../obat/obat_show.php';
                        break;

                    case "obat-add";
                        include '../obat/obat_add.php';
                        break;

                    case "obat-edit";
                        include '../obat/obat_edit.php';
                        break;

                    case "obat-update";
                        include '../obat/obat_update.php';
                        break;

                    case "obat-delete";
                        include '../obat/obat_delete.php';
                        break;

                        // poli
                    case "poli-show";
                        include '../poli/poli_show.php';
                        break;

                    case "poli-add";
                        include '../poli/poli_add.php';
                        break;

                    case "poli-edit";
                        include '../poli/poli_edit.php';
                        break;

                    case "poli-update";
                        include '../poli/poli_update.php';
                        break;

                    case "poli-delete";
                        include '../poli/poli_delete.php';
                        break;


                        // dokter
                    case "dokter-show";
                        include '../dokter/dokter_show.php';
                        break;

                    case "dokter-add";
                        include '../dokter/dokter_add.php';
                        break;

                    case "dokter-edit";
                        include '../dokter/dokter_edit.php';
                        break;

                    case "dokter-update";
                        include '../dokter/dokter_update.php';
                        break;

                    case "dokter-delete";
                        include '../dokter/dokter_delete.php';
                        break;

                    case "dokter-print";
                        include '../dokter/dokter_print.php';
                        break;

                        // obat
                    case "pasien-show";
                        include '../pasien/pasien_show.php';
                        break;

                    case "pasien-add";
                        include '../pasien/pasien_add.php';
                        break;

                    case "pasien-edit";
                        include '../pasien/pasien_edit.php';
                        break;

                    case "pasien-update";
                        include '../pasien/pasien_update.php';
                        break;

                    case "pasien-delete";
                        include '../pasien/pasien_delete.php';
                        break;

                        // Tentang Andini
                    case "tentang-saya";
                        include '../tentang_saya.php';
                        break;

                        //pendaftaran
                    case "pendaftaran-add";
                        include '../pendaftaran/pendaftaran.php';
                        break;

                        // user
                    case "user-add";
                        include '../user/user_add.php';
                        break;
                    case "user-show";
                        include '../user/user_show.php';
                        break;
                    case "user-edit";
                        include '../user/user_edit.php';
                        break;
                    case "user-update";
                        include '../user/user_update.php';
                        break;
                        //dokterpengunjung
                    case "dokterpengunjung-show";
                        include '../dokterpengunjung/dokterpengunjung.php';
                        break;
                        //poliklinikpengunjung
                    case "poliklinikpengunjung-show";
                        include '../poliklinikpengunjung/poliklinikpengunjung.php';
                        break;
                }

                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- <footer class="btn-primary mb-20">
        <div class="container btn-primary mb-8 ">
            <span><b>&copy; 2021 - Aulia Andini</b></span>
        </div>
    </footer> -->

</body>

</html>
<ul class="list-group">
    <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
    <li class="list-group-item"><a href="?page=dokterpengunjung-show">Data Dokter Pengunjung</a></li>
    <li class="list-group-item"><a href="?page=poliklinikpengunjung-show">Data Poli Klinik Pengunjung</a></li>
    <li class="list-group-item"><a href="?page=pendaftaran-add">Registrasi</a></li>

    <?php
    if ($_SESSION['username'] == 'andini') {
        echo '
        <li class="list-group-item"><a href="?page=dokter-show">Data Dokter</a></li>
        <li class="list-group-item"><a href="?page=poli-show">Data Poli Klinik</a></li>
        <li class="list-group-item"><a href="?page=pasien-show">Data Pasien</a></li>
        <li class="list-group-item"><a href="?page=obat-show">Data Obat</a></li>
        <li class="list-group-item"><a href="?page=user-show">Data User</a></li>
 
 ';
    }
    ?>
    <li class="btn btn-light"><a href="logout.php">Logout</a></li>
</ul>
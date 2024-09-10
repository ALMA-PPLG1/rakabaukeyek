<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah_skincare");

if (!$koneksi){
    die (mysqli_connect_error($koneksi));

}
?>
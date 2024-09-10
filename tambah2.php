<?php
include 'koneksi.php';

$nama = $_POST ['nama'];
$id_kategori = $_POST ['id_kategori'];

mysqli_query ($koneksi, "INSERT INTO product (nama, id_kategori) VALUES ('$nama', '$id_kategori') ");

if (!$koneksi){
    die (mysqli_connect_error($koneksi));}
header("location:index.php");
?>
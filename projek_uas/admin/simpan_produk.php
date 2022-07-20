<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$created_at = $_POST['created_at'];
$produk = $_SESSION['id_produk'];

$insert_data = mysqli_query($koneksi, "INSERT INTO tb_produk 
(nama_produk,harga,created_at,id_produk)
Values('$nama_produk','$harga','$created_at','$produk')");

if ($insert_data) {
    header('location:data_produk.php?pesan=Data Berasil Di simpan');
} else {
    echo ('ERROR' . mysqli_error($koneksi));
    //header('location:data_registrasi.php?pesan=Data Gagal Di simpan');
}
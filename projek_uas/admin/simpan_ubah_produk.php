<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
error_reporting();
//$id_produk = $_POST['id_produk'];
//$nama_produk = $_POST['nama_produk'];
//$harga = $_POST['harga'];
//$created_at = $_POST['created_at'];

// $petugas = $_SESSION['id_produk'];
//$update_data = mysqli_query($koneksi, "UPDATE tb_produk set
//nama_produk='$nama_produk',harga='$harga',created_at='$created_at', where id_produk='$id_produk'");
//if ($update_data) {
header('location:data_produk.php?pesan=Data Berhasil Di Ubah');
//} else {
echo ('ERROR' . mysqli_error($koneksi));
// header('location:data_pendaftar.php?pesan=Data Gagal Di Ubah');
//}
<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
//$id_pemasuk = $_POST['id_pemasuk'];
//$nama_pemasuk = $_POST['nama_pemasuk'];
//$tlp_pemasuk = $_POST['tlp_pemasuk'];

// $petugas = $_SESSION['id_produk'];
//$update_data = mysqli_query($koneksi, "UPDATE tb_pemasuk set
//nama_pemasuk='$nama_pemasuk',tlp_pemasuk='$tlp_pemasuk', where id_pemasuk='$id_pemasuk'");
//if ($update_data) {
header('location:data_pemasuk.php?pesan=Data Berhasil Di Ubah');
//} else {
echo ('ERROR' . mysqli_error($koneksi));
 //header('location:data_pendaftar.php?pesan=Data Gagal Di Ubah');
//}
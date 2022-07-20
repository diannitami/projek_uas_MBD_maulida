<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
error_reporting();
$id = $_POST['id_registrasi'];
$nama = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$pekerjaan = $_POST['password'];
$created_at = $_POST['created_at'];
$user = $_SESSION['id_user'];
// $petugas = $_SESSION['id_user'];
$update_data = mysqli_query($koneksi, "UPDATE tb_registrasi set
nama_lengkap='$nama',nik='$nik',jenis_kelamin='$jenis_kelamin',tlp='$tlp',alamat='$alamat',username='$username',password='$password',created_at='$created_at', where id_registrasi=$id");
if ($update_data) {
header('location:data_registrasi.php?pesan=Data Berhasil Di Ubah');
} else {
echo ('ERROR' . mysqli_error($koneksi));
// header('location:data_pendaftar.php?pesan=Data Gagal Di Ubah');
}
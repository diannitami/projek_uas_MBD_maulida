<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$jk = $_POST['jenis_kelamin'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$user = $_SESSION['id_user'];

$insert_data = mysqli_query($koneksi, "INSERT INTO tb_registrasi 
(nama_lengkap,nik,jenis_kelamin,no_tlp,alamat,username,password,id_user)
Values('$nama','$nik','$jk','$no_tlp','$alamat','$username','$password','$user')");

if ($insert_data) {
    header('location:data_registrasi.php?pesan=Data Berasil Di simpan');
} else {
    echo ('ERROR' . mysqli_error($koneksi));
    //header('location:data_registrasi.php?pesan=Data Gagal Di simpan');
}
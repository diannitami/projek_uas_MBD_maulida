<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_pemasuk = $_POST['nama_pemasuk'];
$tlp_pemasuk = $_POST['tlp_pemasuk'];
$pemasuk = $_SESSION['id_pemasuk'];

$insert_data = mysqli_query($koneksi, "INSERT INTO tb_pemasuk 
(nama_pemasuk,tlp_pemasuk,id_pemasuk)
Values('$nama_pemasuk','$tlp_pemasuk','$pemasuk')");

if ($insert_data) {
    header('location:data_pemasuk.php?pesan=Data Berasil Di simpan');
} else {
    echo ('ERROR' . mysqli_error($koneksi));
    //header('location:data_pemasuk.php?pesan=Data Gagal Di simpan');
}
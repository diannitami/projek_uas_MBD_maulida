<?php
 session_start();
 if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
 }
include "../layout/header.php";
include "../config/koneksi.php";
error_reporting(0);
$id_produk = $_GET['id_produk'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_produk where id_produk=$id_produk");
$rs = mysqli_fetch_assoc($query);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Form Ubah Produk</h1>
    </div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
    <div class="table-responsive">
        <form action="simpan_ubah_produk.php" method="POST">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input class="form-control" name="nama_produk" value="<?= $rs['nama_produk']; ?>">
                    <input type="hidden" name="id_produk" value="<?= $rs['id_produk']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input class="form-control" name="harga" value="<?= $rs['harga']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Created At</label>
                    <input class="form-control" name="created_at" value="<?= $rs['created_at']; ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</main>
<?php
include "../layout/footer.php";
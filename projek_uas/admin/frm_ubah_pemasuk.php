<?php
// session_start();
// if ($_SESSION['status'] != "sudah_login") {
// //melakukan pengalihan
// header("location:../login/login.php");
// }
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id_pemasuk'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pemasuk where id_pemasuk='$id'");
$rs = mysqli_fetch_assoc($query);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Form Ubah Pemasuk</h1>
    </div>

    <div class="table-responsive">
        <form action="simpan_ubah_pemasuk.php" method="POST">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                    <input class="form-control" name="nama_pemasuk" value="<?= $rs['nama_pemasuk']; ?>">
                    <input type="hidden" name="id_pemasuk" value="<?= $rs['id_pemasuk']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tlp Pemasuk</label>
                    <input class="form-control" name="tlp_pemasuk" value="<?= $rs['tlp pemasuk']; ?>">
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
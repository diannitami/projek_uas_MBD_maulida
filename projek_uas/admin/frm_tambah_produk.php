<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Form tambah produk</h1>
</div>

<div class="table-responsive">
    <form action="simpan_produk.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control"placeholder="Nama Produk">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                <input type="int" name="harga" class="form-control"placeholder="Harga">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Created at</label>
                <input type="datetime" name="created_at" class="form-control" placeholder="created at">
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
?>
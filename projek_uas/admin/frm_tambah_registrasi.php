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
   <h1 class="h2">Form Registrasi</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_registrasi.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control"placeholder="Nama Lengkap..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nik</label>
                <input type="int" name="nik" class="form-control"placeholder="nik">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">No tlp</label>
                <input type="text" name="no_tlp" class="form-control" placeholder="no tlp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="alamat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="password">
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
<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
    //melakukan pengalihan
    header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";

?>
<style>
    .main .row{
        margin-right: 0px;
    }

    .row .card{
        margin-right: 30px;
    }

    .main .card{
        margin-right: 50px;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Dasboard Admin</h1>
    </div>
    <center><h1>Selamat Datang </h1></center>
    <br> <br>
       <div class="row">
            <div class="card bg-info ml-3" style="width: 16rem;">
                <div class="card-body">
                    <h6 class="card-title">Pelanggan yang terdaftar</h6>
                        <div class="huge">
                            <br>
                        <a href="data_pelanggan.php" class="card-text text-white">Lihat Detail=><p><i class="fas 
                        fa-user-double-right ml"></i></p></a>
                        </div>
                </div>
            </div>

            <div class="card bg-success ml-5" style="width: 16rem;">
                <div class="card-body">
                    <h6 class="card-title">Data Barang</h6>
                    <div class="huge">
                        <br>
                    <a href="data_barang.php" class="card-text text-white">Lihat Detail=><i></i></a>
                    </div>
                </div>
            </div>

            <div class="card bg-danger ml-5" style="width: 16rem;">
                    <div class="card-body">
                    <h6 class="card-title">Data Penyewaan</h6>
                    <div class="huge">
                        <br>
                    <a href="data_penyewaan.php" class="card-text text-white">Lihat Detail=><i></i></a>
                    </div>
                </div>
            </div>
    
            <div class="card bg-warning ml-3" style="width: 16rem;">
                <div class="card-body">
                <h6 class="card-title">Data Kembalian Barang</h6>
                <div class="huge">
                    <br>
                <a href="kembalian_barang.php" class="card-text text-white">Lihat Detail=><i></i></a>
                </div>
                </div>
            </div>
       </div>
</main>
<?php
include "../layout/footer.php";
?>
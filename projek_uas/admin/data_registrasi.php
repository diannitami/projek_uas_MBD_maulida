<?php
error_reporting(0);
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM tb_registrasi");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Registrasi</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<?php if(isset($_GET['pesan'])) : ?>
    <div class="alert alert-success" role="alert">
    <?php echo $_GET['pesan']; ?>
</div>
<?php endif; ?>

<a href="frm_tambah_registrasi.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
<br> <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Nik</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No tlp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Created At</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while($rs = mysqli_fetch_array($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nama_lengkap']; ?></td>
                    <td><?= $rs['nik']; ?></td>
                    <td><?= $rs['jenis_kelamin']; ?></td>
                    <td><?= $rs['no_tlp']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['password']; ?></td>
                    <td><?= $rs['created_at']; ?></td>
                    <td>
                    <a class="btn btn-info btn-sm" href="ubah_registrasi.php?id=<?= $rs['id_registrasi']; ?>">Ubah</a> 
                    <a class="btn btn-danger btn-sm" href="hapus_registrasi.php?id=<?= $rs['id_registrasi']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            endwhile;
            ?>
        </tbody>
    </table>
</div>
</main>
<?php
include "../layout/footer.php";
?>
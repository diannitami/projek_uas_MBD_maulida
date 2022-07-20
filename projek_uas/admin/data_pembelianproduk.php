<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT tb_registrasi.*,tb_pembelianproduk.id_pembeli,sum(tb_pembelianproduk.id_produk) FROM tb_registrasi 
LEFT JOIN tb_pembelianproduk ON tb_registrasi.id_registrasi=tb_pembelianproduk.id_registrasi GROUP BY tb_registrasi.id_registrasi");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Pembelian produk</h1>
    </div>
    <?php if (isset($_GET['pesan'])) : ?>
        <div class="alert alert-success" role="alert">
           <?php echo $_GET['pesan']; ?>
        </div>
    <?php endif; ?>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap"id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No tlp</th>
                    <th scope="col">alamat</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_assoc($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nama_lengkap']; ?></td>
                    <td><?= $rs['nik']; ?></td>
                    <td><?= $rs['jenis_kelamin']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['no_tlp']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['password']; ?></td>
                    <td><?= $rs['created_at']; ?></td>
                    <td>
                        <a role="link" href="frm_pembelian_produk.php?id=<?= $rs['id_registrasi']; ?>" class="btn btn-info btn-sm">membeli</a>
                        <a role="link" href="terima_pembayaran.php?id=<?= $rs['id_pembeli']; ?>"class="btn btn-success btn-sm">Terima Bayar</a>
                        <a href="ubah_pembelian_produk.php?id=<?= $rs['id_pembeli']; ?>" class=" btn btn-primary btn-sm">Ubah</a>
                        <a href="hapus_pembelian_produk.php?id=<?= $rs['id_pembeli']; ?>" class=" btn btn-danger btn-sm">Hapus</a>
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
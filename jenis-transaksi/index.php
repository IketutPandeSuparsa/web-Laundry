<?php

require_once("../core/init.php");

$title = "Halaman Jenis Transaksi"; #mengganti title
$sidebar = "Jenis Transaksi";       #mengganti judul sidebar pojok kiri atas


// $semua_jenis_transaksi = allTable("jenis_transaksi");
?>

<!-- WAKTUNYA MODE HTML -->
<?php include('../template/header.php');?>

<h4 class="text-center font-weight-bold">DATA JENIS TRANSAKSI LAUNDRY</h4>
<p class="text-center my-1">Alamat: Jalan Laundry Wangi</p>
<p class="text-center">Hp 08719924412x Email: tukangtidur@gmail.com Website: WebMantap.com</p>

<div class="card mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Jenis Transaksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bank Central Asia (BCA)</td>
                        <td>
                            <a href="<?= BASE_URL?>/jenis-transaksi/edit.php?id=1" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL?>/jenis-transaksi/delete.php?id=1" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dompet OVO</td>
                        <td>
                            <a href="<?= BASE_URL?>/jenis-transaksi/edit.php?id=2" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL?>/jenis-transaksi/delete.php?id=2" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../template/footer.php');?>
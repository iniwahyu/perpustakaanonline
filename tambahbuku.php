<?php require_once "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Udinus | Daftar Buku</title>

    <?php require_once "src/link_css.php"; ?>

</head>
<body>

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body" style="margin-top: 15px;">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        <div class="alert alert-danger" role="alert">
            S &amp; K Berlaku
        </div>
        </div>

        <div class="col-sm-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Tambah Buku
                </div>
                <div class="card-body">

                <?php

                if( isset($_POST['tambahbuku'])){

                    $kode = $_POST['kodebuku'];
                    $judul = $_POST['judulbuku'];
                    $pengarang = $_POST['pengarangbuku'];
                    $penerbit = $_POST['penerbitbuku'];
                    $lokasi = $_POST['lokasibuku'];
                    $status = $_POST['statusbuku'];

                    if( !empty(trim($kode)) && !empty(trim($judul)) && !empty(trim($pengarang)) && !empty(trim($penerbit)) && !empty(trim($lokasi)) && !empty(trim($status)) ){
                        if(tambahbuku($kode, $judul, $pengarang, $penerbit, $lokasi, $status)){
                            echo '<div class="p-3 mb-2 bg-success text-white">BERHASIL MENAMBAHKAN BUKU</div>';
                        }else{
                            echo '<div class="p-3 mb-2 bg-danger text-white">GAGAL MENAMBAHKAN BUKU</div>';
                        }
                    }else{
                        echo '<div class="p-3 mb-2 bg-danger text-white">FORM MASIH KOSONG</div>';
                    }

                }

                ?>

                    <form action="tambahbuku.php" method="POST" name="form" >
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <?php
                            $carikode = mysqli_query($mydb, "SELECT kodebuku from buku") or die (mysqli_error());
                            // menjadikannya array
                            $datakode = mysqli_fetch_array($carikode);
                            $jumlah_data = mysqli_num_rows($carikode);
                            // jika $datakode
                            if ($datakode) {
                             // membuat variabel baru untuk mengambil kode barang mulai dari 1
                             $nilaikode = substr($jumlah_data[0], 1);
                             // menjadikan $nilaikode ( int )
                             $kode = (int) $nilaikode;
                             // setiap $kode di tambah 1
                             $kode = $jumlah_data + 1;
                             // hasil untuk menambahkan kode 
                             // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
                             // atau angka sebelum $kode
                             $kode_otomatis = "A".str_pad($kode, 4, "0", STR_PAD_LEFT);
                            } else {
                             $kode_otomatis = "A0001";
                            }
                            ?>
                            <input type="text" class="form-control" name="kodebuku" value="<?php echo $kode_otomatis; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judulbuku" placeholder="Masukkan Judul Buku">
                        </div>
                        <div class="form-group">
                            <label>Pengarang</label>
                            <input type="text" class="form-control" name="pengarangbuku" placeholder="Masukkan Nama Pengarang Buku">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbitbuku" placeholder="Masukkan Nama Penerbit Buku">
                        </div>
                        <div class="form-group">
                            <label>Lokasi Buku</label>
                            <input type="text" class="form-control" name="lokasibuku" placeholder="Masukkan Letak Lokasi Buku">
                        </div>
                        <div class="form-group">
                            <!-- <label>Status Buku</label> -->
                            <input type="hidden" class="form-control" name="statusbuku" value="Tersedia" >
                        </div>
                        <button type="submit" name="tambahbuku" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="footer">
</div>

<!-- SCRIPT -->
<script src=""></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery-3.min.js"></script>
<?php require_once "src/link_js.php"; ?>

<script>
$(document).ready( function () {
    $('#table').DataTable();
} );
</script>

</body>
</html>
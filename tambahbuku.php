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
                    $jumlah = $_POST['jumlahbuku'];

                    if( !empty(trim($kode)) && !empty(trim($judul)) && !empty(trim($pengarang)) && !empty(trim($penerbit)) && !empty(trim($lokasi)) && !empty(trim($jumlah)) ){
                        if(tambahbuku($kode, $judul, $pengarang, $penerbit, $lokasi, $jumlah)){
                            echo "Berhasil menambhakn buku";
                        }else{
                            echo "Gagal Menambahkan Buku";
                        }
                    }else{
                        echo "Form masih kosong";
                    }

                }

                ?>

                    <form action="tambahbuku.php" method="POST" name="form" >
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kodebuku" placeholder="Masukkan Kode Buku">
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
                            <label>Jumlah Buku</label>
                            <input type="number" class="form-control" name="jumlahbuku" placeholder="Masukkan Jumlah Buku">
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
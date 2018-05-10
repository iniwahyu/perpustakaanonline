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
<body id="backpinjam">

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="bodypinjam">
<div class="container">
    <div class="form-pinjam">
    <div class="row">
        <div class="col-sm-8">
            <form>
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" class="form-control" name="kodebuku" placeholder="Masukkan Kode Buku">
                </div>
                <div class="form-group">
                    <label>Nama Buku</label>
                    <input type="text" class="form-control" name="namabuku" placeholder="Masukkan Nama Buku">
                </div>
                <div class="form-group">
                    <label>NIM Peminjam</label>
                    <input type="text" class="form-control" name="kodebuku" placeholder="Masukkan NIM Mahasiswa">
                </div>
                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" class="form-control" name="kodebuku" placeholder="Masukkan Nama Mahasiswa">
                </div>
                <div class="form-group">
                    <label>Program Studi</label>
                    <input type="text" class="form-control" name="kodebuku" placeholder="Masukkan Program Studi Mahasiswa">
                </div>
                <button type="submit" name="pinjam" class="btn btn-primary form-control">Pinjam Buku</button>
            </form>
        </div>

        <div class="col-sm-4">
            <div class="alert alert-danger" role="alert">
            <h4>Syarat Peminjaman Buku</h4>
                <p>
                    <ul>
                        <li>Menjadi Mahasiswa Udinus</li>
                        <li>Pinjam meminjam buku diperbolehkan jika ada buku jaminan</li>
                        <li>Buku jaminan berasal dari katalog peminjam</li>
                        <li>Peminjam buku menjemput langsung buku ke pemilik pustaka atau ketemu dilokasi yang disepakati kedua belah pihak.</li>
                    </ul>
                </p>
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
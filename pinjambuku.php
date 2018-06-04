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

<?php

$get = $_GET['kode'];
$query = mysqli_query($mydb, "SELECT * FROM buku WHERE kodebuku = '$get' " );
$hasil = mysqli_fetch_assoc($query);
$session = $_SESSION['user'];


?>

<div id="bodypinjam">
<div class="container">
    <div class="form-pinjam">
    <div class="row">
        <div class="col-sm-8">
            <form action="proses/prosespinjambuku.php" method="POST" >
                <?php
                $pinjam = mysqli_query($mydb, "SELECT * FROM siswa WHERE nim = '$session'");
                $result = mysqli_fetch_assoc($pinjam);
                ?>
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" class="form-control" name="kodebuku" value="<?php echo $hasil['kodebuku']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judulbuku" value="<?php echo $hasil['judulbuku']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>NIM Peminjam</label>
                    <input type="text" class="form-control" name="nimpeminjam" value="<?php echo $result['nim']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" class="form-control" name="namapeminjam" value="<?php echo $result['nama']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Email Peminjam</label>
                    <input type="" class="form-control" name="emailpeminjam" value="<?php echo $result['email']; ?>" readonly>
                </div>
                <?php
                date_default_timezone_set("Asia/Jakarta");
                $tgl1 = date("Y-m-d");
                $tgl2 = date('Y-m-d', strtotime(' +7 days', strtotime($tgl1)));
                ?>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggalpinjam" value="<?php echo $tgl1; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggalkembali" value="<?php echo $tgl2; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="statusbuku" value="Dipinjam" readonly>
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
<?php require_once "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php
if ( !isset($_SESSION['user'] )) {
    header('Location: login.php');
}

$session = $_SESSION['user'];
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php require_once "src/link_css.php"; ?>

</head>
<body>

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body">

<!-- INI CONTAINER BAGIAN ATAS -->
<div class="section1">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <i class="fa fa-user fa-4x mr-auto" aria-hidden="true"></i>  
                        </div>
                        <div class="col-sm-6 text-right">
                            <span>
                                <?php
                                $siswa = mysqli_query($mydb, "SELECT nama FROM siswa WHERE nim = '$session' ");
                                $result = mysqli_fetch_assoc($siswa);

                                if( $result['nama'] == null ){
                                    echo 'Nama Belum Tersedia';
                                }else{
                                    echo $result['nama'];
                                } 
                                ?> 
                            </span>
                            <h4>
                            <?php echo $_SESSION['user']; ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card"> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                        <i class="fa fa-book fa-4x mr-auto" aria-hidden="true"></i>  
                        </div>
                        <div class="col-sm-6 text-right">
                            <span>Jumlah Buku</span>
                            <h4>
                                <?php
                                $buku = mysqli_num_rows(mysqli_query($mydb, "SELECT * FROM buku"));
                                // $row = mysqli_fetch_assoc($buku);
                                echo $buku . " Buah Buku";
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- INI PENUTUP CONTAINER BAGIAN ATAS -->

<!-- ALERT -->
<div class="secitonalert">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <?php 
        if( $result == null ) { ?>
            <div class="alert alert-danger" role="alert">
                Sepertinya Data Diri dengan Nim <?php echo $session; ?> belum lengkap.
                Silahkan untuk mengisi Data Diri di <a href="updateprofil.php">Profil Mahasiswa</a>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
</div>

<!-- INI CONTAINER BAGIAN TENGAH -->
<div class="section2">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white">
                    <i class="fa fa-check-square" aria-hidden="true"></i> <span>Kata Sambutan Ketua Perpustakaan</span>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    Assalamualaikum wr.wb.<br>
                        Para pembaca serta pemerhati Blog Perpustakaan Sekolah yang saya sayangi dan saya 
                    banggakan, dalam kesempatan ini perlu saya mengucapkan rasa berbahagia yang tidak 
                    terhingga karena adanya gerakan peduli terhadap perpustakaan sekolah.
                    Lebih berbahagia lagi karena lomba blog perpustakaan sekolah ini dapat diakses oleh seluruh lapisan masyarakat.
                    Perlu diketahui bahwa keberadaan perpustakaan di Blora, khususnya perpustakaan sekolah di Kabupaten Blora ini kurang  begitu 
                    mendapat perhatian serius dari masyarakat. Lebih menyedihkan lagi bahwa perpustakan-perpustakaan di sekolah pun 
                    seperti terasing bagi penggunanya. Padahal fungsi dan makna keberadaan perpustakaan sekolah sangat penting bagi siswa. 
                    Sehubungan dengan hal tersebut perlu dicari penyebab kemunculan dan solusi terbaiknya, agar perpustakaan sekolah dapat 
                    menjadi daya tarik bagi siswa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- INI PENUTUP CONTAINER BAGIAN TENGAH -->

<!-- INI CONTAINER BAGIAN BAWAH -->
<div class="section3">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white">
                    <i class="fa fa-refresh" aria-hidden="true"></i> <span>Buku Terbaru</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = mysqli_query($mydb, "SELECT * FROM buku ORDER BY kodebuku DESC LIMIT 5");
                        while($row = mysqli_fetch_array($query)){ ?>
                            <tr>
                                <th scope="row"><?php echo $row['kodebuku']; ?></th>
                                <td><?php echo $row['judulbuku']; ?></td>
                                <td><?php echo $row['pengarangbuku']; ?></td>
                                <td><?php echo $row['penerbitbuku']; ?></td>
                            </tr>
                        <?php } ?>
                        
                        </tbody>
                    </table>
                    <a href="buku.php" class="btn btn-primary w-100"> LIHAT SEMUA BUKU </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white">
                    <i class="fa fa-history" aria-hidden="true"></i> <span>History Peminjaman</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pinjam</th>
                            <th scope="col">Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $history = mysqli_query($mydb, "SELECT * FROM peminjaman WHERE nimpeminjam = '$session' ");
                        while($row = mysqli_fetch_assoc($history)) { ?>
                            <tr>
                                <td><?php echo $row['kodebuku']; ?></td>
                                <td><?php echo $row['judulbuku']; ?></td>
                                <td><?php echo $row['tanggalpinjam']; ?></td>
                                <td><?php echo $row['tanggalkembali']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>
<!-- INI PENUTUP CONTAINER BAGIAN BAWAH -->

<div id="footer">
</div>

<!-- SCRIPT -->
<script src="asset/js/jquery-3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

</body>
</html>
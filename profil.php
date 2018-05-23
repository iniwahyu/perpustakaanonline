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
<body id="backprofil">

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body">

<!-- INI CONTAINER BAGIAN TENGAH -->
<div class="section-profil">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header custom-header">
                    <img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw==" alt="">
                    <span>
                        <?php 
                        $query = mysqli_query($mydb, "SELECT * FROM siswa");
                        $result = mysqli_fetch_assoc($query);
                        echo $result['nama']; ?>
                    </span>
                </div>
                <div class="card-body">
                    <ul>
                        <li><?php echo $result['nim']; ?></li>
                        <li>
                            <?php
                            if( $result['progdi'] == 'FIK' ){
                                echo 'Fakultas Ilmu Komputer';
                            }
                            ?>
                        </li>
                        <li>Semester <?php echo $result['semester']; ?></li>
                        <li><?php echo $result['email']; ?></li>
                        <li><?php echo $result['nohp']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
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

<div id="footer">
</div>

<!-- SCRIPT -->
<script src="asset/js/jquery-3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

</body>
</html>
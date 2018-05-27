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
                        $query = mysqli_query($mydb, "SELECT * FROM siswa WHERE nim = '$session' ");
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
                    <i class="fa fa-history" aria-hidden="true"></i> <span>History Peminjaman</span>
                </div>
                <div class="card-body">
                <div class="col-md-12">
                    <?php
                    $history = mysqli_query($mydb, "SELECT * FROM peminjaman WHERE nimpeminjam = '$session' ");

                    if ( mysqli_num_rows($history) ){ ?>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="5">Kode</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pinjam</th>
                                <th scope="col">Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($history)) { ?>
                            <tr>
                                <td><?php echo $row['kodebuku']; ?></td>
                                <td><?php echo $row['judulbuku']; ?></td>
                                <td><?php echo $row['tanggalpinjam']; ?></td>
                                <td><?php echo $row['tanggalkembali']; ?></td>
                            </tr>
                        <?php }  ?>
                        </tbody>
                    </table>
                    <?php }else{ echo 'Belum Pernah Melakukan Peminjaman'; } ?>
                </div> 
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
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
<body id="backbuku">

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body">
<div class="container">
    <div class="main-buku">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px;">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Daftar Buku 
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered display" id="table" >
                    <thead> <!-- ABU ABU -->
                        <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $query = mysqli_query($mydb, "SELECT * FROM buku");
                    while($row = mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td><?php echo $row['kodebuku']; ?></td>
                            <td><?php echo $row['judulbuku']; ?></td>
                            <td><?php echo $row['pengarangbuku']; ?></td>
                            <td><?php echo $row['penerbitbuku']; ?></td>
                            <td><?php echo $row['lokasibuku']; ?></td>
                            <td>
                                <?php
                                $buku = $row['kodebuku'];
                                $p = mysqli_query($mydb, "SELECT * FROM peminjaman WHERE kodebuku = '$buku' ");
                                $y = mysqli_fetch_assoc($p);        
                                
                                if($y['statusbuku'] == 'Dipinjam'){
                                    echo '<p class="btn btn-danger">Tidak Tersedia</p>';
                                }else{
                                    if( $row['statusbuku'] == 'Tersedia' ){
                                        echo '<p class="btn btn-success">Tersedia</p>';
                                    }
                                    
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if( $y['statusbuku'] != 'Dipinjam' ){ ?>
                                    <a href="pinjambuku.php?kode=<?php echo $row['kodebuku']; ?>">Pinjam</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>

        <?php
        $no = 1;
        $info = mysqli_query($mydb, "SELECT * FROM peminjaman");

        if( mysqli_num_rows($info) > 0 ){

        ?>

        <div class="col-sm-12">
            <div class="alert alert-info" role="alert">
                Buku yang <b>TIDAK TERSEDIA</b> akan <b>TERSEDIA</b> kembali pada.
                <table class="table">
                    <?php
                    while( $row = mysqli_fetch_assoc($info) ) { 
                    ?>
                    <tr>
                        <td> <?php echo $no++ . "."; ?> </td>
                        <td> <?php echo $row['judulbuku']; ?> </td>
                        <td> <?php echo $row['tanggalkembali']; ?> </td>
                    </tr>                  
                <?php } ?>
                </table>
            </div>  
        </div>
        <?php } ?>
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
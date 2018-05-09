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
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Daftar Buku <span><a href="tambahbuku.php" class="btn btn-primary" >Tambah Buku</a></span>
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
                                if($row['statusbuku'] == 'Tersedia' ){
                                    echo '<p class="btn btn-success btn-sm">Tersedia</p>';
                                }else{
                                    echo '<p class="btn btn-danger">Tidak Tersedia</p>';
                                }?>
                            </td>
                            <td><a href="">Pinjam</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>

        <div class="col-sm-1"></div>
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
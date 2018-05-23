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
<body id="backupdate">

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body">

<!-- INI CONTAINER BAGIAN TENGAH -->
<div class="section-update">
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Silahkan Update Data Diri Anda
                </div>
                <div class="card-body">
                    <?php
                    
                    if( isset($_POST['update'])){
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $progdi = $_POST['progdi'];
                        $semester = $_POST['semester'];
                        $email = $_POST['email'];
                        $nohp = $_POST['nohp'];

                        if(!empty(trim($nim)) && !empty(trim($nama)) && !empty(trim($progdi)) && !empty(trim($semester)) && !empty(trim($email)) && !empty(trim($nohp)) ){
                            if(profilawal($nim, $nama, $progdi, $semester, $email, $nohp)){
                                echo 'Berhasil';
                            }else{
                                echo 'Gagal';
                            }
                        }else{
                            echo 'Form Kosong';
                        }

                    }

                    ?>
                    <form action="updateprofil.php" method="POST" >
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim" value="<?php echo $session; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Mahasiswa">
                            <small class="form-text text-muted">Mohon untuk menulis Nama Lengkap.</small>
                        </div>
                        <div class="form-group">
                            <label>Progdi</label>
                            <select name="progdi" class="form-control">
                                <option value="FIK">Fakultas Ilmu Komputer</option>
                                <option value="FEB">Fakultas Ekonomi dan Bisnis</option>
                                <option value="FKES">Fakultas Kesehatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <select name="semester" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email Mahasiswa">
                            <small class="form-text text-muted">Contoh Email Mahasiswa 111201609357@mhs.dinus.ac.id.</small>
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" class="form-control" name="nohp" placeholder="Nomor Handphone">
                            <small class="form-text text-muted">Pastikan Nomor Handphone Tersebut Aktif.</small>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update Profil</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-1"></div>
    </div>
</div>
</div>
<!-- INI PENUTUP CONTAINER BAGIAN TENGAH -->

</div>

<div id="footer">
</div>

<!-- SCRIPT -->
<script src="asset/js/jquery-3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

</body>
</html>
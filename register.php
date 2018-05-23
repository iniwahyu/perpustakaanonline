<?php require_once "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Udinus | Login</title>

    <?php require_once "src/link_css.php"; ?>

</head>
<body id="backlogin">

<div id="bodylogin">
<div class="container">
    <div class="main-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="kiri">
                <div class="kiri-image">
                    <img src="asset/img/logoudinus.png" alt="">
                    
                </div>
                <div class="kiri-body">
                    Bagi mahasiswa yang ingin melakukan login.
                    <br>
                    Harap menggunakan akun SiAdin (bukan Akun Email Mahasiswa).
                    <br>
                    Jika mengalami kendala dalam login, silahkan untuk menghubungi langsung kepada pihak terkait.
                </div>
                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="kanan">
                <div class="kanan-head">

                </div>
                <div class="kanan-body">

                <?php

                if(isset($_POST['register'])) {

                    $nim        = $_POST['nim_mahasiswa'];
                    $password   = $_POST['password_mahasiswa'];

                    if(!empty(trim($nim)) && !empty(trim($password)) ){
                        if(register($nim, $password)){
                            echo 'berhasil';
                        }else{
                            echo 'gagal';
                        }
                    }else{
                        echo 'ada form kosong';
                    }

                }

                ?>

                <form action="register.php" method="post" >
                    <div class="form-group">
                        <input type="text" class="form-control" name="nim_mahasiswa" placeholder="NIM / NPP">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_mahasiswa" placeholder="Password Siadin">
                    </div>
                    <button type="submit" name="register" class="form-control btn btn-danger">Register</button>
                    <small>Jika sudah memiliki <b>Akun</b>. Silahkan untuk <a href="login.php"><b>Login</b></a></small>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

<!-- SCRIPT -->
<script src="asset/js/jquery-3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<?php require_once "src/link_js.php"; ?>

</body>
</html>
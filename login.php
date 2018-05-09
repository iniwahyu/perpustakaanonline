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

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="bodylogin" style="margin-top: 15px;">
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
                <form action="" method="post" >
                    <div class="form-group">
                        <input type="text" class="form-control" name="nim_mahasiswa" placeholder="NIM / NPP">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" NAME="password_mahasiswa" placeholder="Password Siadin">
                    </div>
                    <button type="submit" name="login" class="form-control btn btn-danger">Submit</button>
                </form>
                </div>
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
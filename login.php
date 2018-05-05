<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Udinus | Login</title>

    <?php require_once "src/link_css.php"; ?>

</head>
<body>

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body" style="margin-top: 15px;">
<div class="container">
    <div class="main-form">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <p>ini kiri</p>
                </div>
                <div class="col-sm-6">
                    <p>ini kanan</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
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
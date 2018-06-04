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
<body id="backbukutamu">

<div id="header">
<?php require_once "menu.php"; ?>
</div>

<div id="body">
<div class="container">
    <div class="form-bukutamu">
    <div class="row">
        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header text-white">
                    Kritik dan Saran    
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Kritik</label>
                            <textarea name="kritik" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Saran</label>
                            <textarea name="saran" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
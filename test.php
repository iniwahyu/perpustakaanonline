<!DOCTYPE html>
<html lang="en">
<head>
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

<div id="body" style="margin-top: 15px;">
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Paijo</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>Gan</td>
        </tr>
    </tbody>
</table>
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
    $('#table_id').DataTable();
} );
</script>

</body>
</html>
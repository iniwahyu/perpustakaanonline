<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imk';

$mydb = mysqli_connect($host, $user, $pass, $db);

if ( !$mydb ){
    mysqli_connect_error();
}

?>
<?php 

require_once "koneksi.php";

$destroy = session_destroy();

if( $destroy ){
    header('Location: login.php');
}

?>
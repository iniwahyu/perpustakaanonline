<?php

function tambahbuku($kode, $judul, $pengarang, $penerbit, $lokasi, $status){

    global $mydb;

    $kode = mysqli_real_escape_string($mydb, $kode);
    $judul = mysqli_real_escape_string($mydb, $judul);
    $pengarang = mysqli_real_escape_string($mydb, $pengarang);
    $penerbit = mysqli_real_escape_string($mydb, $penerbit);
    $lokasi = mysqli_real_escape_string($mydb, $lokasi);
    $status = mysqli_real_escape_string($mydb, $status);

    $query = "INSERT INTO buku (kodebuku, judulbuku, pengarangbuku, penerbitbuku, lokasibuku, statusbuku) 
            VALUES ('$kode', '$judul', '$pengarang', '$penerbit', '$lokasi', '$status' ) ";
    $tambah = mysqli_query($mydb, $query);

    if ( $tambah ){
        return true;
    }else{
        return false;
    }

}


?>
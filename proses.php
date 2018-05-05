<?php

function tambahbuku($kode, $judul, $pengarang, $penerbit, $lokasi, $jumlah){

    global $mydb;

    $kode = mysqli_real_escape_string($mydb, $kode);
    $judul = mysqli_real_escape_string($mydb, $judul);
    $pengarang = mysqli_real_escape_string($mydb, $pengarang);
    $penerbit = mysqli_real_escape_string($mydb, $penerbit);
    $lokasi = mysqli_real_escape_string($mydb, $lokasi);
    $jumlah = mysqli_real_escape_string($mydb, $jumlah);

    $query = "INSERT INTO buku (kodebuku, judulbuku, pengarangbuku, penerbitbuku, lokasibuku, jumlahbuku) 
            VALUES ('$kode', '$judul', '$pengarang', '$penerbit', '$lokasi', '$jumlah' ) ";
    $tambah = mysqli_query($mydb, $query);

    if ( $tambah ){
        return true;
    }else{
        return false;
    }

}


?>
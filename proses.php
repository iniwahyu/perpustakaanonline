<?php

function register($nim, $password){

    global $mydb;

    $nim            = mysqli_real_escape_string($mydb, $nim);
    $password       = mysqli_real_escape_string($mydb, $password);

    $password = password_hash($password, PASSWORD_DEFAULT); 
	$query = "INSERT INTO user (username, password) VALUES ('$nim', '$password') ";

	if( mysqli_query($mydb, $query) ){
		return true;
	}else{
		return false;
	}
}

function login($nim, $password){

    global $mydb;

    $nim     		= mysqli_real_escape_string($mydb, $nim);
	$password 		= mysqli_real_escape_string($mydb, $password);

	$query = "SELECT password FROM user WHERE username = '$nim' ";
	$result = mysqli_query($mydb, $query);
	$hash 	= mysqli_fetch_assoc($result)['password'];

	// Menguji Password Hash
	if ( password_verify($password, $hash) ) {
		return true;
	}else{
		return false;
	}

}

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

function profilawal($nim, $nama, $progdi, $semester, $email, $nohp){

    global $mydb;

    $nim = mysqli_real_escape_string($mydb, $nim);
    $nama = mysqli_real_escape_string($mydb, $nama);
    $progdi = mysqli_real_escape_string($mydb, $progdi);
    $semester = mysqli_real_escape_string($mydb, $semester);
    $email = mysqli_real_escape_string($mydb, $email);
    $nohp = mysqli_real_escape_string($mydb, $nohp);

    $query = "INSERT INTO siswa (nim, nama, progdi, semester, email, nohp) VALUES
            ('$nim', '$nama' , '$progdi', '$semester', '$email', '$nohp') ";
    $tambah = mysqli_query($mydb, $query);

    if( $tambah ){
        return true;
    }else{
        return false;
    }

}

function pinjambuku($kode, $judulbuku, $nim, $nama, $email, $tp, $tk, $st){

    global $mydb;

    $kode = mysqli_real_escape_string($mydb, $kode);
    $judulbuku = mysqli_real_escape_string($mydb, $judulbuku);
    $nim = mysqli_real_escape_string($mydb, $nim);
    $nama = mysqli_real_escape_string($mydb, $nama);
    $email = mysqli_real_escape_string($mydb, $email);
    $tp = mysqli_real_escape_string($mydb, $tp);
    $tk = mysqli_real_escape_string($mydb, $tk);
    $st = mysqli_real_escape_string($mydb, $st);

    $query = "INSERT INTO peminjaman (kodebuku, judulbuku, nimpeminjam, namapeminjam, emailpeminjam, tanggalpinjam, tanggalkembali, statusbuku)
             VALUES ('$kode', '$judulbuku', '$nim', '$nama', '$email', '$tp', '$tk', '$st') ";
    $pinjam = mysqli_query($mydb, $query);

    if( $pinjam ){
        return true;
    }else{
        return false;
    }

}

?>
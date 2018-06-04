<?php 

require_once "../koneksi.php"; 

if( isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $progdi = $_POST['progdi'];
    $semester = $_POST['semester'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];

    $query = "INSERT INTO siswa (nim, nama, progdi, semester, email, nohp) VALUES
            ('$nim', '$nama' , '$progdi', '$semester', '$email', '$nohp') ";
    $tambah = mysqli_query($mydb, $query);

    if( $tambah ){
        header('Location: ../index.php?status=sukses');
    }else{
        header('Location: ../updateprofil.php?status=gagal');
    }

}

?>
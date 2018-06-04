<?php 

require_once "../koneksi.php"; 

if( isset($_POST['pinjam'])){
    $kode = $_POST['kodebuku'];
    $judulbuku = $_POST['judulbuku'];
    $nim = $_POST['nimpeminjam'];
    $nama = $_POST['namapeminjam'];
    $email = $_POST['emailpeminjam'];
    $tp = $_POST['tanggalpinjam'];
    $tk = $_POST['tanggalkembali'];
    $st = $_POST['statusbuku'];

    $query = "INSERT INTO peminjaman (kodebuku, judulbuku, nimpeminjam, namapeminjam, emailpeminjam, tanggalpinjam, tanggalkembali, statusbuku)
             VALUES ('$kode', '$judulbuku', '$nim', '$nama', '$email', '$tp', '$tk', '$st') ";
    $pinjam = mysqli_query($mydb, $query);

        $mail = new PHPMailer\PHPMailer\PHPMailer();                              // Passing `true` enables exceptions
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'konsepstore@gmail.com';                 // SMTP username
        $mail->Password = 'gombloh123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('no-reply@gostand.com', 'Admin Perpustakaan');
        $mail->addAddress($_POST['emailpeminjam'], $_POST['namapeminjam'] );     // Add a recipient
        //$mail->addAddress('konsepstore@gmail.com');               // Name is optional
        $mail->addReplyTo('no-reply@gostand.com', 'Admin Perpustakaan');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['nimpeminjam'];
        $mail->Body    = "Terima kasih untuk mahasiswa ".$_POST['namapeminjam']." Telah melakukan peminjaman buku dengan judul ". $_POST['judulbuku'] 
        ."<br>". "Tanggal Peminjaman ".$_POST['tanggalpinjam']." dan Tanggal Kembali ".$_POST['tanggalkembali']." <br>Terima Kasih";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // $mail->send();
        // echo 'Message has been sent';
        

    if( $pinjam && $mail->send() ){
        header('Location: ../profil.php?status=sukses');
    }else{
        header('Location: ../pinjambuku.php?status=gagal');
    }

}

?>
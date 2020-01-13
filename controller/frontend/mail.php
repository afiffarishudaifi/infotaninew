<?php
include "phpmailer/class.phpmailer.php";
if (isset($_POST['kirim'])) {


    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com"; //host masing2 provider email
    $mail->SMTPDebug = 2;
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "afiffaris5@gmail.com"; //user email
    $mail->Password = "Ar3manita040699"; //password email
    $mail->SetFrom($_POST['email'], $_POST['nama']); //set email pengirim
    $mail->Subject = "Komentar dari ".$_POST['nama']; //subyek email
    $mail->AddAddress("infotani.mif@gmail.com", "You");  //tujuan email


    /*$mail->MsgHTML($_POST['komentar']."
    <br>
    <button><a href='http://localhost/infotani/Pages/frontend/index.php'
     target='output'>Link contoh 1</a></button>
    ");*/


    $mail->MsgHTML($_POST['komentar']);
    if($mail->Send()) {?> <script language="JavaScript">
    alert('Berhasil Terkirim');
    </script><?php
    header("location:../../pages/frontend/contact.php");

}else echo "Failed to sending message";
}
?>

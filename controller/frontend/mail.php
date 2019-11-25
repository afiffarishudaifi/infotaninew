<?php
include "classes/class.phpmailer.php";
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
    $mail->AddAddress("afiffaris5@gmail.com", "You");  //tujuan email
    $mail->MsgHTML($_POST['komentar']);
    if($mail->Send()) {?> <script language="JavaScript">
    alert('Berhasil Terkirim');
    setTimeout(function() {window.location.href='../../pages/frontend/contact.php'},10);
    </script><?php
}else echo "Failed to sending message";
}
?>

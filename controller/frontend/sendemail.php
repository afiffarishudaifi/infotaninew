<?php
if (isset($_POST['kirim'])) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "mxmael4324@gmail.com";
    $subject = "Checking PHP mail";
    $message = $_POST['komentar'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Pesan email sudah terkirim.";
}
?>

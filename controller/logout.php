<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
header("Location: ../pages/frontend/login.php"); // Langsung mengarah ke Home index.php
}
?>

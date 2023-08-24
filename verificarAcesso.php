<?php
    session_start(); 
if($_SESSION['logado'] != "1")
{
    header('location:index.php');
    die();
}
?>


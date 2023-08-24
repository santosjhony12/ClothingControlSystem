<?php require_once ('verificarAcesso.php'); ?>
    <?php
    $_SESSION['logado'] = "0";
    header("Location: index.php");
    ?>

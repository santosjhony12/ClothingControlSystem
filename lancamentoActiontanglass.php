<?php require_once ('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylelan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Controle</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />

</head>

<body>
  <header>
    <nav>
      <a href="main.php"><img src="IMG/nsg.png" class="imglogo2"></a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
          <li><a href="main.php">Menu</a></li>
          <li><a href="box.php">Box</a></li>
          <li><a href="lehr.php">Lehr</a></li>
          
          <li><a href="contagem.php">Contar</a></li>
          <li><a href="listar.php">Listar</a></li>
          <li><a href="advertencia.php">Advertências</a></li>
          <li><a href="tanglass.php">Voltar</a></li>
      </ul>
    </nav>
  </header>
  <script src="mobile-navbar.js"></script>


<?php 
$cod_depart = 03;
$descr_depart = "Tanglass";
$data = $_POST['date'];
$cor = $_POST['txtCor'];
$movimento = $_POST['txtMovimento'];
$tipo = $_POST['txtTipo'];
$tamanho = $_POST['txtTamanho'];
$descricao = $_POST['txtDescricao'];
$codigoRoupa = $_POST['txtCodigo'];

require_once 'conexaoBD.php';

$sql = "INSERT INTO lancamento (data_lanc, tipo, cod_vest, cor, tamanho, tipo_movimento, descricao, cod_depart, descricao_depart)
        VALUES ('".$data."','".$tipo."','".$codigoRoupa."','".$cor."','".$tamanho."','".$movimento."','".$descricao."','".$cod_depart."','".$descr_depart."');";
if ($conexao->query($sql) === TRUE) {
    echo '<div class="w3-container w3-card-4 w3-center">
    <img src="confirm.gif" class="confirm">
        <h1>Lançamento realizado com Sucesso!</h1><br>
    <a href="box.html" class="btnFinais" style="background:#007BFF">Voltar</a><br><br>
    </div>';
}
else {
    echo '<div class="w3-container w3-card-4 w3-center">
        <h1>Alguma coisa ocorreu errado! Tente novamente.</h1><br>
   <a src="box.html" class="btnFinais">Voltar</a> <br><br>
    </div>';
}




$conexao->close();
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<?php require_once 'rodape.php'?>
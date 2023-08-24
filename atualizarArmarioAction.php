<?php require_once ('verificarAcesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" type="text/css" href="Style/stylelan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NSG Group</title>
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />
 <link rel="stylesheet" type="text/css" href="Style/load.css">

<style>
.confirm {
    margin-top: 2em;
    width: 10%;
}

@media screen and (max-width:950px){
.confirm{
    width: 30%;
}
}
</style>
<link rel="stylesheet" href="Style/style.css" />

  </head>

  <body>
      
      <div id="preloader">
    <div class="inner">
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>                    
       </div>
    </div>
</div>

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
            <li><a href="box.php">Realizar Lançamento</a></li>
            <li><a href="contagem.php">Contar</a></li>
            <li><a href="listar.php">Listar</a></li>
            <li><a href="advertencia.php">Advertências</a></li>
        </ul>
      </nav>
    </header>
    <script src="JS/preloader.js"></script>
<script src="JS/mobile-navbar.js"></script>

<div class="w3-container">

<?php 

require_once ('conexaoBD.php');

 $cod = $_POST['cod_pk'];
 $name = $_POST['name_colaborador'];
 $depart = $_POST['depart'];

$sql = "UPDATE armario SET nome = '".$name."' WHERE cod = ".$cod."";
if ($conexao->query($sql) === TRUE){
  echo '<div class="w3-container w3-card-4 w3-center">
  <img src="confirm.gif" class="confirm">
      <h1>Atualização realizada com Sucesso!</h1><br>
  <a href="armario.php" class="btnFinais" style="background:#007BFF">Voltar</a><br><br>
  </div>';
}else{
  echo '<div class="w3-container w3-card-4 w3-center">
  <h1>Alguma coisa ocorreu errado! Tente novamente.</h1><br>
<a href="armario.php" class="btnFinais">Voltar</a> <br><br>
</div>';
}

?>

</div>

</body>
</html>
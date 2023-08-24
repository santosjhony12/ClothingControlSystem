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
      <link rel="stylesheet" href="Style/style.css" />
      <link rel="icon" type="image/png" href="IMG/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="Style/load.css">
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
               <li><a href="box.php">Realizar Lançamentos</a></li>
               <li><a href="contagem.php">Contar</a></li>
               <li><a href="listar.php">Listar</a></li>
               <li><a href="advertencia.php">Advertências</a></li>
               <li><a href="main.php">Voltar</a></li>
            </ul>
         </nav>
      </header>
      <script src="JS/preloader.js"></script>
      <script src="JS/mobile-navbar.js"></script>
      <div class="w3-container">
      <form method="get" action="liberarEspacoAction.php" class="edicao">
         <h1 style="font-weight:bold; font-size: 1.5em">Liberar Espaço</h1>
         <br>
         <label style="font-weight:bold">Departamento</label><br>
         <select name="txtDepart" class="box" style="width:50%">
            <option value="1">BOX</option>
            <option value="2">LEHR</option>
            <option value="3">TANGLASS</option>
         </select>
         <br><br>
         <label style="font-weight:bold">Data:</label><br>
         <input type="date" name="datainicio" class="box" required>
         <label style="font-weight:bold; margin: 1em;">Até</label> 
         <input type="date" name="datafinal" class="box" required>
         <br><br>
         <!--alterei a partir daqui-->
         <button name="btnAdicionar" class="btnAdd w3-left"> 
         <i class="w3-xxlarge fa fa-trash"></i> Excluir
         </button>
      </form>
   </body>
</html>